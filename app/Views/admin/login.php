
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url()?>assets/admin/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="<?= base_url()?>assets/admin/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url()?>assets/admin/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url()?>assets/admin/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper">
        <div class="auth-page-content">
            <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="text-center mt-sm-5 mb-4 text-white-50">
                          <div>
                              <a href="index.html" class="d-inline-block auth-logo">
                                  <img src="<?= base_url()?>assets/admin/front/img/satudata-lampung.png" alt="" height="50">
                              </a>
                          </div>
                          <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                      </div>
                  </div>
              </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Selamat Datang !</h5>
                                    <p class="text-muted">Sign in to continue to Admin Dashboard.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="" method="POST">

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="nip" placeholder="Enter username">
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <!-- <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a> -->
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" name="password" placeholder="Enter password" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Data Lampung
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url()?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url()?>assets/admin/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url()?>assets/admin/libs/feather-icons/feather.min.js"></script>
    <script src="<?= base_url()?>assets/admin/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= base_url()?>assets/admin/js/plugins.js"></script>

    <!-- particles js -->
    <script src="<?= base_url()?>assets/admin/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="<?= base_url()?>assets/admin/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="<?= base_url()?>assets/admin/js/pages/password-addon.init.js"></script>
</body>

</html>
