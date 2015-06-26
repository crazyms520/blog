<!doctype html>
<html>
	<head>
		<title>Login</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<?php
			include APPPATH . 'views/header.php'
		?>

		<?php
		if($has_login) {?>
		目前是<b>登入狀態</b>。
		<?php }else{?>
		目前是<b>未登入狀態</b>
		<?php
		}?>
	</body>
</html>