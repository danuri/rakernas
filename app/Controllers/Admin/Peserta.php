<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use \Hermawan\DataTables\DataTable;
use App\Models\PesertaModel;

class Peserta extends BaseController
{
    public function index()
    {
        return view('admin/peserta');
    }

    public function getdata()
    {
      $model = new PesertaModel;

      return DataTable::of($model)
      ->add('action', function($row){
          return '<a href="javascript:;" type="button" class="btn btn-primary btn-sm" onclick="edit(\''.$row->id.'\')">Edit</a>';
      })
      ->toJson(true);
    }

    public function getpeserta($id)
    {
      $model = new PesertaModel;
      $find = $model->find($id);

      return $this->response->setJSON($find);
    }

    public function addpeserta()
    {
      $model = new PesertaModel;
      $param = [
        'nip' => $this->request->getVar('nip'),
        'nama' => $this->request->getVar('nama'),
        'jabatan' => $this->request->getVar('jabatan'),
        'nomor' => $this->request->getVar('nomor'),
      ];
      $insert = $model->insert($param);

      echo 'success';
    }

    public function updatepeserta()
    {
      $model = new PesertaModel;
      $param = [
        'nomor' => $this->request->getVar('nomor'),
      ];
      $insert = $model->update($this->request->getVar('id'),$param);

      echo 'success';
    }

    public function import()
		{
			$file_excel = $this->request->getFile('lampiran');
			$ext = $file_excel->getClientExtension();
			if($ext == 'xls') {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
			} else {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $render->load($file_excel);

			$data = $spreadsheet->getActiveSheet()->toArray();
			foreach($data as $x => $row) {
				if ($x == 0) {
					continue;
				}

				$nip = $row[0];
				$nama = $row[1];
				$jabatan = $row[2];
				$pangkat = $row[3];
				$keterangan = $row[4];

        $param = [
          'nip' => $nip,
          'nama' => $nama,
          'jabatan' => $jabatan,
          'pangkat' => $pangkat,
          'keterangan' => $keterangan
        ];

        $model = new PesertaModel;
        $insert = $model->insert($param);
			}

			return redirect()->back()->with('message', 'Data telah diimport');
		}
}
