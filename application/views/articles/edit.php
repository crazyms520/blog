<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <?php
      include APPPATH . "views/header.php"
    ?>

    <?php if ($has_login){?>
    <form action='<?php echo site_url('articles/edit_post/'.$article->id);?>' method='post'/>
      <input type='text' name='article' value='<?php echo $article->title?>'/>
      <input type='submit' value='修改'/>
    </form>
    <?php } ?>

  </body>
</html>