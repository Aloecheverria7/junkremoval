<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<?php include('php/secction/mail.php') ?>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo $ExDescription;?>" />
    <meta name="author" content="" />

    <!-- Page Title -->
    <title><?php if($page_name=='index.php'){echo "$Company";}
elseif ($page_name=='about.php') {echo "$Company | About";}
elseif ($page_name=='services.php') {echo "$Company | Services";}
elseif ($page_name=='gallery.php') {echo "$Company | Gallery";}
elseif ($page_name=='testimonials.php') {echo "$Company | Testimonials";}
elseif ($page_name=='thank-you.php') {echo "$Company";}
elseif ($page_name=='contact.php') {echo "$Company | Contact";}?>
    </title>


    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">


        <?php $_SESSION['token'] = md5(microtime()); ?>





        <!-- Main Header / Style One-->
        <header class="main-header header-style-one">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><a href="#">We have more than 8 experience years!</a></li>
                        </ul>
                    </div>

                    <!-- Top Right -->
                    <!--div class="top-right">
                	<ul class="clearfix">
                    	
                        <li><a href="#">support</a></li>
                        
                    </ul>
                </div-->

                </div>
            </div><!-- Header Top End -->

            <!--Header-Upper-->

            <div class="header-upper" style="background-image:url(img/background/bg-header-pattern.jpg);">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="index.php"><img src="img/C.png" alt=""
                                        title="Constractor One"></a></div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-location"></span></div>
                                <ul>
                                    <li><span class="small-title">Find us</span></li>
                                    <li><a><strong><?php echo $Address?></strong></a></li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-technology"></span></div>
                                <ul>
                                    <li><span class="small-title">Call us today</span></li>
                                    <li><a href="<?php echo $Phone?>"><strong><?php echo $Phone ?></strong></a>
                                    </li>
                                </ul>
                            </div>

                            <!--Info Box-->

                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-letter-1"></span></div>
                                <ul>
                                    <li><span class="small-title">Email us now</span></li>
                                    <li><a href="<?php echo $Mail?>"><strong>diazdemolitionjunkremoval<br>@gmail.com</strong></a>
                                    </li>
                                </ul>
                            </div>



                        </div>

                    </div>
                </div>
            </div>


            <!--Header-Lower-->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.php">Home</a>

                                    </li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li class="dropdown"><a href="proyecto1.php">Gallery</a>
                                    </li>
                                    <!--li class="dropdown"><a href="#">BLog</a>
                                	<ul>
                                        <li><a href="blog.html">Blog CLassic</a></li>
                                        <li><a href="blog-two-column.html">Blog Two Column</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="404-page.html">404 Page</a></li>
                                    </ul>
                                </li-->
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <div class="btn-outer"><a href="#" class="theme-btn inq-btn"><span class="txt">GET A FREE
                                    ESTIMATE</span></a></div>

                    </div>
                </div>
            </div>









        </header>
        <!--End Main Header -->
    </div>