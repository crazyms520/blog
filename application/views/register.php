<!doctype html>
<html>
  <head>
    <title>Register</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href="<?php echo site_url('')?>">首頁</a>
    <a href="<?php echo site_url('login')?>">登入</a>
    <hr/>
    <form action="<?php echo site_url('register/post2')?>">
    帳號：
    <input type='text' name='account' value=''>
    <br>
    姓名：
    <input type='text' name='name' value=''>
    <br>
    信箱：
    <input type='text' name='mail' value=''>
    <br>
    密碼：
    <input type='password' name='password' value=''>
    <br>
    <input type='submit' value='註冊'>

  </body>
</html>