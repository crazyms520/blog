<!doctype html>
<html>
  <head>
    <title>Post</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href="<?php echo site_url('welcome')?>">首頁</a>
    <a href="<?php echo site_url('welcome/login')?>">登入</a>
    <hr/>
    <?php
      if($user=='user' && $password=='123'){
          echo "登入成功";
      }else{
          echo"登入失敗";
      }
    ?>
  </body>
</html>