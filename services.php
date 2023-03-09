<?php include('links.php') ?>
<?php include('php/secction/header.php') ?>
<!--End Main Header -->


<!--Page Title-->
<section class="page-title" style="background-image:url(img/resource/remodelacion/p_5.jpg);">
    <div class="auto-container">
        <h2>Our <span class="theme_color"> <?php echo $SN[0] ?> </span></h2>
        <div class="text"> <?php echo $SD[0] ?></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="theme-breadcrumb">
    <div class="auto-container">
        <ol class="breadcrumb" style="margin-bottom: 5px;">
            <li><a href="index.php">Home</a></li>
            <li class="active">Services</li>
        </ol>
    </div>
</div>

<!--Services Section-->
<section class="services-style-one no-padd-top">
    <div class="auto-container">

        <div class="row clearfix">



            <div class="container">
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="row"><br>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="service-box">
                                <div class="service-content-holder">
                                    <h2 class="text"><?php echo $SN[$i]; ?></h2>
                                    <p><?php echo $SD[$i]; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="default-service-column col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="inner-most">
                                    <figure class="image-box"><a href="services.php"><img src="img/resource/Services/<?php echo $i; ?>.jpg" alt=""></a></figure>
                                    <div class="lower-part">
                                        <div class="left-curve"></div>
                                        <div class="right-curve"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><br>
                    <hr>
                <?php } ?>

            </div>


        </div>
    </div>
</section>





<?php include('none.php') ?>
<?php include('footer.php') ?>