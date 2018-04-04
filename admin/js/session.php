<?php 
function confirm_logged_in() {
	if(!isset($_SESSION['userId'])) {
		header("Location: ../login.php");
	}
}
 ?>