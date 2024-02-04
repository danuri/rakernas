<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Presensi Rakernas Kemenag 2024</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Rakernas Kementerian agama tahun 2024">
	<meta name="keywords" content="rakernas, kemenag">
	<meta name="author" content="danunih">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/basic.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/layout.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/blogs.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/ionicons.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/animate.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/owl.carousel.css">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/gradient.css">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/new-skin/new-skin.css">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/demos/demo-1-colors.css">
	<!--<link rel="stylesheet" href="<?= base_url();?>assets/css/template-colors/blue.css" />-->
	<!--<link rel="stylesheet" href="<?= base_url();?>assets/css/template-colors/orange.css" />-->
	<!--<link rel="stylesheet" href="<?= base_url();?>assets/css/template-colors/pink.css" />-->
	<!--<link rel="stylesheet" href="<?= base_url();?>assets/css/template-colors/purple.css" />-->
	<!--<link rel="stylesheet" href="<?= base_url();?>assets/css/template-colors/red.css" />-->

	<!--
		Template Dark
	-->
	<!--<link rel="stylesheet" href="<?= base_url();?>assets/css/template-dark/dark.css" />-->


	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="https://kemenag.go.id/assets/imgs/theme/favicon.png">
  <style media="screen">
    ol.jadwal {
      list-style: decimal;
			padding-left: 18px;
    }
    ul.zoom {
			list-style: disc;
    }

    .resume-items .resume-item {
        padding: 15px 0;
    }
		p.jabatan{
    	font-size: 13px;
		}

		ul.jadwal {
		    list-style: disc;
		    margin-top: 0px;
		    margin-bottom: 0px;
		    padding-left: 18px;
		}
  </style>

</head>

<body>
	<div class="page new-skin">

		<!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- background -->
		<div class="background gradient">
			<ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
		</div>

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!--
				Header
			-->
			<header class="header">

				<!-- header profile -->
				<div class="profile">
					<div class="title"><?= session('nama');?></div>
				</div>
				<!-- menu -->
				<div class="top-menu">
					<ul>
						<li class="active">
							<a href="#about-card">
								<span class="icon ion-person"></span>
								<span class="link">Kehadiran</span>
							</a>
						</li>
						<li>
							<a href="#resume-card">
								<span class="icon ion-android-list"></span>
								<span class="link">Jadwal</span>
							</a>
						</li>
						<li>
							<a href="#works-card">
								<span class="icon ion-paintbrush"></span>
								<span class="link">Zoom Access</span>
							</a>
						</li>
						<li>
							<a href="#contacts-card">
								<span class="icon ion-at"></span>
								<span class="link">Contact</span>
							</a>
						</li>
						<li>
							<a href="#other-card">
								<span class="icon ion-asterisk"></span>
								<span class="link">Lainnya</span>
							</a>
						</li>
					</ul>
				</div>

			</header>

			<!--
				Card - Started
			-->
			<div class="card-started" id="home-card">

				<!--
					Profile
				-->
				<div class="profile no-photo">

					<!-- profile image -->
					<div class="slide" style="background-image: url(<?= base_url();?>assets/images/rakernas2024.png);"></div>

					<!-- profile titles -->
					<div class="title"><?= session('nama');?></div>
					<!--<div class="subtitle">---</div>-->
					<div class="subtitle subtitle-typed">
						<div class="">
							<p class="jabatan">
								<b><?= session('jabatan');?></b><br>
								<b><?= session('keterangan');?></b>
							</p>
						</div>
					</div>

					<!-- profile buttons -->
					<div class="lnks">
						<a href="<?= site_url('auth/logout');?>" class="lnk">
							<span class="text">Logout</span>
						</a>
						<a href="#" class="lnk discover">
							<span class="text">Contact</span>
						</a>
					</div>

				</div>

			</div>

			<!--
				Card - About
			-->
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">

					<!--
						About
					-->
					<div class="content about">

						<!-- title -->
						<div class="title">Kehadiran</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Hari</th>
                      <th colspan="2">Kehadiran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Minggu, 04 Februari 2024</td>
                      <td>
												<?php
												if($peserta->checkin_1){
													echo $peserta->checkin_1;
												}else{
													if(date('Ymd') == '20240204'){
														echo '<a href="'.site_url('checkin').'" class="button">Mulai</a> ';
													}else{
														echo 'Belum Tersedia';
													}
												}
												?>
											</td>
											<td>
												<?php
												if($peserta->checkout_1){
													echo $peserta->checkout_1;
												}else{
													if(date('Ymd') == '20240204'){
														echo '<a href="'.site_url('checkout').'" class="button">Selesai</a>';
													}else{
														echo 'Belum Tersedia';
													}
												}
												?>
											</td>
                    </tr>
                    <tr>
                      <td>Senin, 05 Februari 2024</td>
                      <td>
												<?php
												if($peserta->checkin_2){
													echo $peserta->checkin_2;
												}else{
													if(date('Ymd') == '20240205'){
														echo '<a href="'.site_url('checkin').'" class="button">Mulai</a> ';
													}else{
														echo 'Belum Tersedia';
													}
												}
												?>
											</td>
											<td>
												<?php
												if($peserta->checkout_2){
													echo $peserta->checkout_2;
												}else{
													if(date('Ymd') == '20240205'){
														echo '<a href="'.site_url('checkout').'" class="button">Selesai</a>';
													}else{
														echo 'Belum Tersedia';
													}
												}
												?>
											</td>
                    </tr>
                    <tr>
                      <td>Selasa, 06 Februari 2024</td>
											<td>
												<?php
												if($peserta->checkin_3){
													echo $peserta->checkin_3;
												}else{
													if(date('Ymd') == '20240206'){
														echo '<a href="'.site_url('checkin').'" class="button">Mulai</a>';
													}else{
														echo 'Belum Tersedia';
													}
												}
												?>
											</td>
											<td>
												<?php
												if($peserta->checkout_3){
													echo $peserta->checkout_3;
												}else{
													if(date('Ymd') == '20240206'){
														echo '<a href="'.site_url('checkout').'" class="button">Selesai</a>';
													}else{
														echo 'Belum Tersedia';
													}
												}
												?>
											</td>
                    </tr>
                  </tbody>
                </table>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
							<div class="title">Surat Tugas</div>
							<?php
							if($peserta->surat_tugas == NULL){
								echo '<p>Anda belum mengupload surat tugas</p>';
							}else{
								echo '<p>Anda sudah mengupload surat tugas. <a href="'.base_url('uploads/'.$peserta->surat_tugas).'" target="_blank">Lihat surat tugas</a></p>';
							}
							?>

							<hr>
							<?= session()->getFlashdata('message');?>
								<form action="<?= site_url('home/surat');?>" id="uploadsurat" method="POST" enctype="multipart/form-data">
								<div class="row">
								<div class="col col-d-6 col-t-6 col-m-12" style="padding-bottom: 30px;">
									<div class="group-val">
									Upload Surat Tugas
										<input type="file" name="surat" placeholder="Surat Tugas">
									</div>
								</div>
								</div>
								<div class="align-left">
											<a href="#" class="button" onclick="$('#uploadsurat').submit();">
												<span class="text">Upload Surat TUgas</span>
												<span class="arrow"></span>
											</a>
										</div>

								</form>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Resume
			-->
			<div class="card-inner" id="resume-card">
				<div class="card-wrap">

					<!--
						Resume
					-->
					<div class="content resume">

						<!-- title -->
						<div class="title">Jadwal Kegiatan</div>
						<?= get_option('jadwal_kegiatan')?>

					</div>

				</div>
			</div>

			<!--
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="card-wrap">

					<!--
						Works
					-->
					<div class="content works">

						<!-- title -->
						<div class="title">Akses Zoom Meeting</div>
						<p>Selama proses pembukaan, materi narasumber dan penutupan (hari kesatu, kedua dan ketiga) menggunakan akses berikut:</p>
						<p>Meeting ID: <b>..........</b><br>Passcode: <b>......</b></p>
						<p>
							<ul class="zoom">
								<li>Penulisan nama akun zoom menggunakan format sebagai berikut: Nama Jabatan_Nama Pribadi</li>
								<li>Apabila Format nama tidak sesuai ketentuan, maka TIDAK akan diperkenankan memasuki <i>zoom meeting</i>.</li>
								<li>Selama mengikuti zoom meeting seluruh peserta diharapkan menjaga lingkungan sekitar tetap kondusif dan menggunakan fitur mute microphone serta selalu menyalakan video</li>
								<li>Dresscode menyesuaikan.</li>
							</ul>
						</p>
					</div>

				</div>
			</div>

			<!--
				Card - Contacts
			-->
			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<h4>Panitia Pelaksana</h4>
								<div class="info-list">
									<ul>
										<li><strong>Sdri. Yuka</strong> <a href="tel:081311471723">081359160405</a></li>
									</ul>
								</div>
								<h4>Teknisi IT</h4>
								<div class="info-list">
									<ul>
										<li><strong>Sdr. Wildan Afandi</strong> <a href="tel:08561515014">08561515014</a></li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<div class="card-inner other" id="other-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content other">

						<!-- title -->
						<div class="title">Informasi Lainnya</div>

						<!-- content -->
						<!-- <div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<h4>Sertifikat Peserta</h4>
								<p><a href="<?= base_url('sertifikat/Sertifikat-'.$peserta->nip.'.pdf');?>" target="_blank">Download Sertifikat</a></p>
							</div>
							<div class="clear"></div>
						</div> -->

					</div>

				</div>
			</div>

		</div>

		<div class="s_overlay"></div>

	</div>

	<!--
		jQuery Scripts
	-->
	<script src="<?= base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.validate.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.magnific-popup.js"></script>
	<script src="<?= base_url();?>assets/js/imagesloaded.pkgd.js"></script>
	<script src="<?= base_url();?>assets/js/isotope.pkgd.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.slimscroll.js"></script>
	<script src="<?= base_url();?>assets/js/owl.carousel.js"></script>
	<script src="https://use.fontawesome.com/8da76d029b.js"></script>

	<!--
		Main Scripts
	-->
	<script src="<?= base_url();?>assets/js/scripts.js"></script>

</body>
</html>
