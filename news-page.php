<!-- connection to database -->
<?php include 'includes/db_news.php';?>

<!-- connection to functions file-->
<?php include 'includes/functions.php';?>


<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEWS - Team Canada 1972</title>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Merriweather:400,400i,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/foundation-icons.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/css/app.css">
</head>

<body>

  <section class="row" id="mediaCentre">

<!-- display news categories from database   -->
<?php  displayCategory(); ?>

  <br>
  <a href="news-page.php">All News</a>
  <br>
  <a href="index.php">HOME</a>
  <h2>RELATED NEWS</h2>


  <!-- news articles dynamically dispalyed from database -->
  <?php articlesByCategory();?>

  </section>
  
  <!-- scripts -->
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
