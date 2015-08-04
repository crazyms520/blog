<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>登入訊息</title>
    <style type="text/css">
      html body {
        background-color: rgba(227, 227, 227, 1);
        text-align: center;
        color:red;
        font-size: 20px;
      }
    </style>

  </head>
  <body>
    <?php echo $message; ?>
    <p>3秒後轉回首頁！</p>
    <?php $url = site_url('welcome'); ?>
    <?php header("Refresh:3 ;url=$url"); ?>


  </body>
</html>