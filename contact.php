
<?php include('php/secction/header.php') ?>

    <!--Page Title-->
    <section class="page-title" style="background-image:url(img/resource/remodelacion/p_5.jpg);">
    	<div class="auto-container">
        	<h1>Contact us</h1>
            <div class="text"> <?php echo $SD[0] ?> </div>
        </div>
    </section>
    
   
    
    <!--Contact Section-->
    <section class="contact-section">
    	<!--Map Container-->
        <div class="map-container">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"			  
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"							
                style="height: 100%;">
            </div>
            
        </div>
        
        <div class="auto-container">
            <!--Comment Form-->
            <div class="contact-form-outer">
                <div class="sidebar-title">
                    <h3>Send Us a Message</h3>
                </div>	
                
                <div class="inner-box">
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="YOUR NAME">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="email" name="email" value="" placeholder="EMAIL ADDRESS">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="PHONE NUMBER" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="subject" value="" placeholder="SUBJECT">
                            </div>
                            
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="MESSAGE"></textarea>
                            </div>
                        
                        </div>
                        <div class="text-left" href><button type="submit" class="theme-btn btn-style-two"> <a href="https://www.google.com/intl/es/gmail"> Send Now </a><span class="icon icon-right flaticon-arrows-10"></span></button></div>
                    </form>
                </div>
                
                <div class="contact-info clearfix">
                	<!--Info Box-->
                    <div class="column info-box">
                        <div class="icon-box"><span class="flaticon-location"></span></div>
                        <ul>
                        <li><span class="small-title">Find us</span></li>
                                <li><strong> <?php echo $location ?>  </strong></a></li>
                        </ul>
                    </div>
                    
                    <!--Info Box-->
                    <div class="column info-box">
                        <div class="icon-box"><span class="flaticon-technology"></span></div>
                        <ul>
                            <li><span class="small-title">Call us today</span></li>
                            <li><a href="#"><strong> <?php echo $Phone ?> </strong></a></li>
                        </ul>
                    </div>
                    
                    <!--Info Box-->
                    <div class="column info-box">
                        <div class="icon-box"><span class="flaticon-note"></span></div>
                        <ul>
                        <li><span class="small-title">Email us now</span></li>
                                <li><a href=" <?php echo $MailRef ?> "><strong> <?php echo $Mail ?> </strong></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>      

     
    </section>



    <?php include('php/secction/footer.php') ?>