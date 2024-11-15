<?php

namespace App\Controllers;
use App\Models\PesertaModel;

class Display extends BaseController
{
    public function index(): string
    {
        return view('display');
    }

    public function scan()
    {
      $model = new PesertaModel;
      $nomor = $this->request->getVar('idcard');
      $cari = $model->where('nomor',$nomor)->first();

      if($cari){

        $update = $model->where('nomor',$nomor)->set(['sesi_'.get_option('sesi')=>date('Y-m-d H:i:s')])->update();
      ?>
      <div class="col-11 col-lg-10 mx-auto">
        <h3 class="mb-3 fw-600">Selamat Datang</h3>
        <p class="text-black-50 mb-4">Kehadiran Anda telah direkam. Terima Kasih!</p>

        <!-- Contact Form -->
        <div class="card">
          <div class="card-body">
            <img src="<?= $cari->foto?>" alt="">
            <h4><?= $cari->nama?></h4>
            <h5 class="text-primary"><?= $cari->jabatan?></h5>
            <br><br>
            <p>Terekam pada: 12/10/2024 08:09:10</p>
          </div>
        </div>
      </div>
      <?php
      }else{
          echo '<h3 class="text-danger">Data tidak ditemukan</h3>';
      }
    }

}
