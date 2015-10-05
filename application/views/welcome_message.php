<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to Blog</title>

		<style type="text/css">
			body > .header{
				position: relative;
				right: 500px;
				text-align: right;
			}
			body > .login{
				text-align: center;
			}
			body > .login > form > .login_acc{
				margin: 5px auto;
				display: inline-block;
			}
			body > .login > form > .login_acc > input{
				border: 1px solid;
				border-radius: 5px;
			}
			body > .login > form > .login_pas{
				margin: 5px auto;
			}
			body > .login > form > .login_pas > input{
				border: 1px solid;
				border-radius: 5px;
			}
			body > .login > form > button.login_submit{
				margin: auto 5px;

			}
			body > .login > form > button.register_bot{
				margin: auto 5px;
			}
			body > .register > form{
				text-align: center;
			}
			body > .register > form > .register_acc{
				margin: 5px auto;
				display: block;
				border: 1px solid;
				border-radius: 5px;
			}
			body > .register > form > .register_name{
				margin: 5px auto;
				display: block;
				border: 1px solid;
				border-radius: 5px;
			}
			body > .register > form > .register_pas{
				margin: 5px auto;
				display: block;
				border: 1px solid;
				border-radius: 5px;
			}
			body > .register > form > .register_repas{
				margin: 5px auto;
				display: block;
				border: 1px solid;
				border-radius: 5px;
			}
		</style>
		<script src="<?php echo base_url('js/jquery-1.11.3.min.js');?>" language="javascript" type="text/javascript" ></script>
		<script type="text/javascript">
			$(function(){
				var $register = $('.register').hide();

				$('.register_bot').click(function(){
					$register.show();
				});

				$('.register_reset').click(function(){
					$register.hide();
				});

				$()
			});
		</script>
	</head>
	<body>
		<div class='header'>
			<?php if($login === 'YES'){ ?>
			<a href="<?php echo site_url('books/book');?>">書本</a>
			<a href="<?php echo site_url('platform/logout');?>">登出</a>
			<?php } ?>
		</div>

		<div class='login'>
			<form action="<?php echo site_url('platform/login');?>" method='POST'>

				<div class='login_acc'>
					<input type='text' name='account' value='' placeholder='請輸入帳號:'>
				</div>

				<div class='login_pas'>
					<input type='password' name='password' value='' placeholder='請輸入密碼:'>
				</div>

				<button class='login_submit' type='submit'>登入</button>

				<button class='register_bot' type='button'>註冊</button>

			</form>
		</div>

		<div class='register'>
			<form action='<?php echo site_url('platform/register');?>' method='post'>

				<input class='register_acc' type='text' name='account' value='' placeholder='請輸入帳號'>
				<input class='register_name' type='text' name='name' value='' placeholder='請輸入姓名'>
				<input class='register_pas' type='password' name='password' value='' placeholder='請輸入密碼'>
				<input class='register_repas' type='password' name='repassword' value='' placeholder='再次確認密碼'>
				<button class='register_submit' type='submit'>註冊</button>
				<button class='register_reset' type='reset'>取消</button>
			</form>
		</div>
	</body>
</html>