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
            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg">
            <!-- item-->
            <h6 class="dropdown-item-text">
              Notifications (258)
            </h6>
            <div class="slimscroll notification-list">
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item active">
                <div class="notify-icon bg-success">
                  <i class="mdi mdi-cart-outline"></i>
                </div>
                <p class="notify-details">
                  Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small>
                </p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-warning">
                  <i class="mdi mdi-message"></i>
                </div>
                <p class="notify-details">
                  New Message received<small class="text-muted">You have 87 unread messages</small>
                </p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-info">
                  <i class="mdi mdi-martini"></i>
                </div>
                <p class="notify-details">
                  Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small>
                </p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-primary">
                  <i class="mdi mdi-cart-outline"></i>
                </div>
                <p class="notify-details">
                  Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small>
                </p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-danger">
                  <i class="mdi mdi-message"></i>
                </div>
                <p class="notify-details">
                  New Message received<small class="text-muted">You have 87 unread messages</small>
                </p>
              </a>
            </div>
            <!-- All-->
            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
              View all <i class="fi-arrow-right"></i>
            </a>
          </div>
        </li>

        <li class="dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <img src="<?= BASEURL; ?>public/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
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

          <li class="menu-title">Main Menu</li>

          <li>
            <a href="javascript: void(0);"><i class="mdi mdi-monitor"></i><span>Dashboards</span><span class="badge badge-danger badge-pill float-right">9+</span></a>
            <ul class="nav-second-level" aria-expanded="false">
              <li><a href="index.html">Dashboard 1</a></li>
            </ul>
          </li>


        </ul>
      </div>
      <!-- end left-sidenav-->

      <!-- Page Content-->
      <div class="page-content">
        <div class="container-fluid">
          <?php Flasher::flash(); ?>
          <div class="row">
            <div class="col-lg-12">

              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 header-title">Clipboard TempelBae</h4>
                  <pre id="clipboardParagraph" class="border p-3"><?= $data['tempel']['tempel_text'] ?></pre>
                  <div class="mt-3">
                    <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Copy</button>
                    <a href="<?=BASEURL.'paste/raw/'.$data['tempel']['tempel_param'] ?>" class="btn btn-info btn-clipboard"><i class="far fa-eye mr-2"></i>Raw</a>
                    <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Download</button>
                    <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Clone</button>
                    <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Embed</button>
                    <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Print</button>
                    <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Report</button>
                  </div>
                </div>
              </div>

            </div>
            <!-- end col -->

            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 header-title">Raw Paste Data</h4>
                  <textarea type="text" class="form-control" rows="10" id="clipboardTextarea"><?= $data['tempel']['tempel_text'] ?></textarea>
                  <div class="mt-3">
                    <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy mr-2"></i>Copy</button>
                    <button type="button" class="btn btn-dark btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut mr-2"></i>Cut</button>
                  </div>
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


  <script src="<?= BASEURL; ?>public/assets/plugins/clipboard/clipboard.min.js"></script>
  <script src="<?= BASEURL; ?>public/assets/pages/jquery.clipboard.init.js"></script>

  <script src="<?= BASEURL; ?>public/assets/pages/jquery.dashboard.init.js"></script>

  <!-- App js -->
  <script src="<?= BASEURL; ?>public/assets/js/app.js"></script>

</body>
</html>