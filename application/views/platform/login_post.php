<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href='<?php echo site_url('')?>'>首頁</a>
    <?php
    if($has_login){?>
      -
      <a href='<?php echo site_url('platform/logout');?>'>登出</a>
    <?php
    }else{?>
      -
      <a href='<?php echo site_url('platform/login');?>'>登入</a>
    <?php
    }
    ?>
    <hr/>

      <?php
        echo $message;
      ?>

  </body>
</html>