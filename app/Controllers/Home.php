<?php

namespace App\Controllers;
use App\Models\PesertaModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new PesertaModel;
        $data['peserta'] = $model->where(['nip'=>session('nip')])->first();
        return view('index', $data);
    }

    public function checkin()
    {
      date_default_timezone_set('Asia/Jakarta');
      
      $model = new PesertaModel;

      if(date('Ymd') == '20240204'){
        $param = array('checkin_1' => date('Y-m-d H:i:s'));
      }else if(date('Ymd') == '20240205'){
        $param = array('checkin_2' => date('Y-m-d H:i:s'));
      }else if(date('Ymd') == '20240206'){
        $param = array('checkin_3' => date('Y-m-d H:i:s'));
      }else if(date('Ymd') == '20240207'){
        $param = array('checkin_4' => date('Y-m-d H:i:s'));
      }else{
        return redirect()->to('');
      }

      $update = $model->set($param)->where(['nip'=>session('nip')])->update();

      return redirect()->back()->with('message', 'Anda telah checkin.');
    }

    public function checkout()
    {
      $model = new PesertaModel;

      if(date('Ymd') == '20240204'){
        $param = array('checkout_1' => date('Y-m-d H:i:s'));
      }else if(date('Ymd') == '20240205'){
        $param = array('checkout_2' => date('Y-m-d H:i:s'));
      }else if(date('Ymd') == '20240206'){
        $param = array('checkout_3' => date('Y-m-d H:i:s'));
      }else if(date('Ymd') == '20240207'){
        $param = array('checkout_4' => date('Y-m-d H:i:s'));
      }else{
        redirect('home');
      }

      $update = $model->set($param)->where(['nip'=>session('nip')])->update();

      return redirect()->back()->with('message', 'Anda telah checkout.');
    }
}
