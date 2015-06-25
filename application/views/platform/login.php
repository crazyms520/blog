<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href='<?php echo site_url('')?>'>首頁</a>
    <?php if($has_login){?>
    -
    <a href='<?php echo site_url('platform/logout');?>'>登出</a>
    <?php
      }else{?>
      -
    <a href='<?php echo site_url('platform/login');?>'>登入</a>
      <?php }?>
    <hr/>
    <form action='<?php echo site_url('platform/login_post');?>' method='post'>
      帳號:
      <input type='texe' name='account' value='' />
      <br/>
      <br/>
      密碼:
      <input type='password' name='password' value='' />
      <br/>
      <br/>
      <input type='submit' value='登入'>
    </form>
  </body>
</html>