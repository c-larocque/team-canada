<!-- connection to database -->
<?php include 'includes/db_news.php';?>

<!-- connection to functions file-->
<?php include 'includes/functions.php';?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php';?>
    <title>NEWS ARTICLE - Team Canada 1972</title>
  </head>

  <body>
    <h1 class="hide">Team Canada 1972</h1>

    <?php include 'includes/header.php';?>
          <section class="row" id="newsArticle">

            <div class="small-12 columns" id="newsHeading">
              <h2>NEWS</h2>
              <a href="index.php" id="backBut"> < HOME</a>
            </div>

            <div class="small-12 columns">
               <section class="row" id="mediaCentre">

                <!-- display news categories from database   -->
                <?php  displayCategory(); ?>

                  <a href="news-page.php" id="backBut" style='margin-bottom: 20px;'>All News</a>
                  <br>
                  <br>
                  <br>
             

                  <!-- news articles dynamically dispalyed from database -->
                  <?php articlesByCategory();?>

                </section>
              </div>
          </section>

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

