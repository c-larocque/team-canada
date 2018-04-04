<?php 


	// MySQL injection protection
	function escape($string) {
  global $connection;
  $escapedString = mysqli_real_escape_string($connection, trim($string));
  return stripslashes($escapedString);
	}
	// ----- end function ----- //




	// Display single news in Home Page 
	function singleNewsHomePage() {
		global $connection;
		$query = "SELECT * FROM articles ORDER BY article_id DESC LIMIT 1;";
      $articles = mysqli_query($connection, $query);

      $articles_check = mysqli_num_rows($articles);

      if ($articles_check > 0) {
        while($row = mysqli_fetch_assoc($articles)) {
          $article_title = escape($row['article_title']);
          $article_image = escape($row['article_image']);
          $article_content = escape($row['article_content']);
      ?>

       <div id="newsContent">
      
            <?php echo"<img src='images/{$article_image}' alt='News Image' width='290' height='218' id='newsImg'>";?>
            <?php
            echo "<h4>{$article_title}</h4>";
            echo "<p>{$article_content}</p>";
          ?>
          </div>
        <?php    
        }   
      }
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
	      echo "<a href='news-page.php?category={$cat_title}' id='backBut' style='margin-left: 10px;'>{$cat_title}</a>";
	    }   
	  }	
	}
 	// ----- end function ----- //

 	// Display 3 of the most updated news in Media Page
 	function mediaPageNews() {
 		global $connection;
 		$query = "SELECT * FROM articles ORDER BY article_id DESC LIMIT 3;";
      $articles = mysqli_query($connection, $query);

      $articles_check = mysqli_num_rows($articles);

      if ($articles_check > 0) {
        while($row = mysqli_fetch_assoc($articles)) {
          $article_title = escape($row['article_title']);
          $article_image = escape($row['article_image']);
          $article_date = escape($row['article_date']);
          $article_content = escape($row['article_content']);
      ?>

      <section class="row news large-10 large-push-1 columns">
      <div class="small-12 medium-6 large-4 columns">
      <?php echo"<img src='images/{$article_image}' alt='News Image'>";?>
      </div>
       <div class="small-12 medium-6 large-8 columns">
      
    
            <?php
            echo "<h3>{$article_title}</h3>";
            echo "<h4>{$article_date}</h4>";
            echo "<p>{$article_content}</p>";
          ?>
          </div>
        </section>
        <?php    
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
	      $query = "SELECT * FROM articles ORDER BY article_id DESC";
	    	}

	    $articles = mysqli_query($connection, $query);

	    $articles_check = mysqli_num_rows($articles);

	    if ($articles_check > 0) {
	      while($row = mysqli_fetch_assoc($articles)) {
	        $article_title = escape($row['article_title']);
	        $article_image = escape($row['article_image']);
	        $article_date = escape($row['article_date']);
	        $article_content = escape($row['article_content']);
	        // $article_content = substr($article_content, 0, 400)."...";

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
            // echo "<a href='#' class='readMore'>READ MORE</a>";
            // echo "<br>";
            // echo "<br>";
          ?>
          </div>
        </section>
      </section>
        <?php    
        }   
      }
		}
		// ----- end function ----- //    

	// Display Summer Series Gallery images SMALL SCREEN
	function ssGallery_small() {
		global $connection;
	    $query = "SELECT * FROM summit_series";
	    $ssImages = mysqli_query($connection, $query);
	    $ssImages_check = mysqli_num_rows($ssImages);

	    if ($ssImages_check > 0) {
	      while($row = mysqli_fetch_assoc($ssImages)) {
	        $ss_image = escape($row['ss_image']);

	    ?>

	    <div class="row ssGallery">
	      <div class="small-12 columns end">
	        <?php echo"<img src='images/{$ss_image}' alt='SS Img{$ss_id}'>";?>
	      </div> 
	    </div>              
	  <?php  
	      }   
	    } 
		}
		// ----- end function ----- // 


			// Display Press Conference Gallery images SMALL SCREEN
			function pcGallery_small() {
				global $connection;
		      $query = "SELECT * FROM press_conf";
		      $pcImages = mysqli_query($connection, $query);
		      $pcImages_check = mysqli_num_rows($pcImages);

		      if ($pcImages_check > 0) {
		        while($row = mysqli_fetch_assoc($pcImages)) {
		          $pc_image = escape($row['pc_image']);

		      ?>

		      <div class="row ssGallery">
		        <div class="small-12 columns">
		          <?php echo"<img src='images/{$pc_image}' alt='PC Img{$pc_id}'>";?>
		        </div> 
		      </div>              
		    <?php  
		        }   
		      }  
				}
				// ----- end function ----- // 


			// Display Legend Legacy Gallery images SMALL SCREEN
			function llGallery_small() {
				global $connection;

	        $query = "SELECT * FROM legend_legacy";
	        $llImages = mysqli_query($connection, $query);
	        $llImages_check = mysqli_num_rows($llImages);

	        if ($llImages_check > 0) {
	          while($row = mysqli_fetch_assoc($llImages)) {
	            $ll_image = escape($row['ll_image']);

	        ?>

	        <div class="row ssGallery">
	          <div class="small-12 columns">
	            <?php echo"<img src='images/{$ll_image}' alt='PC Img{$ll_id}'>";?>
	          </div> 
	        </div>              
	      <?php  
	          }   
	        } 
				}
				// ----- end function ----- // 

					// Display Summer Series Gallery images 
				function ssGallery() {
					global $connection;

					  $query = "SELECT * FROM summit_series";
            $ssImages = mysqli_query($connection, $query);
            $ssImages_check = mysqli_num_rows($ssImages);

            if ($ssImages_check > 0) {
              while($row = mysqli_fetch_assoc($ssImages)) {
                $ss_image = escape($row['ss_image']);

            ?>

            <div class="medium-3 large-3 columns end">
							<?php echo"<img src='images/{$ss_image}' alt='SS Image'>";?>
          </div>
          <?php  
              }   
            }
					}
		// ----- end function ----- // 


			// Display Press Conference Gallery images 
			function pcGallery() {
				global $connection;

			    $query = "SELECT * FROM press_conf";
          $pcImages = mysqli_query($connection, $query);
          $pcImages_check = mysqli_num_rows($pcImages);

          if ($pcImages_check > 0) {
            while($row = mysqli_fetch_assoc($pcImages)) {
              $pc_image = escape($row['pc_image']);

          ?>

          <div class="medium-3 large-3 columns end">
          	<?php echo"<img src='images/{$pc_image}' alt='PC Image'>";?>
        </div>
        <?php  
            }   
          } 
				}
				// ----- end function ----- // 


			// Display Legend Legacy Gallery images 
			function llGallery() {
				global $connection;

          $query = "SELECT * FROM legend_legacy";
          $llImages = mysqli_query($connection, $query);
          $llImages_check = mysqli_num_rows($llImages);

          if ($llImages_check > 0) {
            while($row = mysqli_fetch_assoc($llImages)) {
              $ll_image = escape($row['ll_image']);

          ?>

          <div class="medium-3 large-3 columns end">
         		<?php echo"<img src='images/{$ll_image}' alt='LL Image'>";?>
        </div>
        <?php  
            }   
          } 
				}
				// ----- end function ----- // 

	// Display Summer Series Timeline
	function ssTimeline() {
		global $connection;

    $query = "SELECT * FROM summit_series_timeline";
      
    $ssTimeline = mysqli_query($connection, $query);

    $ssTimeline_check = mysqli_num_rows($ssTimeline);

    if ($ssTimeline_check > 0) {
      while($row = mysqli_fetch_assoc($ssTimeline)) {
        $ssTimeline_title = escape($row['ss_timeline_title']);
        $ssTimeline_img = escape($row['ss_timeline_img']);
        $ssTimeline_content = escape($row['ss_timeline_content']);

	 ?>
	<div class="ssTimelineSlides">
    <img src="images/timeline/<?php echo "{$ssTimeline_img}"; ?>" alt="Before">
    <h2><?php echo "{$ssTimeline_title}"; ?></h2>
    <p><?php echo "<p>{$ssTimeline_content}</p>"; ?></p>
  </div>

	    <?php    
	      }   
	    }
		}
		// ----- end function ----- //   


			// Display Current Events Timeline
	function ceTimeline() {
		global $connection;

    $query = "SELECT * FROM current_events_timeline";
      
    $ceTimeline = mysqli_query($connection, $query);

    $ceTimeline_check = mysqli_num_rows($ceTimeline);

    if ($ceTimeline_check > 0) {
      while($row = mysqli_fetch_assoc($ceTimeline)) {
        $ceTimeline_title = escape($row['ce_timeline_title']);
        $ceTimeline_img = escape($row['ce_timeline_img']);
        $ceTimeline_content = escape($row['ce_timeline_content']);

	 ?>
	<div class="ssTimelineSlides">
    <img src="images/timeline/<?php echo "{$ceTimeline_img}"; ?>" alt="Before">
    <h2><?php echo "{$ceTimeline_title}"; ?></h2>
    <p><?php echo "<p>{$ceTimeline_content}</p>"; ?></p>
  </div>

	    <?php    
	      }   
	    }
		}
		// ----- end function ----- //  




 ?>