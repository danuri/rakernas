<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Libraries\GroceryCrud;
use App\Models\PesertaModel;

class Peserta extends BaseController
{
    public function index()
    {
        $crud = new GroceryCrud();

        $crud->setTable('peserta')
        ->setSubject('Peserta', 'Peserta')
        ->columns(['nip', 'nama', 'jabatan', 'pangkat', 'keterangan','checkin_1','checkout_1','checkin_2','checkout_2','checkin_3','checkout_3'])
        ->displayAs('nip', 'NIP')
        ->fields(['nip', 'nama', 'jabatan', 'pangkat', 'keterangan'])
        ->editFields(['nip', 'nama', 'jabatan', 'pangkat', 'keterangan','checkin_1','checkout_1','checkin_2','checkout_2','checkin_3','checkout_3'])
        ->requiredFields(['nip', 'nama', 'jabatan', 'pangkat', 'keterangan']);

        $output = $crud->render();

        return view('admin/peserta', (array)$output);
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
