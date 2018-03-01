<!-- DELETE articles QUERY -->
<?php  

if (isset($_GET['delete'])) {

	$deleted_timeline = $_GET['delete'];
	$query = "DELETE FROM summit_series_timeline WHERE ss_timeline_id = {$deleted_timeline}";
	$delete_query = mysqli_query($connection, $query);
}


?>

<!-- Display articles -->
<table class="table table-bordered table-hover">
  <h2>SUMMIT SERIES TIMELINE</h2>
  <thead>
    <tr>
      <th>id</th>
      <th>Timeline Title</th>
      <th>Timeline Image</th>
      <th>Timeline Content</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>

<?php // FIND ARTICLES FROM DATABASE 
$query = "SELECT * FROM summit_series_timeline";
$timeline = mysqli_query($connection, $query);
$timeline_check = mysqli_num_rows($timeline);

if ($timeline_check > 0) {
while($row = mysqli_fetch_assoc($timeline)) {
  $timeline_id = $row['ss_timeline_id'];
  $timeline_title = $row['ss_timeline_title'];
  $timeline_img = $row['ss_timeline_img'];
  $timeline_content = $row['ss_timeline_content'];
  echo "<tr>";
  echo "<td>{$timeline_id}</td>";
  echo "<td>{$timeline_title}</td>";
  echo "<td><img width='100' src='../images/timeline/$timeline_img' alt='Timeline Image'></td>";
  echo "<td>{$timeline_content}</td>";
  echo "<td><a href='timeline.php?source=edit_timeline&t_id={$timeline_id}'>Edit</a></td>";
  echo "<td><a href='timeline.php?delete={$timeline_id}'>Delete</a></td>";
  echo "</tr>";
    }   
  }
 ?>

  </tbody>
</table>




