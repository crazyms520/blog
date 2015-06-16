<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href="<?php echo site_url('welcome')?>">首頁</a>
    <a href="<?php echo site_url('welcome/login')?>">登入</a>
    <hr/>

    <form action="<?php echo site_url('welcome/post')?>" method="post">
    <input type='text' name='user' value=''>
    <br>
    <input type='password' name='password' value=''>
    <br>
    <input type='submit' value='登入'>
    </form>
    <?php ?>

  </body>
</html>