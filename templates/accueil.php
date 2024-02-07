<?php
  require_once('classes/Accueil.php');
  $info_accueil  = new Accueil('Accueil');
?>


<!DOCTYPE html>
<html>

  <?php require_once('templates/corps/css.php') ?>


  <body>

      <?php require_once('templates/corps/entete.php') ?>



          <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-less inc-shape">
        <div id="bootcarousel" class="carousel large-text text-light slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item bg-cover active" style="background-image: url(assets/img/2440x1578.png);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-2">
                                        <div class="content">
                                            <h4 data-animation="animated zoomInRight">Original & natural</h4>
                                            <h2 data-animation="animated slideInRight">Organic Autumn</h2>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-cover" style="background-image: url(assets/img/2440x1578.png);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-2">
                                        <div class="content">
                                            <h4 data-animation="animated slideInLeft">Handmade Products</h4>
                                            <h2 data-animation="animated slideInUp">Organic vegboxes</h2>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="ti-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="ti-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->











      <?php require_once('templates/corps/pieds.php') ?>


      <?php require_once('templates/corps/js.php') ?>

  </body>

</html>