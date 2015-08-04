<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>註冊</title>
    <link rel="stylesheet" type="text/css" href= 'http://crazyms.com/blog/resources/index.css'>
    <style type='text/css'>
      html body .box{
        position: relative;
        top: 35px;
        margin:0 auto;
        text-align: center;

      }
      html body form label{
        display: block;
        padding-top: 10px;
        padding-bottom: 5px;
      }
      html body form input{
        text-align: center;
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

    <div class='box'>
      <form action='<?php echo site_url('platform/register_post');?>' method='POST'>
        <label for='nick' >暱稱</label>
        <input type='text' name='nick' value=''>
        <label for='account' >帳號</label>
        <input type='text' name='account' value=''>
        <label for='password' >密碼</label>
        <input type='password' name='password' value=''>
        <label for='repassword' >確認密碼</label>
        <input type='password' name='repassword' value=''>
        <p><input type='submit' value='註冊'></p>
      </form>
    </div>
  </body>
</html>