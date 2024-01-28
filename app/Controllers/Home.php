<?php

namespace App\Controllers;
use App\Models\PesertaModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new PesertaModel;
        $data['peserta'] = $model->find(1);
        return view('index', $data);
    }
}
