    <!--Main Footer-->
    <footer class="main-footer">

        <!--Footer Upper-->
        <div class="footer-upper" style="background-image:url(images/background/image-4.jpg);">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo"><img src="img/C.png" alt=""></div>
                                    <div class="text">
                                       <p> <?php echo $About[1] ?> </p>
                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">

                                    <h3>Important Links</h3>
                                    <ul>
                                        
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="proyecto2.php">Gallery</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                                                                
                                    </ul>

                                </div>
                            </div>


                        </div>
                    </div>
                    <!--Two 4th column End-->

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget contact-widget">
                                    <h3>Info</h3>
                                    <ul class="contact-info">
                                        <li><strong>Mail us:</strong> <?php echo $Mail?></li>
                                        <li><strong>Phone:</strong> <?php echo $Phone?></li>
                                    </ul>

                                    <div class="social-links">
                                        <a href="<?php echo $Facebook?>"><span class="fa fa-facebook-f"></span></a>
                                        <!--a href="#"><span class="fa fa-twitter"></span></a-->
                                        <a href="#"><span class="fa fa-google"></span></a>
                                        <!--a href="#"><span class="fa fa-skype"></span></a-->
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Two 4th column End-->

                </div>

            </div>
        </div>

        <!--Footer Bottom-->
       
    </footer>


    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-tool-3"></span>
    </div>


    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span class="fa fa-close"></span></div>
        <div class="popup-inner">

            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Enter Keyword" required>
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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/revolution.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    </body>

    </html>