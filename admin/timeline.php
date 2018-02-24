<!-- connection to database -->
<?php include '../includes/db_timeline.php';?>

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


      <!-- ADMIN SideBar -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li>
            <a href="index.php"><i class="fa fa-fw fa-home"></i> Home </a>
          </li>
          <li><a href="javascript:;" data-toggle="collapse" data-target="#articles_dropdown"><i class="fa fa-fw fa-newspaper-o"></i> News Articles <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="articles_dropdown" class="collapse">
            <li>
              <a href="categories.php">Categories </a>
            </li>
              <li>
                <a href="articles.php"> View Articles </a>
              </li>
          <li>
            <a href="articles.php?source=add_article"> Add Article </a>
          </li>        
        </ul>
        </li>
          <li><a href="javascript:;" data-toggle="collapse" data-target="#timeline_dropdown"><i class="fa fa-fw fa-list-ul"></i> Timeline <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="timeline_dropdown" class="collapse">
              <li>
                <a href="timeline.php"> View Timeline </a>
              </li>
          <li>
            <a href="timeline.php?source=addTo_timeline"> Add To Timeline </a>
          </li>        
        </ul>
        </li>         
          <li>
            <a href="#"><i class="fa fa-fw fa-photo"></i> Gallery Update </a>
          </li>

        </ul>
      </div>
      <!-- ADMIN SideBar end-->
    </nav>

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Welcome to ADMIN Dashboard</h1>

            <!-- GET request for CRUD in timeline -->
            <?php  timelineAddEdit(); ?>

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