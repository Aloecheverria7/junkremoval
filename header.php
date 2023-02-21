<title><?php if($page_name=='index.php'){echo "$Company";}
elseif ($page_name=='about.php') {echo "$Company | About";}
elseif ($page_name=='services.php') {echo "$Company | Services";}
elseif ($page_name=='gallery.php') {echo "$Company | Gallery";}
elseif ($page_name=='testimonials.php') {echo "$Company | Testimonials";}
elseif ($page_name=='thank-you.php') {echo "$Company";}
elseif ($page_name=='contact.php') {echo "$Company | Contact";}?>
</title>    


<header class="main-header header-style-one">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	<!-- Top Left -->
            	<div class="top-left">
                	<ul class="clearfix">
                    	<li><a href="#">We have more than 25 years of experiences</a></li>
                    </ul>
                </div>
                
                <!-- Top Right -->
                <div class="top-right">
                <div class="header-lower">
        	
        </div>
                </div>
                
            </div>
        </div><!-- Header Top End -->
        
    	<!--Header-Upper-->
        <div class="header-upper" style="background-image:url(img/background/bg-header-pattern.jpg);">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-outer">
                    	<div class="logo"><a href="index.php"><img src="img/C_1.png" alt="" title="Constractor One"></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                    	
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-location"></span></div>
                            <ul>
                            	<li><span class="small-title">Find us</span></li>
                                <li> <strong><?php echo $location ?></strong> </li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-technology"></span></div>
                            <ul>
                            	<li><span class="small-title">Call us today</span></li>
                                <li><a href="<?php echo $PhoneRef;?>"><strong> <?php echo $Phone ?> </strong></a></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-letter-1"></span></div>
                            <ul>
                            	<li><span class="small-title">Email us now</span></li>
                                <li><a href=" <?php echo $MailRef ?>    "><strong> <?php echo $Mail ?> </strong></a></li>
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
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                                            
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                    </nav><!-- Main Menu End-->
                
                	
                    
                </div>
            </div>
        </div>
    
    </header>