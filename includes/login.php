<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'db_news.php';

  session_start();

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to avoid injection
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM admin WHERE username='{$username}' ";
    $login_query = mysqli_query($connection, $query);
    if($login_query) {
      $row = mysqli_fetch_array($login_query);
      $admin_id = $row['admin_id'];
      $admin_username = $row['username'];
      $admin_password = $row['password'];

      $_SESSION['userId'] = $admin_id;
    if($username === $admin_username && $password === $admin_password) {
      header ("Location: ../admin/index.php");
    }
  }
}
?>