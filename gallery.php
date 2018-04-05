<!-- connection to database -->
<?php include 'includes/db_teamcanada.php';?>

<!-- connection to functions file-->
<?php include 'includes/functions.php';?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php';?>
    <title>HOME - Team Canada 1972</title>
  </head>

  <body>
    <h1 class="hide">Team Canada 1972</h1>

    <?php include 'includes/header.php';?>

    <section class="row" id="galleryPage">
      <h2>GALLERY</h2>
    </section>

 <section class="row show-for-small-only" id="gallerySmallCon">
      <h2 class="hide">Small Gallery Accordion</h2>
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">Summit Series Game Action</a>

          <div class="accordion-content" data-tab-content>

        <?php ssGallery_small(); ?>

          </div>
        </li>

        <li class="accordion" data-accordion data-allow-all-closed="true">
          <a href="#" class="accordion-title">Press Conference - August 27, 2014</a>

          <div class="accordion-content" data-tab-content>

          <?php pcGallery_small(); ?>

          </div>
        </li>

        <li class="accordion" data-accordion data-allow-all-closed="true">
          <a href="#" class="accordion-title">"Legends to Legacy" Reunion Gala - October 2, 2014</a>

          <div class="accordion-content" data-tab-content>


          <?php llGallery_small(); ?>

          </div>
        </li>

        <!-- Added Gallery -->
        <li class="accordion" data-accordion data-allow-all-closed="true">
          <a href="#" class="accordion-title">Team Canada 72 - Gallery</a>

          <div class="accordion-content" data-tab-content>


  

          </div>
        </li>
        <!-- End of added Gallery -->

      </ul>
    </section><!--close mobile gallery-->

    <section class="row hide-for-small-only" id="galleryLargeSlider">
      <h2 class="hide">Gallery Slider</h2>
      <div class="slide">
        <a href="#" onclick="divVisibility('Div1');">
          <img src="images/gallery-ss-logo-cap.jpg" alt="Summit Series Logo" class="pic"/>
        </a>

        <a href="#" onclick="divVisibility('Div2');">
          <img src="images/gallery-pc-logo-cap.jpg" alt="Press Conference Logo" class="pic" />
        </a>

        <a href="#" onclick="divVisibility('Div3');">
          <img src="images/gallery-ll-logo-cap.jpg" alt="Legends to Legacy Logo" class="pic"/>
        </a>

        <!-- added Gallery -->
<!--         <a href="#" onclick="divVisibility('Div4');">
          <img src="images/logo.svg" alt="TC Logo" class="pic"/>
        </a> -->

      </div>
    </section>

    <div class="galleryLargeCon hide-for-small-only">

  <section id="Div1">
        <div class="row ssGallery">
        <h2>SUMMIT SERIES GAME ACTION</h2>

        <?php ssGallery(); ?>

        </div>
      </section><!--end of div 1-->
    </div>

  <div class="galleryLargeCon hide-for-small-only">

    <section id="Div2" style="display: none;">
        <div class="row ssGallery">
          <h2>PRESS CONFERENCE - AUGUST 27, 2014</h2>

        <?php pcGallery(); ?>

        </div>
      </section><!--end of div 2-->
    </div>


    <div class="galleryLargeCon hide-for-small-only">

    <section id="Div3" style="display: none;">
        <div class="row ssGallery">
          <h2>"LEGENDS TO LEGACY" REUNION GALA - OCTOBER 2, 2014</h2>


          <?php llGallery(); ?>

        </div>
      </section><!--end of div 3-->
    </div>


<!--     <div class="galleryLargeCon hide-for-small-only">

    <section id="Div4" style="display: none;">
        <div class="row ssGallery">
          <h2>Team Canada 72 - Gallery</h2>



        </div>
      </section>
    </div> -->
    <!--end of div 4-->

    <?php include 'includes/footer.php';?>

        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
