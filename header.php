<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="UTF-8">
      <title> <?php echo bloginfo() ?> </title>
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="description" content="Aakar Group">
      <meta name="keywords" content="Aakar Group">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Fav Icon -->
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/logo.webp">
      <?php wp_head(); ?>
   </head>
   <body>
      <div class="page-wrapper">
      <!--preloader start-->
      <div class="preloader"></div>
      <!--preloader end--> 
      <!--main-header start-->
      <header class="main-header">
         <!--header-top start-->
         <div class="header-top">
            <!--container start-->
            <div class="container">
               <!--row start-->
               <div class="row">
                  <!--col start-->
                  <div class="col-md-4 col-sm-12 col-xs-12">
                     <div class="user-wrap">
                        <div class="login-btn">
                           +91 92840 93336 / +91 88063 37976/ +91 9552117924
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <!--col end-->  
                  <div class="col-md-5 col-sm-12 col-xs-12">
                     <div class="offer">
                        <marquee behavior="alternate">Aakar Group...परंपरा विश्वासाची आणि गुणवत्तेची.</marquee>
                     </div>
                  </div>
                  <!--col start-->
                  <div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="btn-box">
                        <ul class="top-social-icons">
                           <li><a href="#."><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                           <li><a href="#."><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                           <li><a href="#."><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="#."><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <!--col end--> 
               </div>
               <!--row end--> 
            </div>
            <!--container end--> 
         </div>
         <!--header-top end--> 
         <!--header-upper start--> 
         <!--header-upper end--> 
         <!--header-lower start-->
         <div class="header-lower">
            <!--container start-->
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-12">
                     <div class="logo-outer">
                        <div class="logo"> <a href="/"> <img class="logo-default" src="<?php echo get_template_directory_uri() ?>/images/logo.webp" height="80" alt="" title=""> </a> </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="nav-outer clearfix menu-bg">
                        <!--main-menu start-->
                        <nav class="main-menu">
                           <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                           </div>
                           <div class="navbar-collapse collapse clearfix">
                              <?php 
                                 wp_nav_menu(array(
                                 
                                 	'theme_location' => 'top_menu',
                                 
                                 	'menu_class' => 'navigation clearfix',
                                 
                                 	'container' => 'false'
                                 
                                 ) );
                                 
                                 ?>
                           </div>
                           <div class="clearfix"></div>
                        </nav>
                        <!--main-menu end--> 
                     </div>
                  </div>
               </div>
            </div>
            <!--container end--> 
         </div>
         <!--header-lower end--> 
         <!--sticky-header start-->
         <div class="sticky-header">
            <!--container start-->
            <div class="container clearfix">
               <!--row start-->
               <div class="row">
                  <!--col start-->
                  <div class="col-md-4 col-sm-5">
                     <div class="logo"> <a href="/" class="img-responsive"><img class="logo-default" src="<?php echo get_template_directory_uri() ?>/images/logo.webp" height="80" alt="" title=""></a> </div>
                  </div>
                  <!--col end--> 
                  <!--col start-->
                  <div class="col-md-8 col-sm-7">
                     <!--main-menu start-->
                     <nav class="main-menu">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                           <?php 
                              wp_nav_menu(array(
                              
                              	'theme_location' => 'top_menu',
                              
                              	'menu_class' => 'navigation clearfix',
                              
                              	'container' => 'false'
                              
                              ) );
                              
                              ?>
                        </div>
                     </nav>
                     <!--main-menu stendart--> 
                  </div>
                  <!--col end--> 
               </div>
               <!--row end--> 
            </div>
            <!--container end--> 
         </div>
         <!--sticky-header end--> 
      </header>
      <!--main-header end-->