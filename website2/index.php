<?php require_once 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sytem Info</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Server & File Info</h1>
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<h1>Client</h1>
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</body>
</html>