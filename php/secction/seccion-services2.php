<?php include('php/text.php') ?>
<?php include('links.php') ?>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<!-- Bootstrap core CSS -->
<link href="php/cont/links/bootstrap.min.css" rel="stylesheet" type="text/css">

<!--Default CSS-->
<!--link href="php/cont/links/default.css" rel="stylesheet" type="text/css"-->

<!--Custom CSS-->
<link href="php/cont/links/style.css" rel="stylesheet" type="text/css">

<!--Blog CSS-->
<link href="php/cont/links/blog.css" rel="stylesheet" type="text/css">

<!--Plugin CSS-->
<link href="php/cont/links/plugin.css" rel="stylesheet" type="text/css">



 <!--*About*-->
 
            

<section id="mt_about">

            <div class="sec-title text-center">
            	<h2> contact <span class="theme_color"> us </span></h2>
                <div class="text"> <?php echo $SD[0] ?> </div>
            </div>

        <br><br><br><br>

        <div class="container">
   
            <div class="about_inner">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <div class="about-content">
                            <span class="mar-bottom-15">Contact</span>
                            <h2 class="mar-bottom-30">We individually assess each <br> plan and offer optimal solutions</h2>
                            <p class="mar-bottom-40">Our job is to demolish structures and buildings safely and effectively. This includes operating heavy machinery, such as jackhammers and bulldozers, to break down walls, ceilings, and other materials.</p>
                            <a href="services.php" class="btn mt_btn_yellow">Our Services</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 wow slideInDown">
                         
                    <div class="contact-form-outer">
                <div class="sidebar-title">
                    <h2>Send Us a Message</h2>
                    <br>
                </div>	
                <br><br><br>
                <div class="inner-box">

                        <br><br>
                        <div class="about-img">
                            <br><br>
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
                                <br><br>
                                <div class="text-left" href><button type="submit" class="theme-btn btn-style-two"> <a href="https://www.google.com/intl/es/gmail"> Send Now </a><span class="icon icon-right flaticon-arrows-10"></span></button></div>
                            </form>
                        </div>
                </div>

            </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->