<?php
	require 'config/config.php';
	require 'config/db.php';

	// Check For Submit
	if (isset($_POST['delete'])) {
		// Get Form Data
		$delete_id = mysqli_real_escape_string($conn, $_POST["delete_id"]);

		$query = "DELETE FROM post WHERE id = $delete_id";

		if (mysqli_query($conn, $query)) {
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '.mysqli_error($conn);
		}
	}

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
		<hr>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="hidden" name="delete_id" value="<?php echo post['id']; ?>">
			<input type="submit" name="delete" value="Delete" class="btn btn-danger">
		</form>

		<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>
	</div>
<?php include_once 'inc/footer.php'; ?>