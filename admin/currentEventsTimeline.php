<?php include '../includes/db_teamcanada.php';
include 'includes/functions.php';
include 'includes/session.php';
confirm_logged_in();?>
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
        <form action="includes/logout.php" method="post">
          <button type="submit" name="submit" class="btn btn-danger" style="margin-top: 8px; margin-right: 10px;">LOGOUT</button>
        </form>
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
          <li><a href="javascript:;" data-toggle="collapse" data-target="#timeline_dropdown"><i class="fa fa-fw fa-list-ul"></i> Summit Series Timeline <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="timeline_dropdown" class="collapse">
              <li>
                <a href="timeline.php"> View Timeline </a>
              </li>
          <li>
            <a href="timeline.php?source=addTo_timeline"> Add To Timeline </a>
          </li>        
        </ul>
        </li>   

          <li><a href="javascript:;" data-toggle="collapse" data-target="#cetimeline_dropdown"><i class="fa fa-fw fa-list-ul"></i> Current Events Timeline <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="cetimeline_dropdown" class="collapse">
              <li>
                <a href="currentEventsTimeline.php"> View Timeline </a>
              </li>
          <li>
            <a href="currentEventsTimeline.php?source=addTo_CEtimeline"> Add To Timeline </a>
          </li>        
        </ul>
        </li>       

        </ul>
      </div>
      <!-- ADMIN SideBar end -->
    </nav>

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Welcome to ADMIN Dashboard</h1>

            <!-- GET request for CRUD in timeline -->
            <?php  ceTimelineAddEdit(); ?>

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