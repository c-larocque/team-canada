<!-- connection to database -->
<?php include '../includes/db_news.php';?>

<!-- connection to functions file -->
<?php include 'includes/functions.php'; ?>

<!-- Redirecting Function -->
<?php ob_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <title>Admin Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand">Team Canada 72 Admin</a>
      </div>

      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> TC72 ADMIN <b class="caret"></b></a>
          <ul class="dropdown-menu">
        <li class="divider"></li>
        <li>
              <a href="../"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
      </ul>
      </li>
      </ul>


      <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="javascript:;" data-toggle="collapse" data-target="#articles_dropdown"><i class="fa fa-fw fa-arrows-v"></i> News Articles <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="articles_dropdown" class="collapse">
              <li>
                <a href="articles.php"> View Articles </a>
              </li>
          <li>
                <a href="articles.php?source=add_article"> Add Article </a>
              </li>
        </ul>
        </li>
          <li>
            <a href="categories.php"><i class="fa fa-fw fa-desktop"></i> Categories </a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Welcome to ADMIN Dashboard</h1>

            <!-- GET request for CRUD in articles -->
            <?php  adminArticleAddEdit(); ?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>