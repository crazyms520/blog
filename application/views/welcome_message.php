<!doctype html>
<html>
	<head>
		<title>ci login</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<form action="<?php echo site_url('welcome/login')?>" method='post'>
		<input type='text' name='user' value=''>
		<input type='password' name='password' value=''>
		<input type='submit' value='登入'>
		</form>
	</body>
</html>