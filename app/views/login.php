<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A premium admin dashboard template by mannatthemes" name="description" />
  <meta content="Mannatthemes" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="<?= BASEURL; ?>public/assets/images/favicon.ico">

  <!-- App css -->
  <link href="<?= BASEURL; ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body style="background:white;">

  <!-- Log In page -->
  <div class="row d-flex justify-content-center">

    <div class="mt-5 col-md-4  pr-0">
      <div class="card mb-0 shadow-none">
        <div class="card-body">
          <?php Flasher::flash(); ?>
          <div class="px-3">
            <div class="media">
              <a href="index.html" class="logo logo-admin"><img src="<?= BASEURL; ?>public/assets/images/logo-sm.png" height="55" alt="logo" class="my-3"></a>
              <div class="media-body ml-3 align-self-center">
                <h4 class="mt-0 mb-1">Login on Tempelbin</h4>
                <p class="text-muted mb-0">
                  Sign in to continue to Tempelbin.
                </p>
              </div>
            </div>

            <form class="form-horizontal my-4" action="" method="post">

              <div class="form-group">
                <label for="user_email">Email</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                  </div>
                  <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter your email" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="user_password">Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-key font-16"></i></span>
                  </div>
                  <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter your password" required="">
                </div>
              </div>

              <div class="form-group mb-0 row">
                <div class="col-12 mt-2">
                  <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="m-3 text-center bg-light p-3 text-primary">
            <h5 class="">Don't have an account ? </h5>
            <p class="font-13">
              Join <span>Tempelbin</span> Now
            </p>
            <a href="#" class="btn btn-primary btn-round waves-effect waves-light">Free Resister</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Log In page -->


  <!-- jQuery  -->
  <script src="<?= BASEURL; ?>public/assets/js/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/metisMenu.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/waves.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/jquery.slimscroll.min.js"></script>

  <!-- App js -->
  <script src="<?= BASEURL; ?>public/assets/js/app.js"></script>

</body>
</html>