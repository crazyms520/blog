<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to Blog</title>
		<link rel=stylesheet type="text/css" href="http://crazyms.com/blog/resources/index.css">
		<style type="text/css">
			html body .message{
				position: relative;
				top:35px;
				width: 100%;
			}
			html body .message .content{
				text-align: center;
			}
			html body .message .count{
				padding-right: 5px;
				text-align: right;
			}
		</style>
	</head>
	<body>
			<div class='header'>
				<div class='ul'>
					<div class='li'>
				<?php include APPPATH.'views/header.php';?>
					</div>
				</div>
			</div>
			<div class='message'>
				<div class='count'>
					瀏覽人數:<?php echo $guest_id;?>
				</div>
				<div class='content'>
					<?php echo $message . '<br />';?>
				</div>
			</div>

	</body>
</html>