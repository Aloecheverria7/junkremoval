<!--Testimonials Sction-->
<?php include('php/text.php') ?>


<section class="testimonials-section padd-bott-70">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title text-center">
            	<h2>What <span class="theme_color">Our CLients</span> Say</h2>
                <div class="text"></div>
            </div>
        </div>
            
        
        <div class="carousel-outer">
            <div class="auto-container">
            	<!--Testimonials Carousel-->
                <ul class="testimonials-carousel">
                    
                    <!--Slide Item-->
                    <li class="slide-item">
                        <div class="testi-box clearfix">
                            <figure class="author-thumb">
                                <img src="img/resource/C.jpg" alt="">
                                <!--Info Box-->
                                <div class="info-box">
                                    <div class="left-curve"></div>
                                    <div class="right-curve"></div>
                                    <div class="content">
                                        <h4> <?php echo $clientes[0] ?> </h4>
                                        <div class="designation"><?php echo $clientes[1] ?></div>
                                    </div>
                                </div><!--Info Box-->
                            </figure>
                            <div class="text-content"> <?php echo $clientes[2] ?>  </div>
                        </div>
                    </li>
                    
                    <!--Slide Item-->
                    <li class="slide-item">
                        <div class="testi-box clearfix">
                            <figure class="author-thumb">
                                <img src="img/resource/C_1.jpg" alt="">
                                <!--Info Box-->
                                <div class="info-box">
                                    <div class="left-curve"></div>
                                    <div class="right-curve"></div>
                                    <div class="content">
                                        <h4> <?php echo $clientes[3] ?> </h4>
                                        <div class="designation"> <?php echo $clientes[4] ?> </div>
                                    </div>
                                </div><!--Info Box-->
                            </figure>
                            <div class="text-content"> <?php echo $clientes[5]?>  </div>
                        </div>
                    </li>
                    
                    <!--Slide Item-->
                    <li class="slide-item">
                        <div class="testi-box clearfix">
                            <figure class="author-thumb">
                                <img src="img/resource/C_2.jpg" alt="">
                                <!--Info Box-->
                                <div class="info-box">
                                    <div class="left-curve"></div>
                                    <div class="right-curve"></div>
                                    <div class="content">
                                        <h4> <?php echo $clientes[6]?> </h4>
                                        <div class="designation"> <?php echo $clientes[7]?> </div>
                                    </div>
                                </div><!--Info Box-->
                            </figure>
                            <div class="text-content"><?php echo $clientes[8]?></div>
                        </div>
                    </li>
                    
                    <!--Slide Item-->
                    <li class="slide-item">
                        <div class="testi-box clearfix">
                            <figure class="author-thumb">
                                <img src="img/resource/C_3.jpg" alt="">
                                <!--Info Box-->
                                <div class="info-box">
                                    <div class="left-curve"></div>
                                    <div class="right-curve"></div>
                                    <div class="content">
                                        <h4><?php echo $clientes_2[0]?></h4>
                                        <div class="designation"> <?php echo $clientes_2[1]?> </div>
                                    </div>
                                </div><!--Info Box-->
                            </figure>
                            <div class="text-content"><?php echo $clientes_2[2]?></div>
                        </div>
                    </li>
                    
                    
                </ul><!--Testimonials Carousel-->
                
            </div>
        </div>
        
    </section>


    <script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.js"></script>
<script src="js/isotope.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>