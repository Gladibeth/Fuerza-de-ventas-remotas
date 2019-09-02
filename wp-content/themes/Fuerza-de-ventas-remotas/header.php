<!DOCTYPE html>
<html lang="en">

<head>
<html lang="lang="<?php bloginfo('language'); ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Fuerza de ventas remotas</title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon">
  <?php wp_head(); ?>
</head>

<body>

<header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
      <div class="nav-top__header">
        <div class="nav-top__content d-flex pl-4 pr-4 justify-content-between">
          <div class="main-nav__contact">
            <a class="mr-3" href="#">
                <i class="fa fa-phone"></i>
                <span>(+569) 0 123 45 67</span>
              </a>
            <a href="#">
                <i class="fa fa-envelope"></i>
                <span>hola@fuerzadeventaremota.cl</span>
              </a>
          </div>
          <div class="main-nav__redes">
            <a href="#">
                <i class="fa fa-facebook"></i>
              </a>
            <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
            <a href="#">
                <i class="fa fa-linkedin"></i>
              </a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="#">
              <img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg">
            </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="nav-item">
              <a class="nav-link active" href="#home">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#training">Capacitacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#client">Clientes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>