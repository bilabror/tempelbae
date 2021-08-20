<!-- Top Bar Start -->
<div class="topbar">
  <!-- Navbar -->
  <nav class="navbar-custom">

    <!-- LOGO -->
    <div class="topbar-left">
      <a href="<?=BASEURL ?>" class="logo">
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
          <?php if (!isset($_SESSION['user_id'])): ?>
          <a class="dropdown-item" href="<?=BASEURL.'auth/login' ?>"><i class="dripicons-exit text-muted mr-2"></i> Login</a>
          <?php else : ?>
          <a class="dropdown-item" href="<?=BASEURL.'auth/logout' ?>"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
          <?php endif; ?>
        </div>
      </li>
    </ul>

    <ul class="list-unstyled topbar-nav mb-0">

      <li>
        <button class="button-menu-mobile nav-link waves-effect waves-light">
          <i class="mdi mdi-menu nav-icon"></i>
        </button>
      </li>
    </ul>

  </nav>
  <!-- end navbar-->
</div>
<!-- Top Bar End -->