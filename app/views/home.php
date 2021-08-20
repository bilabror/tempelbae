<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?=$data['title'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="pastebin clone build with php" name="description" />
  <meta content="Bil Abror" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="<?= BASEURL; ?>public/assets/images/favicon.ico">

  <!-- App css -->
  <link href="<?= BASEURL; ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body">

  <!-- Log In page -->
  <div class="row vh-100">
    <div class="col-lg-12 p-0 d-flex justify-content-center">
      <div class="accountbg d-flex align-items-center">
        <div class="account-title text-white text-center">
          <img src="<?= BASEURL; ?>public/assets/images/logo-sm.png" alt="" class="thumb-sm">
          <h4 class="mt-3">Welcome To Tempelbin</h4>
          <div class="border w-25 mx-auto border-primary"></div>
          <h1 class="">Let's Get Started</h1>
          <p class="font-14 mt-3">
            <a href="<?= BASEURL; ?>paste" class="text-primary">create your node now</a>
          </p>

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