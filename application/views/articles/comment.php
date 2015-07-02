<!doctype html>
<html>
  <head>
    <title>Comment</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <?php
    include APPPATH . 'views/header.php'
    ?>

    <?php if($has_login){?>
      <p> 文章內容:</p>
      <p> 123木頭人</p>
      <p><textarea name='comment' cols='50' rows='5'>留言</textarea></P>


    <?php } ?>
  </body>
</html>