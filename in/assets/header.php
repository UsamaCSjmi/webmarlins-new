<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="author" content="Web Marlins" />
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TTMP7V3');</script>  
    <link rel="canonical" href="<?php echo SITE_PATH.$router;?>"/>
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
    <link rel="stylesheet" href="fonts/icomoon/style.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="css/jquery-ui.css" /> -->
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
     <!-- Meta Pixel Code -->
     <!-- <script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '674076782768921');fbq('track', 'PageView');</script>
        <noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=674076782768921&ev=PageView&noscript=1"/></noscript> -->
        <!-- End Meta Pixel Code -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Web Marlins Pvt Ltd",
          "url": "<?php echo SITE_PATH?>",
          "logo": "<?php echo SITE_PATH?>/images/LOGO-PNG.png",
          "sameAs": [
            "https://facebook.com/webmarlins",
            "https://instagram.com/webmarlins",
            "https://instagram.com/webmarlins",
            "https://www.linkedin.com/company/webmarlins/",
            "https://in.pinterest.com/webmarlins/"
          ],
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "+91 9560 518 618",
              "contactType": "sales",
              "email": "contact@webmarlins.com",
              "areaServed": "IN",
              "availableLanguage": "en"
            }
          ]
        }
        </script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTMP7V3"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                      <li><a href="<?php echo SITE_PATH;?>/web-design-services">Web Designing</a></li>
                      <li><a href="<?php echo SITE_PATH;?>/social-media-services">Social Media Marketing</a></li>
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
