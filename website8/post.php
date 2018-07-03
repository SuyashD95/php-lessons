<?php
	require_once 'config/config.php';
	require_once 'config/db.php';

	// Get Id
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM post WHERE id='.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	// var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>
<?php include_once 'inc/header.php'; ?>
	<div class="container">
		<a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
		<h1><?php echo $post['title']; ?></h1>
		<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
		<p><?php echo $post['body']; ?></p>
	</div>
<?php include_once 'inc/footer.php'; ?>