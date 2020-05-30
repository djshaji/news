<!DOCTYPE html>
<html lang="en">
<?php
require_once "ui/ui.php" ;
?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Updates News
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./assets/css/font-awesome.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />

  <?php
    if ($_GET["theme"]) {
      // just found out you can do this
      printf ('<link href="./assets/css/%s.css" rel="stylesheet" />',$_GET ["theme"]) ;
    }
    ?>

</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-primary navbar-dark headroom">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="./index.html">
        <img src="./assets/img/brand/logo_light.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text">News</span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl">
              <div class="dropdown-menu-inner">
                <a class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="ni ni-spaceship"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Local</h6>
                    <p class="description d-none d-md-inline-block mb-0">News from your city or town</p>
                  </div>
                </a>
                <a class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-palette"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">National</h6>
                    <p class="description d-none d-md-inline-block mb-0">News from around the country</p>
                  </div>
                </a>
                <a  class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-ui-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-warning mb-md-1">International</h5>
                    <p class="description d-none d-md-inline-block mb-0">News from around the World</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Sports</span>
          </a>
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Entertainment</span>
          </a>
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Leisure</span>
          </a>
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Tech</span>
          </a>
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon"  target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="./assets/img/brand/white.png" style="width: 200px;" class="img-fluid">
                <p class="lead text-white">News you can use</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

  </div> -->
<div class="container-fliud container">
  <div class="section mt-1" style="padding-top:0">
    <div class="shape shape-style-1">
      <img src="../assets/img/brand/header.png" class="rounded float-left" width="200px">
      </img>
    </div>
    <div class="container container-fluid">

    </div>
  </div>
</div>