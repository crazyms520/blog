<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Blog</title>

	<style type="text/css">
		.login{
			text-align: center;
		}
		.login_acc{
			margin: 5px auto;
			display: inline-block;
		}
		.login_acc > input{
			border: 1px solid;
			border-radius: 5px;
		}
		.login_pas{
			margin: 5px auto;
		}
		.login_pas > input{
			border: 1px solid;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<form action="<?php echo site_url('platform/login');?>" method='POST'>
	<div class='login'>
		<div class='login_acc'>
			<input type='text' name='account' value='' placeholder='請輸入帳號:'>
		</div>
		<div class='login_pas'>
			<input type='password' name='password' value='' placeholder='請輸入密碼:'>
		</div>

		<button class='login_submit' type='submit'>登入</button>

		<button class='login_reset' type='reset'>取消</button>

	</div>

</body>
</html>