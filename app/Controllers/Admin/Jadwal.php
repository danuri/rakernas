<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Jadwal extends BaseController
{
    public function index()
    {
        return view('admin/jadwal');
    }
}
