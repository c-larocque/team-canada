

<?php  
	if (isset($_POST['create_article'])) {
		$article_title =  $_POST['article_title'];
		$article_category =  $_POST['article_category'];

		$article_image =  $_FILES['article_image']['name'];
		$article_image_temp =  $_FILES['article_image']['tmp_name'];

		$article_date =  date('Y-m-d', strtotime($_POST['article_date']));
		$article_content =  $_POST['article_content'];

		// move img from temporary location to images folder
		move_uploaded_file($article_image_temp, "../images/$article_image" );



		$query = "INSERT INTO articles(article_category_id, article_title, article_date, article_image, article_content) ";

		$query .= "VALUES('{$article_category}', '{$article_title}', '{$article_date}', '{$article_image}', '{$article_content}' ) ";

		$create_article_query = mysqli_query($connection, $query);

		echo 'DONE. Please, click on View Articles to see the new article.';

		// echo  $article_date;

		global $connection;
		if (!$create_article_query) {
			die("QUERY FAILED ." . mysqli_error($connection));
		}
	}

?>





<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Article Title</label>
    <input type="text" name="article_title" class="form-control">
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
		<label for="artcile_image">Article Image</label>
    <input type="file" name="article_image" class="form-control">
	</div>

	<div class="form-group">
		<label for="artcile_date">Article Date</label>
    <input type="date" name="article_date" class="form-control">
	</div>

	<div class="form-group">
		<label for="artcile_content">Article Content</label>
    <textarea name="article_content" class="form-control" id="" cols="30" rows="10"></textarea>
	</div>
		
	<div class="form-group">
    <input type="submit" name="create_article" class="btn btn-primary" value="Publish Article">
	</div>
	
</form>