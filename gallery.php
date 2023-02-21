<?php include('php/secction/header.php') ?>
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Galeria</h2>
            <ul>
                <li><a href="index.php">Inicio</a> /</li>
                <li>Galeria</li>
            </ul>
        </div>
    </div>
</div>

<section class="projects-section full-width no-padd-top">
    	<div class="outer-container clearfix">
            	
            <!--Default Work Column-->
            <div class="default-work-column">
                <div class="inner-box">
                    <figure class="image-box"><img src="images/gallery/1.jpg" alt=""></figure>
                    <a href="images/gallery/1.jpg" class="lightbox-image overlay-link"><span class="icon flaticon-cross"></span></a>
                    <div class="caption-layer">
                        <div class="upper">
                            <h3><a href="#">Roofing works</a></h3>
                            <div class="category"><a href="#">Pre Work</a></div>
                        </div>
                        <ul class="options clearfix">
                            <li><a href="#"><span class="icon flaticon-money"></span> Budget:  $10,000</a></li>
                            <li><a href="#"><span class="icon flaticon-vehicle"></span> Duration: 2 months</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
           
            
        </div>
    </section>

   <div class="default-work-column">
                <div class="inner-box">
                    <figure class="image-box"><img src="img/gallery/dero/f1_2.jpg" alt=""></figure>
                    <a href="img/gallery/dero/f1_2.jpg" class="lightbox-image overlay-link"><span class="icon flaticon-cross"></span></a>
                    <div class="caption-layer">
                        <div class="upper">
                            <h3><a href="#"> <?php echo $WL[1] ?> </a></h3>
                            <div class="category"><a href="#"> <?php echo $WD[0] ?> </a></div>
                        </div>
                        
                    </div>
                </div>
            </div>

<div class="project-gallery4-area">
    <div class="container">
        <div class="row">
            <?php for ($b=1; $b <=7; $b++) {?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="project4-box">
                        <div class="project4-content-holder">
                            <div class="project4-content">
                                <a href="img/gallery/full/<?php echo $b;?>.jpg" class="image-popup">
                                    <p class="gallery-details"><?php echo $Company;?></p>
                                </a>
                            </div>
                            <a href="img/gallery/full/<?php echo $b;?>.jpg" class="image-popup">
                                <i aria-hidden="true" class="fa fa-search text-white"></i>
                            </a>
                        </div>
                        <div class="project4-img-holder">
                            <img class="img-responsive" src="img/gallery/full/<?php echo $b;?>.jpg" alt="Our Gallery" loading="lazy">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>        
    </div>
</div>


<?php include('php/secction/seccion-bg1.php') ?>
<?php include('php/secction/seccion-bg2.php') ?>
<?php include('php/secction/footer.php') ?>