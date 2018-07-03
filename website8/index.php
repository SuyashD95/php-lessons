<?php
	require_once 'config/config.php';
	require_once 'config/db.php';

	// Create Query
	$query = 'SELECT * FROM post';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>
<?php include_once 'inc/header.php'; ?>
	<div class="container">
		<h1>Posts</h1>
		<?php foreach($posts as $post): ?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
				<p><?php echo $post['body']; ?></p>
				<a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
			</div>	
		<?php endforeach; ?>
	</div>
<?php include_once 'inc/footer.php'; ?>
