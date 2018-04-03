<?php

// database constants
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root'); // to be given
define('DB', 'tc_gallery');

// database connection
$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB);

// database error dispaly if no-connection
if(!$connection) {
  die ('No connection to DB' . mysqli_error($connection));
}

?>
