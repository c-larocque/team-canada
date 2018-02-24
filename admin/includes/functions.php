<?php 

	// ADMIN ADD CATEGORY
	function adminAddCategory() {
		global $connection;
  	if (isset($_POST['submit'])) {
    	$cat_title = $_POST['cat_title'];

   	if ($cat_title == "" || empty($cat_title)) {
     echo "Field is required";
   	} else {
    	$query = "INSERT INTO category(cat_title) ";
    	$query .= "VALUE('{$cat_title}') ";

    	$create_category = mysqli_query($connection, $query);

    	if (!$create_category) {
	    	die('Query Failed' . msqli_error($connection));
      }
     }
    }
	}


	// ADMIN FIND CATEGORY
	function adminFindCategory() {
		global $connection;
    $query = "SELECT * FROM category";
    $categories = mysqli_query($connection, $query);
    $categories_check = mysqli_num_rows($categories);

    if ($categories_check > 0) {
	    while($row = mysqli_fetch_assoc($categories)) {
	      $cat_id = $row['cat_id'];
	      $cat_title = $row['cat_title'];
	      echo "<tr>";
	      echo "<td>{$cat_id}</td>";
	      echo "<td>{$cat_title}</td>";
	      echo "</tr>";
		  }   
	  }
	}


	// ADMIN REDIRECT TO ADD, EDIT ARTICLES
	function newsArticleAddEdit() {
		global $connection;
	    if (isset($_GET['source'])) {
	     $source = $_GET['source'];
	    } else {
	      $source = "";
	    }

	    switch ($source) {

	      case 'add_article':
	      include "add_article.php";
	      break;              

	      case 'edit_article':
	      include "edit_article.php";
	      break;
	      
	      default:
	        include "view_articles.php";
	        break;

	    }

	}

		// ADMIN REDIRECT TO ADD, EDIT TIMELINE
	function timelineAddEdit() {
		global $connection;
	    if (isset($_GET['source'])) {
	     $source = $_GET['source'];
	    } else {
	      $source = "";
	    }

	    switch ($source) {

	      case 'addTo_timeline':
	      include "addTo_timeline.php";
	      break;              

	      case 'edit_timeline':
	      include "edit_timeline.php";
	      break;
	      
	      default:
	        include "view_timeline.php";
	        break;

	    }

	}



 ?>