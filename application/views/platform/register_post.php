<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>註冊訊息</title>
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


    <?php if($message === '註冊成功'){
      echo $message ."<br>"; ?>
      <p>3秒後轉回登入頁面！</p>
      <?php $url = site_url('platform/login');
      header("Refresh:3 ;url=$url");
    } else {
      echo $message ."<br>"; ?>
      <p>3秒後轉回註冊頁面！</p>
      <?php $url = site_url('platform/register');
            header("Refresh:3 ;url=$url");
    } ?>
  </body>
</html>