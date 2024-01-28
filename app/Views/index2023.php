<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Presensi Rakernas Kemenag 2023</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Rakernas Kementerian agama tahun 2021">
	<meta name="keywords" content="rakernas, kemenag">
	<meta name="author" content="danualbantani">

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
	<link rel="shortcut icon" href="<?= base_url();?>assets/images/favicons/favicon.ico">
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
														echo '<a href="'.site_url('home/checkin').'" class="button">Mulai</a> ';
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
														echo '<a href="'.site_url('home/checkout').'" class="button">Selesai</a>';
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
														echo '<a href="'.site_url('home/checkin').'" class="button">Mulai</a> ';
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
														echo '<a href="'.site_url('home/checkout').'" class="button">Selesai</a>';
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
														echo '<a href="'.site_url('home/checkin').'" class="button">Mulai</a>';
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
														echo '<a href="'.site_url('home/checkout').'" class="button">Selesai</a>';
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

						<!-- content -->
						<div class="row">

							<!-- experience -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-briefcase"></i></div>
									<div class="name">H-1 (Persiapan), Minggu 04 Februari 2024</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">13:00</div>
                    <ol class="jadwal">
                      <li>Peserta luring melakukan Registrasi dan Check in Hotel (ST, SPD, Seminar Kit)</li>
                      <li>Peserta daring melakukan Registrasi (e-Form)</li>
                    </ol>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">14:00</div>
										<p>
											Zoom Meeting dengan Peserta daring tentang Teknis dan Tata Tertib Zoom Meeting Rakernas
										</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">15:30</div>
										<p>
											Gladi resik pembukaan Rakernas (hybrid)
										</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">17:30</div>
										<div class="name">ISTIRAHAT</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">19:30</div>
										<p>
											Konsolidasi panitia pusat dan lokal
										</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">17:30</div>
										<div class="name">ISTIRAHAT</div>
									</div>
								</div>
							</div>
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-briefcase"></i></div>
									<div class="name">Hari Pertama, Sabtu 04 Februari 2022</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">07:30</div>
										<p><b>Absensi</b></p>
										<ul class="jadwal">
											<li>Login ke Link tersedia (daring)</li>
											<li>Peserta luring memasuki ruang rapat</li>
										</ul>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">08:30</div>
										<p>Menteri Agama memasuki Ruang Rapat didampingi Sekretaris Jenderal</p>
										<p><i>*(diiringi dengan Tarian Selamat Datang oleh satuan kerja Madrasah)</i></p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">08.50</div>
										<p>
											Menyanyikan Lagu Indonesia Raya dan Mars Kemenag
										</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">09.00</div>
										<p>
											Do’a (Islam, Kristen, Katolik, Hindu, Buddha, Khonghucu)
										</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">19:15</div>
										<p>Laporan Pembukaan Penyelenggara Rakernas Kementerian Agama 2023 Oleh Sekretaris Jenderal</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">09:30</div>
										<div class="name">Dr. H. Ashabul Kahfi, M.Ag.</div>
										<p>Sambutan Ketua Komisi VIII DPR RI</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">09.45</div>
										<div class="name">Tayangan Video Dua Tahun Gusmen</div>
										<p>Arahan Kebijakan dan Pembukaan Rakernas 2023 oleh <b>Menteri Agama</b></p>
										<p>Materi: Menjadikan Moderasi Beragama dalam Mengelola Keberagaman dan Kemajemukan Bangsa Menuju Indonesia Hebat </p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">10:30</div>
										<div class="name">Menteri Agama</div>
										<p>Photo Bersama Menteri Agama</p>
										<ol class="jadwal">
											<li>JPT Madya dan JPT Pratama pada Sekretariat Jenderal</li>
											<li>JPT Madya dan JPT Pratama pada Ditjen Pendidikan Islam, PHU, dan Bimas Islam</li>
											<li>JPT Madya dan JPT Pratama pada Ditjen Bimas Kristen, Katolik, Hindu, dan Buddha</li>
											<li>Kepala Kantor Wilayah Kementerian Agama Provinsi</li>
											<li>JPT Madya dan JPT Pratama pada Balitbang Diklat, BPJPH, dan Itjen</li>
											<li>Biro Organisasi dan Tata Laksana</li>
										</0l>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">11.30</div>
										<p>
											<b>SESI I:</b>
											<br>
											“Kebijakan Fiskal APBN 2023 Pada Fungsi Agama dan Fungsi Pendidikan”
										</p>
										<div class="name">Menteri Keuangan</div>
										<div class="company">Narasumber</div>
										<div class="name">Drs. H. Subarja, M.Pd. (Kepala Biro Keuangan dan BMN)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">12.30</div>
										<div class="name">ISHOMA</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">13.30</div>
										<p>
											<b>SESI II:</b>
											<br>
											“Sasaran Pembangunan Nasional Dalam Rangka Penguatan Moderasi Beragamaan”
										</p>
										<div class="name">Menteri PPN/Kepala BAPPENAS</div>
										<div class="company">Narasumber</div>
										<div class="name">Dr. Ahmad Bahiej, SH., M.Hum (Kepala Biro Hukum dan KLN)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">14.30</div>
										<p>
											<b>SESI III:</b>
											<br>
											“Implementasi Penyederhanaan Birokrasi: Upaya peningkatan Pelayanan Publik dalam Sistem Kerja Baru dan SDM yang Kompeten dan Berkinerja Tinggi”
										</p>
										<div class="name">Menteri PAN-RB RI</div>
										<div class="company">Narasumber</div>
										<div class="name">Dr. Syafi'i, M.Ag (Kepala Pusdiklat Tenaga Administrasi)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">15.30</div>
										<div class="name">COFFEE BREAK</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">15.45</div>
										<p>
											<b>SESI IV:</b>
											<br>
											“Peningkatan Profesionalisme dalam rangka meningkatkan Mutu Aparatur Sipil Negara Kementerian Agama”
										</p>
										<div class="name">Dr. Mustari Irawan, M.P.A. (Komisi Aparatur Sipil Negara)</div>
										<div class="company">Narasumber</div>
										<div class="name">Dr. Nurudin, MA (Kepala Biro Kepegawaian)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">16.45</div>
										<p>
											<b>SESI V:</b>
											<br>
											“Merajut Kerukunan Umat Beragama Menuju Indonesia Hebat”
										</p>
										<div class="name">KH. Yahya Cholil Staquf (Ketua PBNU)</div>
										<div class="company">Narasumber</div>
										<div class="name">Dr. H. Wawan Djunaedi, M.A (Kepala Pusat Kerukunan Umat Beragama)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">17.45</div>
										<div class="name">ISHOMA</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">19.30</div>
										<div class="name">Video Testimoni/Harapan Masyarakat Terhadap Pelayanan Kemenag</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">20.00</div>
										<p>
											<b>SESI VI:</b>
											<br>
											“Capaian Kinerja Kementerian Agama 2022 dan Strategi Peningkatan Kinerja 2023”
										</p>
										<div class="name">Prof. Dr. H. Nizar, M.Ag. (Sekretaris Jenderal)</div>
										<div class="company">Narasumber</div>
										<div class="name">H. Ramadhan Harisman, S.T., M.B.A (Kepala Biro Perencanaan)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">21.00</div>
										<p>
											<b>SESI VII:</b>
											<br>
											Program Prioritas Pencapaian Visi dan outlook 2023
										</p>
										<div class="name">Inspektur Jenderal</div>
										<div class="name">Kepala Badan Litbang dan Diklat</div>
										<div class="company">Narasumber (Panel)</div>
										<div class="name">Kastolan, S.Pd., M.Si (Plt. Sekretaris Inspektorat Jenderal)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">22:00</div>
										<div class="name">ISTIRAHAT</div>
									</div>
								</div>
							</div>
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-briefcase"></i></div>
									<div class="name">Hari Kedua, Minggu 05 Feberuari 2023</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">07:30</div>
										<p>Login Peserta daring dan absensi Peserta luring memasuki ruang rapat</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">08.00</div>
										<p>
											<b>SESI VIII:</b>
											<br>
											Program Prioritas Pencapaian Visi dan Outlook 2023
										</p>
										<div class="name">Direktur Jenderal Bimas Islam</div>
										<div class="name">Direktur Jenderal Bimas Kristen</div>
										<div class="name">Direktur Jenderal Bimas Katolik</div>
										<div class="name">Direktur Jenderal Bimas Hindu</div>
										<div class="name">Direktur Jenderal Bimas Buddha</div>
										<div class="company">Narasumber (Panel)</div>
										<div class="name">Dr. Thobib Al Asyhar, S.Ag, M.Si. (Direktorat Diktis Ditjen Pendidikan Islam)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">10:30</div>
										<div class="name">COFFEE BREAK</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">10.45</div>
										<p>
											<b>SESI IX:</b>
											<br>
											Program Prioritas Pencapaian Visi dan Outlook 2023
										</p>
										<div class="name">Direktur Jenderal PHU</div>
										<div class="name">Direktur Jenderal Pendidikan Islam</div>
										<div class="name">Kepala BPJPH</div>
										<div class="company">Narasumber (Panel)</div>
										<div class="name">Dr. H. Mastuki, M.Ag (Kapus Diklat Teknis)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">12.15</div>
										<div class="name">ISHOMA</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">13.30</div>
										<p>
											<b>SESI X:</b>
											<br>
											Evaluasi dan Strategi Penguatan Moderasi Beragama ditengah perubahan demografi masyarakat Indonesia
											<br>
											<i>*Dialog Interaktif dengan peserta, dipandu oleh MC</i>
										</p>
										<div class="name">1. Alisa Wahid (Founder Wahid Institute)</div>
										<div class="name">2. Hasanuddin Ali (Tenaga Ahli)</div>
										<div class="name">Prof. Dr. Ahmad Zainul Hamdi, M.Ag (Direktur Pendidikan Tinggi Keagamaan Islam)</div>
										<div class="company">Moderator</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">15.00</div>
										<div class="name">ISTIRAHAT</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">09:00</div>
										<p>
											<b>Sidang Komisi:</b>
										</p>
										<p>
											<div class="name">Komisi 1 : Layanan Keagamaan</div>
											<div class="company">(Ketua Komisi: Kakanwil Kemenag Prov. Kalimantan Selatan)</div>
											<div class="name">Komisi 2 : Layanan Pendidikan</div>
											<div class="company">(Ketua Komisi: Rektor UIN Sunan Gunung Djati Bandung)</div>
											<div class="name">Komisi 3 : Transformasi Pengawasan dan Kediklatan</div>
											<div class="company">(Ketua Komisi: Inspektur Jenderal Kementerian Agama)</div>
										</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">17.30</div>
										<div class="name">ISHOMA</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">19.30</div>
										<div class="name">Pentas Seni dan Kebudayaan</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">20.30</div>
										<p>
											Penyampaian Rekomendasi Hasil Rakernas 2023 dan Penandatanganan Komitmen Pelaksanaan Hasil Rakernas 2023
										</p>
										<p>
											Diwakili:
											<ol class="jadwal">
												<li>Rektor UIN Sunan Gunung Djati Bandung</li>
												<li>Kakanwil Kemenag Prov. Kalimantan Selatan, dan</li>
												<li>Inspektur Jenderal Kementerian Agama</li>
											</ol>
											Dibacakan oleh Dr. H. Muhammad Tambrin, M.Pd (Kakanwil Kemenag Prov. Kalimantan Selatan)
										</p>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">20.45</div>
										<p>
											Penutupan
										</p>
										<p>
											<ol class="jadwal">
												<li>Laporan Penutupan Penyelenggara Rakernas 2023 oleh Sekretaris Jenderal </li>
												<li>Arahan Kebijakan dan Penutupan Rakernas oleh Wakil Menteri Agama </li>
											</ol>
											Materi : <i>Highlighted Issues</i> Agama dan Keagamaan 2023
										</p>
									</div>
								</div>
							</div>
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-briefcase"></i></div>
									<div class="name">H+1 (Penyelesaian Administrasi) – Senin, 06 Februari 2023</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">07.00 – 11.00 </div>
										<p>Penyelesaian administrasi peserta</p>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

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
						<p>Meeting ID: <b>811 1984 1734</b><br>Passcode: <b>rakernas</b></p>
						<p>
							<ul class="zoom">
								<li>Penulisan nama akun zoom menggunakan format sebagai berikut: Nama Jabatan_Nama Pribadi (contoh: <b>Kakanwil Prov Sumbar_Dr. H. HELMI, M.Ag</b>)</li>
								<li>Apabila Format nama tidak sesuai ketentuan, maka TIDAK akan diperkenankan memasuki <i>zoom meeting</i>.</li>
								<li>Selama mengikuti zoom meeting seluruh peserta diharapkan menjaga lingkungan sekitar tetap kondusif dan menggunakan fitur mute microphone serta selalu menyalakan video</li>
								<li>Dresscode peserta selama acara sebagai berikut:
									<ol class="jadwal">
										<li>Hari Senin pagi : Kemeja putih lengan panjang</li>
										<li>Hari Senin malam s.d. Selasa : Kemeja batik lengan panjang.</li>
									</ol>
								</li>
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
										<li><strong>Luqman Hakim</strong> <a href="tel:08129268932">08129268932</a></li>
										<li><strong>Muhammad Su'bi</strong> <a href="tel:081311471723">081311471723</a></li>
									</ul>
								</div>
								<h4>Teknisi IT</h4>
								<div class="info-list">
									<ul>
										<li><strong>Irfan Sembiring</strong> <a href="tel:081311099008">081311099008</a></li>
										<li><strong>Wildan Afandi</strong> <a href="tel:08561515014">08561515014</a></li>
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
