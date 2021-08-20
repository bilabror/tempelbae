<div class="page-wrapper">
  <div class="page-wrapper-inner">

    <!-- Left Sidenav -->
    <div class="left-sidenav">

      <ul class="metismenu left-sidenav-menu" id="side-nav">

        <li class="menu-title">Main Menu</li>
        <li>
          <a href="<?=BASEURL ?>"><i class="mdi mdi-monitor"></i><span>Home</span></a>
        </li>
        <?php if ($_SESSION['user_id']): ?>
        <li class="menu-title">Admin Menu</li>
        <li>
          <a href="<?=BASEURL.'paste' ?>"><i class="mdi mdi-monitor"></i><span>Tempel Management</span></a>
        </li>
        <li>
          <a href="<?=BASEURL.'admin' ?>"><i class="mdi mdi-monitor"></i><span>User Management</span></a>
        </li>
        <li>
          <a href="<?=BASEURL.'admin/reportcode' ?>"><i class="mdi mdi-monitor"></i><span>Report</span></a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
    <!-- end left-sidenav--><!-- Page Content-->
    <div class="page-content">