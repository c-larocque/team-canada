<!-- DELETE articles QUERY -->
<?php  

if (isset($_GET['delete'])) {

	$deleted_timeline = $_GET['delete'];
	$query = "DELETE FROM current_events_timeline WHERE ce_timeline_id = {$deleted_timeline}";
	$delete_query = mysqli_query($connection, $query);
}


?>

<!-- Display articles -->
<table class="table table-bordered table-hover">
  <h2>CURRENT EVENTS TIMELINE</h2>
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
$query = "SELECT * FROM current_events_timeline";
$cetimeline = mysqli_query($connection, $query);
$cetimeline_check = mysqli_num_rows($cetimeline);

if ($cetimeline_check > 0) {
while($row = mysqli_fetch_assoc($cetimeline)) {
  $cetimeline_id = $row['ce_timeline_id'];
  $cetimeline_title = $row['ce_timeline_title'];
  $cetimeline_img = $row['ce_timeline_img'];
  $cetimeline_content = $row['ce_timeline_content'];
  echo "<tr>";
  echo "<td>{$cetimeline_id}</td>";
  echo "<td>{$cetimeline_title}</td>";
  echo "<td><img width='100' src='../images/timeline/$cetimeline_img' alt='Timeline Image'></td>";
  echo "<td>{$cetimeline_content}</td>";
  echo "<td><a href='currentEventsTimeline.php?source=edit_CEtimeline&cet_id={$cetimeline_id}'>Edit</a></td>";
  echo "<td><a href='currentEventsTimeline.php?delete={$cetimeline_id}'>Delete</a></td>";
  echo "</tr>";
    }   
  }
 ?>

  </tbody>
</table>




