<?php include('php/secction/header.php') ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(img/resource/remodelacion/p_5.jpg);">
    	<div class="auto-container">
        	<h1> <?php echo $tittle_2[2] ?> </h1>
            <div class="text"> <?php echo $SD[0] ?> </div>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="theme-breadcrumb">
    	<div class="auto-container">
            <ol class="breadcrumb" style="margin-bottom: 5px;">
              <li><a href="index.">Home</a></li>
              <li class="active">Our Work</li>
            </ol>
        </div>
    </div>
    
    
    <section class="projects-section full-width no-padd-top">
    <?php for ($b=1; $b <=15; $b++) {?>	
    <div class="outer-container clearfix">
            	
        
            <!--Default Work Column-->
            <div class="default-work-column">
                <div class="inner-box">
               
                    <figure class="image-box"><img src="img/gallerys/<?php echo $b;?>.jpg" alt=""></figure>
                    <a href="img/gallerys/<?php echo $b;?>.jpg" class="lightbox-image overlay-link"><span class="icon flaticon-cross"></span></a>
                    <div class="caption-layer">
                        <div class="upper">
                            <h3><a href="#">Diaz Demolition & Junk Removal</a></h3>
                            <div class="category"><a href="#">Services</a></div>
                        </div>
                        <ul class="options clearfix">
                            <li><a href="#"><span class="icon flaticon-money"></span> Illinois, CH</a></li>
                            <li><a href="#"><span class="icon flaticon-vehicle"></span> 60 Miles around</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
            
           
            
        </div>
    </section>
    
    <!--Default Intro Section-->
    
    <?php include('none.php') ?>
    <?php include('footer.php') ?>