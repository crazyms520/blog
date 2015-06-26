<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <?php
     include APPPATH . 'views/header.php'
    ?>

    <?php if($has_login) {?>
    刪除成功!
    <?php }else{?>
    請登入
    <?php } ?>


  </body>
</html>