<?php
	if(isset($_GET['name'])) {
		# We use htmlentities function to prevent XSS attacks
		$name = htmlentities($_GET['name']);
		// echo $name;		
	}
/*	
	if(isset($_POST['name'])) {		
		# We use htmlentities function to prevent XSS attacks
		$name = htmlentities($_POST['name']);
		print_r($_POST);
		echo nl2br("\n$name");		
	}	
	
	if(isset($_REQUEST['name'])) {		
		# We use htmlentities function to prevent XSS attacks
		$name = htmlentities($_REQUEST['name']);
		// print_r($_REQUEST);
		echo $name;		
	}

	echo $_SERVER['QUERY_STRING'];
*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
</head>
<body>
	<form action="get_post.php" method="GET">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>
	<ul>
	 	<li><a href="get_post.php?name=Brad">Brad</a></li>
	 	<li><a href="get_post.php?name=Steve">Steve</a></li>
	</ul>
	<h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>