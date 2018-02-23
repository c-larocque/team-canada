<!-- connection to database -->
<?php include 'includes/db_gallery.php';?>

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

        <?php ssGallery(); ?>

          </div>
        </li>

        <li class="accordion" data-accordion data-allow-all-closed="true">
          <a href="#" class="accordion-title">Press Conference - August 27, 2014</a>

          <div class="accordion-content" data-tab-content>

          <?php pcGallery(); ?>

          </div>
        </li>

        <li class="accordion" data-accordion data-allow-all-closed="true">
          <a href="#" class="accordion-title">"Legends to Legacy" Reunion Gala - October 2, 2014</a>

          <div class="accordion-content" data-tab-content>


          <?php llGallery(); ?>

          </div>
        </li>
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
      </div>
    </section>

    <div class="galleryLargeCon hide-for-small-only">

  <section id="Div1">
        <div class="row ssGallery">
        <h2>SUMMIT SERIES GAME ACTION</h2>

        <?php  

            $query = "SELECT * FROM summit_series";
            $ssImages = mysqli_query($connection, $query);
            $ssImages_check = mysqli_num_rows($ssImages);

            if ($ssImages_check > 0) {
              while($row = mysqli_fetch_assoc($ssImages)) {
                $ss_image = escape($row['ss_image']);

            ?>

            <div class="medium-3 large-3 columns">
            <a data-open="openImg"><?php echo"<img src='images/{$ss_image}' alt='SS Image'>";?></a>
            <div class="reveal medium" id="openImg" data-reveal>
              <?php echo"<img src='images/{$ss_image}' alt='SS Image {$ss_id} Large'>";?>
           <!--    <img src="images/gallery-ss-1.jpg" alt="SS Image 1 Large"> -->
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <?php  
              }   
            } 
          ?>

        </div>
      </section><!--end of div 1-->
    </div>

  <div class="galleryLargeCon hide-for-small-only">

    <section id="Div2" style="display: none;">
        <div class="row ssGallery">
          <h2>PRESS CONFERENCE - AUGUST 27, 2014</h2>

        <?php  

            $query = "SELECT * FROM press_conf";
            $pcImages = mysqli_query($connection, $query);
            $pcImages_check = mysqli_num_rows($pcImages);

            if ($pcImages_check > 0) {
              while($row = mysqli_fetch_assoc($pcImages)) {
                $pc_image = escape($row['pc_image']);

            ?>

            <div class="medium-3 large-3 columns">
            <a data-open="openImg"><?php echo"<img src='images/{$pc_image}' alt='PC Image'>";?></a>
            <div class="reveal medium" id="openImg" data-reveal>
              <?php echo"<img src='images/{$pc_image}' alt='PC Image {$pc_id} Large'>";?>
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <?php  
              }   
            } 
          ?>

        </div>
      </section><!--end of div 2-->
    </div>


    <div class="galleryLargeCon hide-for-small-only">


    <section id="Div3" style="display: none;">
        <div class="row ssGallery">
          <h2>"LEGENDS TO LEGACY" REUNION GALA - OCTOBER 2, 2014</h2>


          <?php  

            $query = "SELECT * FROM legend_legacy";
            $llImages = mysqli_query($connection, $query);
            $llImages_check = mysqli_num_rows($llImages);

            if ($llImages_check > 0) {
              while($row = mysqli_fetch_assoc($llImages)) {
                $ll_image = escape($row['ll_image']);

            ?>

            <div class="medium-3 large-3 columns">
            <a data-open="openImg"><?php echo"<img src='images/{$ll_image}' alt='LL Image'>";?></a>
            <div class="reveal medium" id="openImg" data-reveal>
              <?php echo"<img src='images/{$ll_image}' alt='LL Image {$ll_id} Large'>";?>
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <?php  
              }   
            } 
          ?>

        </div>
      </section><!--end of div 3-->
    </div>

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
