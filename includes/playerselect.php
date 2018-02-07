<?php
ini_set('display_errors',1);
  error_reporting(E_ALL);
  require_once("../admin/scripts/connect.php");
  require_once("../admin/scripts/config.php");




 if (isset($_GET['players_position'])) { //check to see if there's a parameter
  $playersposition = $_GET['players_position'];

  $playersquery = 'SELECT * FROM tbl_players';

  //Get Result
  $playersresult = mysqli_query($link, $playersquery);

     while($row=mysqli_fetch_array($playersresult)) {
       $dcard = $row[1];
       $dcardback = $row[2];
       $mcard = $row[3];
       $name = $row[4];
       $position = $row[5];
       $hometown = $row[6];
       $number = $row[7];
       $desc = $row[8];
       $career = $row[9];
     }
     echo json_encode($playersresult);
 }


 ?>
