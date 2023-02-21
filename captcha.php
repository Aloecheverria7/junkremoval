<?php
#######################################################################
#				PHP Simple Captcha Script
#	Script Url: http://toolspot.org/php-simple-captcha.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################
@session_start();
$code=rand(1000,9999);
$_SESSION["code"]=$code;
$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 22, 86, 165);
$fg = imagecolorallocate($im, 255, 255, 255);
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>


<!-- Roger  -->
<!-- ########################################################################
######################################################################## -->

<?php include('php/text.php') ?>
<?php include('links.php') ?>
<?PHP include('header.php') ?>
<?php include('php/text.php') ?> 
    
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
            <?php } ?>
            
           
            
        </div>
    </section>
    
    <!--Default Intro Section-->
    
    <?php include('none.php') ?>
    <?php include('footer.php') ?>