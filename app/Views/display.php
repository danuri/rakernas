<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="assets/display/images/favicon.png" rel="icon" />
<title>Rakernas - Kementerian Agama RI</title>
<meta name="description" content="HTML Template for Coming Soon website">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================== -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================== -->
<link rel="stylesheet" type="text/css" href="assets/display/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="assets/display/vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="assets/display/vendor/magnific-popup/magnific-popup.min.css" />
<link rel="stylesheet" type="text/css" href="assets/display/css/stylesheet.css" />
<!-- Colors Css -->
<link id="color-switcher" rel="stylesheet" type="text/css" href="assets/display/css/color-orange.css" />

<style media="screen">
  #sideleft {
    background:linear-gradient(0deg, rgb(0 194 255 / 66%), rgb(41 66 255 / 59%)), url(assets/display/images/kemenagbg.jpeg);
    background-size:cover;
  }
</style>
</head>
<body>

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
=============================== -->
<div id="main-wrapper">
  <div class="container-fluid px-0">
    <div class="row g-0 min-vh-100">

      <!-- Intro
      ========================= -->
      <div class="col-lg-4 d-flex flex-column bg-primary" id="sideleft">
            <!-- Domain Details -->
            <div class="container py-5 px-4 px-lg-5 my-auto">
              <div class="row text-center">
                <div class="col-12 mx-auto mb-4">
                  <!-- Logo -->
                  <a class="logo" href="#" title="Kemenag"> <img src="assets/display/images/logo-kemenag.png" alt="Kemenag" height="100px"/> </a>
                  <!-- Logo End -->
                </div>
                <div class="col-12 mx-auto">
                  <h1 class="text-9 text-white bg-danger d-inline-block fw-700 rounded px-3 py-2 mb-4">Rakernas Kemenag 2024</h1>
                </div>
                <div class="col-12 mx-auto">
                  <p class="text-5 text-white mb-3">Pindai Kartu</p>
                  <!-- Subscribe Form -->
			  <div class="subscribe-form">
			  <form action="<?= site_url('display/scan')?>" id="scanform" role="form" method="post">
                <div class="input-group">
                  <input type="text" id="idcard" name="idcard" class="form-control required" required placeholder="Put ID here..">
                  <button id="subscribe-form-submit" name="subscribe-form-submit" class="btn btn-dark px-4 shadow-none" type="submit"><span class="d-none d-sm-block">Check</span><span class="text-4 d-block d-sm-none"><i class="fas fa-arrow-right"></i></span></button>
                </div>
              </form>
			  <div class="subscribe-form-result mt-3"></div>
			  </div>
              <!-- Subscribe End -->
                </div>
              </div>
            </div>
            <div class="container pb-2 px-3">
              <div class="row text-white">
                <div class="col-12 d-flex align-items-center justify-content-center justify-content-md-start">
					<span class="me-2"><i class="fas fa-info-circle"></i></span><a class="text-white" data-bs-toggle="modal" data-bs-target="#about" href="#">Biro Organisasi dan Tata Laksana</a>
				</div>
              </div>
            </div>
      </div>
      <!-- Intro End -->

      <!-- Contact Us
      ========================= -->
      <div class="col-lg-8 d-flex flex-column bg-light text-center ">
        <div class="container my-auto py-5 pt-lg-4 pb-lg-2">
          <div class="row mx-0" id="peserta">
						<h4>Welcome to Rakernas Kementerian Agama 2024</h4>
          </div>
        </div>

        <!-- Footer -->
        <footer class="container">
          <p class="text-2 text-muted mb-2">Copyrigh © 2024 <a href="#">Rakernas Kemenag</a>. All Rights Reserved.</p>
        </footer>
      </div>
      <!-- Contact Us End -->
    </div>
  </div>
</div>
<!-- Document Wrapper End -->

<!-- Script -->
<script src="assets/display/vendor/jquery/jquery.min.js"></script>
<script src="assets/display/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/display/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/display/vendor/jquery-form/jquery.form.min.js"></script>
<script src="assets/display/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/display/js/theme.js"></script>
<!-- Style Switcher -->
<script src="assets/display/js/switcher.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#idcard').focus();
});

$('#idcard').on('input',function(e){
  var l = $('#idcard').val().length;
  if(l == 13){
    $('#scanform').submit();
  }
});

</script>
</body>
</html>
