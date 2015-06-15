<!doctype html>
<html>
	<head>
		<title>Ci Post Test</title>
		<meta charset="utf-8">
	</head>

	<body>
		<form action="<?php echo site_url('welcome/post')?>" method="post">
		<input type="text" name="number">
		<input type="submit" value="送出">
	</form>
	</body>
</html>