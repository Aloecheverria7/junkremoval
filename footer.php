<?php include('php/text.php') ?>
<?php include('links.php') ?>



<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- Responsive -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">¨

<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">
<link href="css/responsive.css.map" rel="stylesheet">

<!-- Archivos javascript -->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

<footer class="main-footer">       
        <!--Footer Upper-->        
        
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo"><img src="img/main-slider/footer.png" alt=""></div>
                                    <div class="text">
                                        <p  class="parrf"> <?php echo $Payment ?> </p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            
                            
                            
                        </div>
                    </div><!--Two 4th column End-->
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">

                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget contact-widget">
                                    <h3>Address</h3>	
                                    <ul class="contact-info">
                                        <li><strong>Head Office:</strong> <?php echo $Address ?> </li>
                                        <li><strong>Phone</strong> <?php echo  $Phone ?> <br></li>
                                    </ul>
                                    
                                    <div class="social-links">
                                        <a href="https://www.facebook.com"><span class="fa fa-facebook-f"></span></a>
                                        <a href="https://twitter.com/?lang=es"><span class="fa fa-twitter"></span></a>
                                        <a href="https://www.google.com/business/"><span class="fa fa-google-plus"></span></a>
                                        
                                    </div>
                                    
                                </div>
                            </div>  
                            
                        </div>
                    </div><!--Two 4th column End-->
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="pull-left"><div class="copyright-text">&copy; Copyright 2023.</div></div>

                </div>
            </div>
        </div>
        
    </footer>
    
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->



<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search"><span class="fa fa-close"></span></div>
	<div class="popup-inner">
    
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Enter Keyword" required >
                        <input type="submit" value="Search It!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>
        
        </div>
        
    </div>
</div>