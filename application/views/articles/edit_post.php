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
    <a href='<?php echo site_url('articles');?>'>文章列表</a>
    -
    <a href='<?php echo site_url('articles/add');?>'>新增文章</a>
    -
    <a href='<?php echo site_url('platform/logout');?>'>登出</a>
    <?php
    }else{?>
    -
    <a href='<?php echo site_url('platform/login');?>'>登入</a>
    -
    <a href='<?php echo site_url('platform/register');?>'>註冊</a>
    <?php } ?>
    <hr/>
    <?php if($has_login) {?>
    修改成功!
    <?php }else{?>
    請登入
    <?php } ?>


  </body>
</html>