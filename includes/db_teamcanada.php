<?php

// database constants
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root'); 
define('DB', 'teamcanada');

// database connection
$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB);

// database error dispaly if no-connection
if(!$connection) {
  die ('No connection to DB' . mysqli_error($connection));
}
?>