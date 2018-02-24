<?php  

	if(isset($_GET['a_id'])) {
		$getArticleId = $_GET['a_id'];	
	}


	$query = "SELECT * FROM articles WHERE article_id = {$getArticleId}";
	$articles_by_id = mysqli_query($connection, $query);
	$articles_check = mysqli_num_rows($articles_by_id);

	if ($articles_check > 0) {
		while($row = mysqli_fetch_assoc($articles_by_id)) {
		  $article_id = $row['article_id'];
		  $article_category_id = $row['article_category_id'];
		  $article_title = $row['article_title'];
		  $article_date = $row['article_date'];
		  $article_image = $row['article_image'];
		  $article_content = $row['article_content'];
		}
	}

	if(isset($_POST['edit_article'])){

		$article_title =  $_POST['article_title'];
		$article_category =  $_POST['article_category'];

		$article_image =  $_FILES['article_image']['name'];
		$article_image_temp =  $_FILES['article_image']['tmp_name'];

		$article_date =  date('Y-m-d', strtotime($_POST['article_date']));
		$article_content =  $_POST['article_content'];

		// move img from temporary location to images folder
		move_uploaded_file($article_image_temp, "../images/$article_image" );


		// handle empty image field when editing
		if(empty($article_image)) {
			$query = "SELECT * FROM articles WHERE article_id = {$getArticleId}";
			$select_image = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($select_image)) {
				$article_image = $row['article_image'];
			}
		}

		$query = "UPDATE articles SET ";
		$query .="article_title = '{$article_title}', ";
		$query .="article_category_id = '{$article_category}', ";
		$query .="article_image = '{$article_image}', ";
		$query .="article_date = '{$article_date}', ";
		$query .="article_content = '{$article_content}' ";
		$query .= "WHERE article_id = {$getArticleId} ";

		$edit_article_query = mysqli_query($connection, $query);

		echo "Article has been updated; click on View Articles to see changes.";

		// echo  $article_date;

		global $connection;
		if (!$edit_article_query) {
			die("QUERY FAILED ." . mysqli_error($connection));
		}
	}

?>


<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Article Title</label>
    <input type="text" name="article_title" class="form-control" value="<?php echo $article_title ?>">
	</div>

	<div class="form-group">
		<select name="article_category" id="">

			<?php 
				$query = "SELECT * FROM category";
				$select_category = mysqli_query($connection, $query);

				global $connection;
				if (!$select_category) {
					die("QUERY FAILED ." . mysqli_error($connection));
				}

				while($row = mysqli_fetch_assoc($select_category )) {
					echo $row;
					$cat_id = $row['cat_id'];
					$cat_title = $row['cat_title'];

					echo "<option value='$cat_title'>{$cat_title}</option>";					
				}
			?>
			
			</select>
	</div>

	<div class="form-group">
		<img src="../<?php echo $article_image; ?>" alt="article image" width="100">
		<input type="file" name="article_image" class="form-control">
	</div>

	<div class="form-group">
		<label for="article_date">Article Date</label>
    <input type="date" name="article_date" class="form-control value="<?php echo $article_date ?>" >
	</div>

	<div class="form-group">
		<label for="article_content">Article Content</label>
    <textarea name="article_content" class="form-control" id="" cols="30" rows="10"><?php echo $article_content ?></textarea>
	</div>
		
	<div class="form-group">
    <input type="submit" name="edit_article" class="btn btn-primary" value="Edit Article">
	</div>
	
</form>