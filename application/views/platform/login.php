<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to Blog</title>


</head>
<body>

  <?php include APPPATH.'views/header.php'; ?>

  <form action='<?php echo site_url('platform/login_post');?>' method="POST">
    <p><label for='account' >帳號</label>
    <input type='text' name='account' value='')></p>
    <p><label for='password' >密碼</label>
    <input type='password' name='password' value=''></p>
    <input type='submit' value='登入'>
  </form>



</body>
</html>