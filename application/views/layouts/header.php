<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IoT | GreenHouse</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition dark-mode layout-top-nav">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark text-sm">
      <div class="container">
        <!-- Right navbar links -->
        <h5 class=" navbar-nav nav-item">IoT Green House</h5>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Notifications Dropdown Menu -->

          <li class="nav-item dropdown">
            <?php if (!$this->session->userdata('name')) { ?>
              <a class="nav-link" href=" <?= base_url() ?>clogin">
                <i class="fas fa-sign-in-alt"></i> &nbsp;
                <span class="float-right text-muted text-sm"> Login</span>
              </a>
            <?php } else { ?>
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-alt"></i> &nbsp;
                <span class="float-right text-muted text-sm"> Hi, <?= $name[0]['name']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- <span class="dropdown-header">15 Notifications</span> -->
                <div class="dropdown-header"></div>
                <a href="<?= base_url() ?>cdashboard" class="dropdown-item">
                  <i class="fas fa-user mr-2"></i> My Dashboard
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url() ?>cprofile" class="dropdown-item">
                  <i class="fas fa-user mr-2"></i> My Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url() ?>csettings" class="dropdown-item">
                  <i class="fas fa-cogs mr-2"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url() ?>clogin/logout" class="dropdown-item dropdown-footer"><i class="fas fa-sign-out-alt"></i> &nbsp;Logout</a>
              </div>
            <?php } ?>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->