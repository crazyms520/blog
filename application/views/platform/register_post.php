<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>註冊訊息</title>

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