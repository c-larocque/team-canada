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

<div class="container timeline small-12 columns">

    <?php include 'includes/header.php';?>

<!-- <div class="buttons row">
    <a href="#" class="button small-10 small-push-1 medium-4 large-3 large-push-2 columns" onclick="divVisibility('Div4');">Summit Series</a>
    <a href="#" class="button small-10 small-pull-1 medium-4 large-3 large-pull-2 columns" onclick="divVisibility('Div5');">Current Events</a>
</div> -->

<section id="Div4" class="row" style="display: block;">
    <h1>Summit Series Timeline</h1>
    <p>In 1972, an eight-game hockey series took place between Canada and the Soviet Union. Intended to improve relations between the two rivals, it ended up as the closest thing to open conflict ever experienced between the two nations.</p>
	<p>Click through the timeline to learn more about the series!</p>

<div id="slides">
  <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
  <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>

  <?php ssTimeline(); ?> 

</div>
</section><!--end summit series section-->

<section id="Div5" class="row" style="display: none;">
    <h1>Current Events Timeline</h1>
<p>Since 1972, Team Canada has had many honours bestowed upon them, for their triumph, teamwork, and ability to bring a nation together.</p>

<div class="slides">
  <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
  <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>

    <?php ceTimeline(); ?> 

</div>

</section>

        <?php include 'includes/footer.php';?>

</div><!--end container-->

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/jquery.slides.min.js"></script>
        <script src="js/timeline.js"></script>
      </body>
    </html>
