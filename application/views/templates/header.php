<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>includes/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>includes/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Boxigo</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Varela">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>includes/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <link href="<?= base_url(); ?>includes/css/style.css" rel="stylesheet" />
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar <?php if($this->router->fetch_class() === $this->router->default_controller): ?>navbar-transparent navbar-color-on-scroll<?php endif;?>  fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url(); ?>">Boxigo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#" class="dropdown-toggle nav-link">
              <i class="fas fa-users"></i> About Us
            </a>
            <!-- <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> Offers
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Customer Support
              </a>
            </div> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="fas fa-tags"></i> &nbsp;Offers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Click here for queries">
              <i class="fas fa-hands-helping"></i> &nbsp;Customer Support
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="./forserviceproviders.php" target="_blank" data-original-title="For the Vendors">
              <i class="fab fa-black-tie"></i> &nbsp;For Service Provider
            </a>
          </li>
          <li class="nav-item">
            <?php if($this->session->userdata('user_id')): ?>
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>logout" data-original-title="Click here to logout">
                  <i class="fas fa-user-check"></i> &nbsp;Logout
                </a>
            <?php else: ?>
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>login" data-original-title="Click here to login">
                <i class="fas fa-user-check"></i> &nbsp;Login
              </a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php if($this->router->fetch_class() == 'dashboard'): ?>
    <section class="section pt-5 mt-5">
      <div class="container">
        <div class="row">
  <?php endif; ?>