<?php 

	// MySQL injection protection
	function escape($string) {
  global $connection;
  $escapedString = mysqli_real_escape_string($connection, trim($string));
  return stripslashes($escapedString);
	}
	// ----- end function ----- //


	// Display news category from Database
	function displayCategory() {
		global $connection;
	  $query = "SELECT * FROM category";
	  $categories = mysqli_query($connection, $query);
	  $categories_check = mysqli_num_rows($categories);

	  if ($categories_check > 0) {
	    while($row = mysqli_fetch_assoc($categories)) {
	      $cat_title = $row['cat_title'];
	      echo "<li><a href='news-page.php?category={$cat_title}'>{$cat_title}</a></li>";
	    }   
	  }	
	}
 	// ----- end function ----- //


	// Display and Sort News articles
	function articlesByCategory() {
		global $connection;
	    if(isset($_GET['category'])){
	      $category = mysqli_real_escape_string($connection, $_GET['category']);
	      $query = "SELECT * FROM articles WHERE article_category_id='$category'";
	    } else {
	      $query = "SELECT * FROM articles";
	    	}

	    $articles = mysqli_query($connection, $query);

	    $articles_check = mysqli_num_rows($articles);

	    if ($articles_check > 0) {
	      while($row = mysqli_fetch_assoc($articles)) {
	        $article_title = escape($row['article_title']);
	        $article_image = escape($row['article_image']);
	        $article_date = escape($row['article_date']);
	        $article_content = escape($row['article_content']);
	        $article_content = substr($article_content, 0, 400)."...";

      ?>

      <section class="row" id="relatedNews">
        <section class="row news large-10 large-push-1 columns">
          <div class="small-12 medium-6 large-4 columns">
            <?php echo"<img src='images/{$article_image}' alt='News Image'>";?>
          </div>
          <div class="small-12 medium-6 large-8 columns">
            <?php
            echo "<h3>{$article_title}</h3>";
            echo "<h4>{$article_date}</h4>";
            echo "<p>{$article_content}</p>";
            echo "<a href='#' class='readMore'>READ MORE</a>";
            echo "<br>";
            echo "<br>";
          ?>
          </div>
        </section>
      </section>
        <?php    
        }   
      }
		}
		// ----- end function ----- //      


 ?>