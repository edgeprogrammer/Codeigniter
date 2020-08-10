<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HomeStay</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->        
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('asserts/img/logo/favicon.png'); ?>">

        <!-- all css here -->

        <!-- bootstrap v3.3.6 css -->

        <?= link_tag("assets/css/boostrap.min.css") ?>

     <link rel="stylesheet" href="<?php echo base_url('asserts/css/bootstrap.min.css'); ?>">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/owl.carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/owl.transitions.css'); ?>">

        <!-- font-awesome css -->
        
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/icon.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/flaticon.css'); ?>">
        <!-- magnific css -->
        
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/zebra_datepicker.css'); ?>">
        <!-- magnific css -->
        
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/magnific.min.css'); ?>">
        <!-- venobox css -->
        <?= link_tag("asserts/css/venobox.css") ?>
        
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/venobox.css'); ?>">
        <!-- style css -->
        <?= link_tag("asserts/css/style.css") ?>
        
       <link rel="stylesheet" href="<?php echo base_url('asserts/css/style.css'); ?>">
        <!-- responsive css -->
        <?= link_tag("asserts/css/responsive.css") ?>
        
        <link rel="stylesheet" href="<?php echo base_url('asserts/css/responsive.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.min.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- modernizr css -->

        <script type="text/javascript" <?= link_tag("asserts/js/marco/modernizr-2.8.3.min.js") ?>
            
        </script>
        <script src="<?php echo base_url('asserts/js/marco/modernizr-2.8.3.min.js'); ?>"></script>
        
    </head>
        <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="preloader"></div>
        <!-- header -->
        <header class="header">
            <div class="container clearfix">
                <div class="header-right-info">
                    <ul>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text-box">
                                    <p>Lower Dorop salghari <br> south sikkim, India</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text-box">
                                    <p>+91 8016548526 <br>BisheshHomestay.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                                <div class="text-box">
                                    <p>sun to sat 24*7 <br>Always Closed</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-left-info">
                    <div class="link">
                        <a href="<?php echo base_url('Frontend/Booking_cnt'); ?>" class="thm-btn-inverse">book your room</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- Main menu -->
        <section class="main-menu-one finance-navbar">
            <nav id="main-navigation-wrapper" class="navbar navbar-default Marcho-navbar">
                <div class="container">
                    <div class="float-left">
                        <div class="logo pull-left"><a href="#"><img src="<?php echo base_url('asserts/img/logofinal2.png'); ?>" alt="Awesome Image"></a></div>
                    </div>
                    <div class="float-right">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div id="main-navigation" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); "Frontend/About" ?>">about us</a></li>
                                <li><a href="<?php echo base_url();echo "Frontend/Rooms_cnt" ?>">Rooms</a></li>
                                <li><a href="<?php echo base_url();echo "Frontend/Blog_cnt"; ?>">Near By Places</a></li>
                                <li><a href="<?php echo base_url(); ?>">Host</a> </li>
                                <li><a href="<?php echo base_url();echo "Frontend/Contact" ?>">contact us</a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </nav>
        </section>
        <!-- MAin menu ends -->

<style>
    .main-menu-one #main-navigation-wrapper .logo {
    margin: 3px 3px;
    max-width: 210px;
}
</style>