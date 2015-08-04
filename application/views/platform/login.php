<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Blog</title>
    <link rel=stylesheet type="text/css" href= 'http://crazyms.com/blog/resources/index.css'>
    <style type="text/css">

    html body .login{
      position: relative;
      top:35px;
      margin: 0 auto;
      text-align: center;
    }
    html body form label{
      padding-top: 10px;
      padding-bottom: 5px;
      display: block;
    }
    html body form input{


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

    <div class='login'>
      <form action='<?php echo site_url('platform/login_post');?>' method="POST">
          <label for='account' >帳號</label>
          <input type='text' name='account' value='')>
          <label for='password' >密碼</label>
          <input type='password' name='password' value=''>
          <p><input type='submit' value='登入'></p>
      </form>
    </div>
  </body>
</html>