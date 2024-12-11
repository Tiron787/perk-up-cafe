<!-- Page Title--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <?php wp_head(); ?>
</head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?php echo get_template_directory_uri();?>/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
     
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic rd-navbar-classic-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
           <div class="rd-navbar-brand">
            <!--Brand--><a class="brand" href="<?php echo home_url('/'); ?>"><img class="brand-logo-dark" src="<?php echo get_template_directory_uri();?>/images/logo-default-392x116.png" alt="" width="196" height="58"/><img class="brand-logo-light" src="<?php echo get_template_directory_uri();?>/images/logo-default-392x116.png" alt="" width="196" height="58"/></a>
            </div>
              </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/'); ?>">Головна</a>
                      </li>
                      <li class="rd-nav-item <?php echo (is_page('about') ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/about/'); ?>">Про нас</a>
                      </li>
                      <li class="rd-nav-item <?php echo (is_page('gallery') ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/gallery/'); ?>">Галерея</a>
                      </li>
                      <li class="rd-nav-item <?php echo (is_page('contacts') ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/contacts/'); ?>">Контакти</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>  
        
      </header>
