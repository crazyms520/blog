<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>登入訊息</title>


  </head>
  <body>
    <?php include APPPATH.'views/header.php' ;?>
    <?php echo $message; ?>
    <p>3秒後轉回首頁！</p>
    <?php $url = site_url('welcome'); ?>
    <?php header("Refresh:3 ;url=$url"); ?>


  </body>
</html>