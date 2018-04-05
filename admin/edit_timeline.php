<?php  

	if(isset($_GET['t_id'])) {
		$getTimelineId = $_GET['t_id'];	
	}


	$query = "SELECT * FROM summit_series_timeline WHERE ss_timeline_id = {$getTimelineId}";
	$tl_by_id = mysqli_query($connection, $query);
	$tl_check = mysqli_num_rows($tl_by_id);

	if ($tl_check > 0) {
		while($row = mysqli_fetch_assoc($tl_by_id)) {
		  $tl_id = $row['ss_timeline_id'];
		  $tl_title = $row['ss_timeline_title'];
		  $tl_image = $row['ss_timeline_img'];
		  $tl_content = $row['ss_timeline_content'];
		}
	}

	if(isset($_POST['edit_timeline'])){

		$tl_title =  $_POST['tl_title'];

		$tl_image =  $_FILES['tl_image']['name'];
		$tl_image_temp =  $_FILES['tl_image']['tmp_name'];

		$tl_content =  $_POST['tl_content'];

		// move img from temporary location to images folder
		move_uploaded_file($tl_image_temp, "../images/$tl_image" );

		$tl_title = str_replace("'", "''", $tl_title);
		$tl_content = str_replace("'", "''", $tl_content);


		// handle empty image field when editing
		if(empty($tl_image)) {
			$query = "SELECT * FROM summit_series_timeline WHERE ss_timeline_id = {$getTimelineId}";
			$select_image = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($select_image)) {
				$tl_image = $row['ss_timeline_img'];
			}
		}

		$query = "UPDATE summit_series_timeline SET ";
		$query .="ss_timeline_title = '{$tl_title}', ";
		$query .="ss_timeline_img = '{$tl_image}', ";
		$query .="ss_timeline_content = '{$tl_content}' ";
		$query .= "WHERE ss_timeline_id = {$getTimelineId} ";

		$edit_timeline_query = mysqli_query($connection, $query);

		echo "<h2 style='color:red'>Article has been updated; click on VIEW TIMELINE to see changes.</h2>";

		global $connection;
		if (!$edit_timeline_query) {
			die("QUERY FAILED ." . mysqli_error($connection));
		}
	}

?>

<h2>SUMMIT SERIES TIMELINE</h2>
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="tl_title">Timeline Title</label>
    <input type="text" name="tl_title" class="form-control" value="<?php echo $tl_title ?>">
	</div>


	<div class="form-group">
		<img src="../<?php echo $tl_image; ?>" alt="Timelineimage" width="100">
		<input type="file" name="tl_image" class="form-control">
	</div>


	<div class="form-group">
		<label for="tl_content">Timeline Content</label>
    <textarea name="tl_content" class="form-control" id="" cols="30" rows="30"><?php echo $tl_content ?></textarea>
	</div>
		
	<div class="form-group">
    <input type="submit" name="edit_timeline" class="btn btn-primary" value="Edit Timeline">
	</div>
	
</form>