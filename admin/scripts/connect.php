<?php
//This file will connect us to the database using user credentials

$user = "root";
$pass = "root";
$url = "localhost";
$db = "db_team_canada";

ini_set('error_reporting', -1);
ini_set('display_errors', 1);

$link = mysqli_connect($url, $user, $pass, $db);
mysqli_set_charset($link, 'utf8');

//Evaluate connection
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}


?>
