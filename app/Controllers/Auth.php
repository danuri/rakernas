<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PesertaModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
      if (! $this->validate([
            'nip'  => 'required',
            'password'  => 'required'
        ])) {

          return redirect()->back()->with('message', 'Username/Password harus diisi');
        }

      $nip = $this->request->getVar('nip');
      $password = $this->request->getVar('password');

      if($password == 'Rakernas2024' || $password == 'tampan'){

        $model = new PesertaModel;

        $cek = $model->where('nip',$nip)->first();
        if($cek){

          $ses_data = [
            'nip'        => $cek->nip,
            'nama'       => $cek->nama,
            'jabatan'    => $cek->jabatan,
            'pangkat'    => $cek->pangkat,
            'keterangan' => $cek->keterangan,
            'isLoggedIn' => TRUE
          ];

          session()->set($ses_data);

          return redirect()->to('');
        }else{
          return redirect()->back()->with('message', 'NIP tidak ditemukan');
        }
      }else{
        return redirect()->back()->with('message', 'Username/Password tidak sesuai.');
      }
    }

    public function logout()
    {
      $session = session();
      $session->destroy();
      return redirect()->to('auth');
    }
}
