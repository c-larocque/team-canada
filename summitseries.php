<!-- connection to database -->
<?php include 'includes/db_timeline.php';?>

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

<div class="greyPano">
<section class="row" id="allTimeline">
  <section class="intro row">
  <div class="container">
    <h2 class="mainTitle">SUMMIT SERIES TIMELINE &darr;</h2>
    <h3>In 1972, an eight-game hockey series took place between Canada and the Soviet Union. Intended to improve relations between the two rivals, it ended up as the closest thing to open conflict ever experienced between the two nations.</h3>
  </div>
</section>

<section class="timeline">
  <ul>


 <?php ssTimeline(); ?>


  </ul>
</section>
</section><!--end all of timeline and intro text-->
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
