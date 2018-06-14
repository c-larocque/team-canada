

<?php  
	if (isset($_POST['create_timeline'])) {
		$tl_title =  $_POST['timeline_title'];

		$tl_image =  $_FILES['timeline_image']['name'];
		$tl_image_temp =  $_FILES['timeline_image']['tmp_name'];

		$tl_content =  $_POST['timeline_content'];

		// move img from temporary location to images folder
		move_uploaded_file($tl_image_temp, "../images/timeline/$tl_image" );

		$tl_title = str_replace("'", "''", $tl_title);
    $tl_content = str_replace("'", "''", $tl_content);

		$query = "INSERT INTO current_events_timeline(ce_timeline_title, ce_timeline_img, ce_timeline_content) ";

		$query .= "VALUES('{$tl_title}', '{$tl_image}', '{$tl_content}' ) ";

		$create_tl_query = mysqli_query($connection, $query);

		echo '<h2 style="color:red">DONE. Please, click on VIEW TIMELINE to see the new entry.</h2>';
		echo "<br>";


		global $connection;
		if (!$create_tl_query) {
			die("QUERY FAILED ." . mysqli_error($connection));
		}
	}

?>





<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="timeline_title">Timeline Title</label>
    <input type="text" name="timeline_title" class="form-control">
	</div>

	<div class="form-group">
		<label for="timeline_image">Timeline Image</label>
    <input type="file" name="timeline_image" class="form-control">
	</div>

	<div class="form-group">
		<label for="timeline_content">Timeline Content</label>
    <textarea name="timeline_content" class="form-control" id="" cols="30" rows="30"></textarea>
	</div>
		
	<div class="form-group">
    <input type="submit" name="create_timeline" class="btn btn-primary" value="Add To Timeline">
	</div>
	
</form>