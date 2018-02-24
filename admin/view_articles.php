<!-- DELETE articles QUERY -->
<?php  

if (isset($_GET['delete'])) {

	$deleted_article = $_GET['delete'];
	$query = "DELETE FROM articles WHERE article_id = {$deleted_article}";
	$delete_query = mysqli_query($connection, $query);
}


?>

<!-- Display articles -->
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>Article Category</th>
      <th>Article Title</th>
      <th>Article Date</th>
      <th>Article Image</th>
      <th>Article Content</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>

<?php // FIND ARTICLES FROM DATABASE 
$query = "SELECT * FROM articles";
$articles = mysqli_query($connection, $query);
$articles_check = mysqli_num_rows($articles);

if ($articles_check > 0) {
while($row = mysqli_fetch_assoc($articles)) {
  $article_id = $row['article_id'];
  $article_category_id = $row['article_category_id'];
  $article_title = $row['article_title'];
  $article_date = $row['article_date'];
  $article_image = $row['article_image'];
  $article_content = $row['article_content'];
  echo "<tr>";
  echo "<td>{$article_id}</td>";
  echo "<td>{$article_category_id}</td>";
  echo "<td>{$article_title}</td>";
  echo "<td>{$article_date}</td>";
  echo "<td><img width='100' src='../images/$article_image' alt='News Image'></td>";
  echo "<td>{$article_content}</td>";
  echo "<td><a href='articles.php?source=edit_article&a_id={$article_id}'>Edit</a></td>";
  echo "<td><a href='articles.php?delete={$article_id}'>Delete</a></td>";
  echo "</tr>";
    }   
  }
 ?>

  </tbody>
</table>




