<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>註冊</title>


  </head>
  <body>
    <?php include APPPATH.'views/header.php'; ?>
    <form action='<?php echo site_url('platform/register_post');?>' method='POST'>
    <p><label for='nick' >暱稱</label>
    <input type='text' name='nick' value=''></p>
    <p><label for='account' >帳號</label>
    <input type='text' name='account' value=''></p>
    <p><label for='password' >密碼</label>
    <input type='password' name='password' value=''></p>
    <p><label for='repassword' >確認密碼<label>
    <input type='password' name='repassword' value=''></p>
    <p><input type='submit' value='註冊'></p>

    </form>
  </body>
</html>