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

    <?php if($has_login){?>
    <form action='<?php echo site_url('articles/add_post');?>' method='post'>
      <input type='text' name='add_article' value='' />
      <input type='submit' value='新增' />
    </form>
    <?php } ?>
  </body>
</html>