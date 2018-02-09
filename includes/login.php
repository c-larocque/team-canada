<?php // VALIDATE LOGIN
  ob_start();  // Redirecting Function 

  include 'db_news.php';

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to avoid injection
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM admin WHERE username='{$username}' ";
    $login_query = mysqli_query($connection, $query);
    if(!$login_query) {
      die("QUERY FAILED " . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_array($login_query)) {
      $admin_id = $row['admin_id'];
      $admin_username = $row['username'];
      $admin_password = $row['password'];
    }

    if($username === $admin_username && $password === $admin_password) {
      header ("Location: ../admin");
    }
  }

?>
