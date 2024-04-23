<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex , nofollow" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Web Marlins" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="<?php 
    if(isset($description[$current_page])){
      echo $description[$current_page];
    }
    else{
      echo "Error 404 : Page Not Found";
    }
    ?>" />
    <meta name="keywords" content="" />

    <link
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/style.css" />
    <title><?php 
    if(isset($title[$current_page])){
      echo $title[$current_page];
    }
    else{
      echo "Error 404 : Page Not Found";
    }
    ?></title>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      <header
        class="site-navbar py-4 js-sticky-header site-navbar-target"
        role="banner"
        >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-11 col-xl-2">
              <a class="navbar-brand site-logo" href="<?php echo SITE_PATH;?>">
                <img
                  src="images/LOGO-PNG.png"
                  width="100"
                  alt="Web Marlins Logo"
                />
              </a>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav
                class="site-navigation position-relative text-right"
                role="navigation"
              >
                <ul
                  class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block"
                >
                  <li>
                    <a href="<?php echo SITE_PATH;?>" class="nav-link active">Home</a>
                  </li>
                  <li><a href="<?php echo SITE_PATH;?>/about" class="nav-link">About Us</a></li>
                  <li class="has-children">
                    <a href="#" class="nav-link">Services</a>
                    <ul class="dropdown">
                      <li><a href="<?php echo SITE_PATH;?>/seo-services">SEO</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/ppc-services">PPC</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/web-designing-services">Web Designing</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/social-media-marketing-services">Social Media Marketing</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/content-writing-services">Content Writing</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/web-development-services">Website Development</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/email-marketing-services">Email Marketing</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/local-seo-services">Local SEO Services</a></li>
                    </ul>
                  </li>
                  <li><a href="https://blogs.webmarlins.com/" class="nav-link">Blogs</a></li>
                  <li><a href="<?php echo SITE_PATH;?>/our-work" class="nav-link">Our Work</a></li>
                  <li><a href="<?php echo SITE_PATH;?>/contact" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            <div
              class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"
              style="position: relative; top: 3px"
            >
              <a href="#" class="site-menu-toggle js-menu-toggle text-black"
                ><span class="icon-menu h3"></span
              ></a>
            </div>
          </div>
        </div>
      </header>
