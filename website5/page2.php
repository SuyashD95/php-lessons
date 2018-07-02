<?php 
	setcookie('username', 'Frank', time() + (86300 * 30)); // 1 Day

	// Delete Cookie
	// setcookie('username', 'Frank', time() - 3600);
	
	if(count($_COOKIE) > 0) {
		echo 'There are '.count($_COOKIE).' cookies saved<br>'; 
	} else {
		echo 'There are no cookies saved<br>';
	}

	if(isset($_COOKIE['username'])) {
		echo 'User '.$_COOKIE['username'].' is set<br>';
	}  else {
		echo 'User is not set';
	}
?>