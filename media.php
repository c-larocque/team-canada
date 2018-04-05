<!-- connection to database -->
<?php include 'includes/db_teamcanada.php';?>

<!-- connection to functions file-->
<?php include 'includes/functions.php';?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php';?>
    <title>MEDIA CENTRE - Team Canada 1972</title>
  </head>

  <body>
    <h1 class="hide">Team Canada 1972</h1>

    <?php include 'includes/header.php';?>

          <div id="mediaHeading" data-interchange="[images/media_bg_3.jpg, small], [images/media_bg_2.jpg, medium], [images/media_bg_1.jpg, large]">
            <section class="row">
            <h2>MEDIA CENTRE</h2>
              <div class="medium-4 medium-offset-8 large-4 large-offset-8 columns">
                <nav id="mediaNav">
                  <h3 class="hide">Media Centre Navigation</h3>
                  <ul>
                    <li><a href="#socialMedia">SOCIAL MEDIA</a></li>
                    <li><a href="#relatedNews">RELATED NEWS</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                  </ul>
                </nav>
              </div>
            </section>
          </div>

          <div id="socialMedia">
            <section class="row">
              <h2>SOCIAL MEDIA</h2>
              <div class="small-12 medium-6 columns">
                <a href="http://www.facebook.com/teamcanada1972" class="widgetLabel">FACEBOOK</a>
                <div class="hide-for-small-only">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fteamcanada1972&tabs=timeline&width=570&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="570" height="500" style="border:none;overflow:hidden;max-width:100%;" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
                </div>
              </div>

              <div class="small-12 medium-6 columns">
                <a href="http://www.twitter.com/teamcanada1972" class="widgetLabel">TWITTER</a>
                <div class="hide-for-small-only">
                  <a class="twitter-timeline" data-height="500" href="https://twitter.com/TeamCanada1972">Tweets by TeamCanada1972</a>
                </div>
              </div>
            </section>
          </div>

          <section class="row" id="relatedNews">
            <div class="small-12 columns" id="newsHeading">
              <h2>RELATED NEWS</h2>
              <a href="news-page.php" id="seeAllBut">SEE ALL ></a>
            </div>

          <?php mediaPageNews(); ?>

          </section>

    <?php include 'includes/footer.php';?>

        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
        <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <script src="js/app.js"></script>
  </body>
</html>
