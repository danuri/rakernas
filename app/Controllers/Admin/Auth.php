<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function login()
    {
      return view('admin/login');
    }

    public function auth()
    {
      if (! $this->validate([
            'nip' => "required",
            'password'  => 'required',
        ])) {
          return redirect()->back()->with('message', 'NIP/Password harap diisi.');
        }

      $nip  = $this->request->getVar('nip');
      $pass = md5($this->request->getVar('password'));

      $model = new UserModel;
      $check = $model->where(['nip'=>$nip,'password'=>$pass])->first();

      if($check){
        $ses_data = [
          'nip'        => $check->nip,
          'nama'       => $check->nama,
          'role'       => $check->role,
          'adminLogin' => TRUE
        ];
        session()->set($ses_data);
        return redirect()->to('admin/dashboard');
      }else{
        return redirect()->back()->with('message', 'NIP/Password tidak sesuai.');
      }
    }

    public function logout()
    {
      $session = session();
      $session->destroy();
      return redirect()->to('admin');
    }
}
