<?php
	require_once 'config/config.php';
	require_once 'config/db.php';

	// Check For Submit
	if (isset($_POST['submit'])) {
		// Get Form Data
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$body = mysqli_real_escape_string($conn, $_POST['body']);
		$author = mysqli_real_escape_string($conn, $_POST['author']);

		$query = "INSERT INTO post(title, author, body) VALUES('$title', '$author', '$body')";

		if(mysqli_query($conn, $query)) {
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '.mysqli_error($conn);
		}
	}
?>
<?php include_once 'inc/header.php'; ?>
	<div class="container">
		<h1>Add Post</h1>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
<?php include_once 'inc/footer.php'; ?>
