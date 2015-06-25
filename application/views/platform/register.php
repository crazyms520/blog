<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href='<?php echo site_url('')?>'>首頁</a>
    -
    <a href='<?php echo site_url('platform/login');?>'>登入</a>
    -
    <a href='<?php echo site_url('platform/register');?>'>註冊</a>
    <hr/>

    <form action='<?php echo site_url('platform/register_post')?>' method='post'>
      暱稱:
      <input type='text' name='nick' value='' />
      <br/>
      <br/>
      帳號:
      <input type='text' name='account' value=''/>
      <br/>
      <br/>
      密碼:
      <input type='password' name='password' value=''/>
      <br/>
      <br/>
      <input type='submit' value='註冊'/>
    </form>

  </body>
</html>