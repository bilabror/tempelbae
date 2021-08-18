<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A premium admin dashboard template by themesbrand" name="description" />
  <meta content="Mannatthemes" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <link href="<?= BASEURL; ?>public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

  <!-- App css -->
  <link href="<?= BASEURL; ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- Top Bar Start -->
  <div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">

      <!-- LOGO -->
      <div class="topbar-left">
        <a href="index.html" class="logo">
          <span>
            <img src="<?= BASEURL; ?>public/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
          </span>
          <span>
            <img src="<?= BASEURL; ?>public/assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
          </span>
        </a>
      </div>

      <ul class="list-unstyled topbar-nav float-right mb-0">

        <li class="dropdown">
          <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="mdi mdi-bell-outline nav-icon"></i>
            <span class="badge badge-danger badge-pill noti-icon-badge">1</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg">
            <!-- item-->
            <h6 class="dropdown-item-text">
              Notifications
            </h6>
            <div class="notification-list">
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-danger">
                  <i class="mdi mdi-message"></i>
                </div>
                <p class="notify-details">
                  Dirgahayu Indonesia 76<small class="text-muted">Indonesia Maju</small>
                </p>
              </a>
            </div>
          </div>
        </li>

        <li class="dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <img src="<?= BASEURL; ?>public/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Login</a>
          </div>
        </li>
      </ul>

      <ul class="list-unstyled topbar-nav mb-0">

        <li>
          <button class="button-menu-mobile nav-link waves-effect waves-light">
            <i class="mdi mdi-menu nav-icon"></i>
          </button>
        </li>

        <li class="hide-phone app-search">
          <form role="search" class="">
            <input type="text" placeholder="Search..." class="form-control">
            <a href=""><i class="fas fa-search"></i></a>
          </form>
        </li>

      </ul>

    </nav>
    <!-- end navbar-->
  </div>
  <!-- Top Bar End -->
  <div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
      <div class="sidebar-user media">
        <img src="<?= BASEURL; ?>public/assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
        <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
        <div class="media-body">
          <h5 class="text-light">Tamu</h5>
          <ul class="list-unstyled list-inline mb-0 mt-2">
            <li class="list-inline-item">
              <a href="javascript: void(0);" class=""><i class="mdi mdi-account text-light"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="javascript: void(0);" class=""><i class="mdi mdi-settings text-light"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-right align-item-center mt-2">
            </div>
            <h1 class="text-white mb-2"><i class="mdi mdi-monitor mr-2"></i>Dashboard</h1>
          </div>
        </div>
      </div>
      <!-- end page title end breadcrumb -->
    </div>
  </div>

  <div class="page-wrapper">
    <div class="page-wrapper-inner">

      <!-- Left Sidenav -->
      <div class="left-sidenav">

        <ul class="metismenu left-sidenav-menu" id="side-nav">

          <li class="menu-title">Menu</li>

          <li>
            <a href="javascript: void(0);"><i class="mdi mdi-monitor"></i><span>Home</span></a>
          </li>
        </ul>
      </div>
      <!-- end left-sidenav-->

      <!-- Page Content-->
      <div class="page-content">
        <div class="container-fluid">


          <div class="row">
            <div class="col-lg-12">


              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 header-title">TempelBae</h4>
                  <p class="text-muted mb-4">
                    Silahkan tulis atau tempel kode anda disini
                  </p>
                  <form class="form" method="post" action="<?= BASEURL; ?>paste/add">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="tempel_title">Name / Title</label>
                          <input type="text" class="form-control" id="tempel_title" name="tempel_title" required="">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="tempel_style">style code</label>
                          <select class="form-control" id="tempel_style">
                            <option value="text">NONE</option>
                            <option value="bash">BASH</option>
                            <option value="php">PHP</option>
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="javascript">JAVASCRIPT</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="expired_at">Expired Code</label>
                          <select class="form-control" id="expired_at" name="expired_at">
                            <option value="3600">1 Hour</option>
                            <option value="86400">1 Day</option>
                            <option value="604800">1 Week</option>
                            <option value="2592000">30 Day</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="message">Paste Code</label>
                          <textarea class="form-control" rows="5" id="tempel_text" name="tempel_text"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary px-5 py-2" name="submit">Send Now</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
            <!-- end col -->

          </div>
          <!-- end row -->
        </div>
        <!-- container -->

        <footer class="footer text-center text-sm-left">
          &copy; <?=date('Y') ?> TempelBae <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Bil Abror</span>
        </footer>
      </div>
      <!-- end page content -->
    </div>
  </div>
  <!-- end page-wrapper -->

  <!-- jQuery  -->
  <script src="<?= BASEURL; ?>public/assets/js/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/metisMenu.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/waves.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/js/jquery.slimscroll.min.js"></script>

  <script src="<?= BASEURL; ?>public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

  <script src="<?= BASEURL; ?>public/assets/plugins/moment/moment.js"></script>
  <script src="<?= BASEURL; ?>public/assets/plugins/apexcharts/apexcharts.min.js"></script>
  <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
  <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
  <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
  <script src="assets/pages/jquery.dashboard.init.js"></script>

  <!-- App js -->
  <script src="<?= BASEURL; ?>public/assets/js/app.js"></script>

</body>
</html>