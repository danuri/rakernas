<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Presensi Rakerna Kemenag 2024</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Rakernas Kementerian Agama 2024">
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
	<link rel="shortcut icon" href="<?= base_url();?>images/favicons/favicon.ico">
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
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">
					<h4 class="text-center">RAKERNAS KEMENTERIAN AGAMA 2024</h4>
					<div class="content about">

						<!-- title -->
						<div class="title">Login</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<?= session()->getFlashdata('message'); ?>
                <form class="" action="" method="post">
                	<div class="form-group">
                		<label for="">NIP</label>
										<input type="text" class="form-control" name="nip" required>
                	</div>
                	<div class="form-group">
                		<label for="">PASSWORD</label>
										<input type="password" class="form-control" name="password" required>
                	</div>
                	<div class="form-group">
										<label for="">&nbsp;</label>
										<input type="submit" class="btn btn-primary" name="submit" value="Login">
                	</div>
                </form>
								<div class="text-box">
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>
		</div>

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
	<script src="<?= base_url();?>assets/js/typed.js"></script>
	<script src="https://use.fontawesome.com/8da76d029b.js"></script>

	<!--
		Google map api
	-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>

	<!--
		Main Scripts
	-->
	<script src="<?= base_url();?>assets/js/scripts.js"></script>
	<script type="text/javascript">
		<?php echo $_SERVER['REMOTE_ADDR'];?>
	</script>

</body>
</html>
