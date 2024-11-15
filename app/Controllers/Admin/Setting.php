<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Setting extends BaseController
{
    public function index()
    {
        return view('admin/jadwal');
    }
}
