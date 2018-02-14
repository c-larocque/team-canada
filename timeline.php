<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php';?>
    <title>HOME - Team Canada 1972</title>
  </head>

  <body>

<div class="container timeline small-12 columns">

    <?php include 'includes/header.php';?>

<div class="buttons row">
    <a href="#" class="button small-10 small-push-1 medium-4 large-3 large-push-2 columns" onclick="divVisibility('Div4');">Summit Series</a>
    <a href="#" class="button small-10 small-pull-1 medium-4 large-3 large-pull-2 columns" onclick="divVisibility('Div5');">Current Events</a>
</div>

<section id="Div4">
    <h1>Summit Series Timeline</h1>
<p>In 1972, an eight-game hockey series took place between Canada and the Soviet Union. Intended to improve relations between the two rivals, it ended up as the closest thing to open conflict ever experienced between the two nations</p>

 <ul class="timeline-orbit" data-orbit>
  <li class="row">
    <img src="images/gallery_ll_1.jpg" alt="Before" class="small-12 medium-6 columns">
    <div class="timeline-caption small-12 medium-6 columns">
      <h2>Before</h2>
      <p>After the second World War, the Western countries and the Soviet Union turned from allies to enemies. In the 1950's, the division between communist and non-communist nations deepened until the two sides teetered on the brink of nuclear warfare. Known as the "Cold War", it was a situation that threatened to escalate worldwide.</p><a href="#">Read More</a>
    </div>
  </li>
  <li class="active row">
    <img src="images/gallery_ll_2.jpg" alt="slide 2" class="small-12 medium-6 columns">
    <div class="timeline-caption small-12 medium-6 columns">
      <h2>Canada</h2>
      <p>Reigning Stanley-Cup winner Harry Sinder, was named head coach and John Ferguson, originally invited as a player, just before he retired - was named his assistant. ...</p>
    </div>
  </li>
  <li>
    <img src="images/gallery_ll_1.jpg" alt="slide 3" class="small-12 medium-6 columns">
    <div class="timeline-caption small-12 medium-6 columns">
      <h2>Game One</h2>
      <p>On a sweltering night in Montreal....</p>
    </div>
  </li>
</ul>

<!-- Navigation Arrows -->
  <a href="#" class="orbit-prev">Prev <span></span></a>
  <a href="#" class="orbit-next">Next <span></span></a>

  <!-- Slide Numbers -->
  <div class="orbit-slide-number">
    <span>1</span> of <span>3</span>
  </div>

  <!-- Timer and Play/Pause Button -->
  <div class="orbit-timer">
    <span></span>
    <div class="orbit-progress"></div>
  </div>

<!-- need to add to these buttons -->
<ol class="orbit-bullets">
  <li data-orbit-slide-number="1"></li>
  <li data-orbit-slide-number="2" class="active"></li>
  <li data-orbit-slide-number="3"></li>
</ol>

</section><!--end summit series section-->

<section id="Div5" style="display: none;">
    <h1>Current Events Timeline</h1>
<p>Since 1972, Team Canada has had many honours bestowed upon them, for their triumph, teamwork, and ability to bring a nation together.</p>

 <ul class="example-orbit" data-orbit>
  <li class="row">
    <img src="images/gallery_ll_1.jpg" alt="Before" class="small-12 medium-6 columns">
    <div class="timeline-caption small-12 medium-6 columns">
      <h2>Team of the Year</h2>
      <p>In 1972, The Canadian Press named Team Canada 1972 as the "Team of the Year". ...</p>
    </div>
  </li>
  <li class="active row">
    <img src="images/gallery_ll_2.jpg" alt="slide 2" class="small-12 medium-6 columns">
    <div class="timeline-caption small-12 medium-6 columns">
      <h2>25th Anniversary Coin</h2>
      <p>In 1977, The Canadian Mint released a 25th Anniversary Coin, commemorating Team Canada 1972 during the Summit Series. ...</p>
    </div>
  </li>
  <li>
    <img src="images/gallery_ll_1.jpg" alt="slide 3" class="small-12 medium-6 columns">
    <div class="timeline-caption small-12 medium-6 columns">
      <h2>25th Anniversary Stamps</h2>
      <p>In 1977, Canada Post released two 25th Anniversary Stamps in recognition. ...</p>
    </div>
  </li>
</ul>

<!-- Navigation Arrows -->
  <a href="#" class="orbit-prev">Prev <span></span></a>
  <a href="#" class="orbit-next">Next <span></span></a>

  <!-- Slide Numbers -->
  <div class="orbit-slide-number">
    <span>1</span> of <span>3</span>
  </div>

  <!-- Timer and Play/Pause Button -->
  <div class="orbit-timer">
    <span></span>
    <div class="orbit-progress"></div>
  </div>

<!-- need to add to these buttons -->
<ol class="orbit-bullets">
  <li data-orbit-slide-number="1"></li>
  <li data-orbit-slide-number="2" class="active"></li>
  <li data-orbit-slide-number="3"></li>
</ol>

</section>

        <?php include 'includes/footer.php';?>


</div><!--end container-->

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/timeline.js"></script>
      </body>
    </html>
