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

    <?php if ($has_login){?>
    <table border='1'>
        <tr>
          <th>ID</th><th>Title</th><th>Edit</th><th>Delete</th>
        </tr>
      <?php foreach ($articles as $article) {?>
      <tr>
          <td><b><?php echo $article->id ; ?></b></td><td><b><?php echo $article->title ; ?></b></td><td><b><a href='<?php echo site_url('articles/edit/'.$article->id)?>'>修改</a></b></td><td><b><a href='<?php echo site_url('articles/delete/'.$article->id)?>'>刪除</a></b></td>
      </tr>
      <?php } ?>
      <?php } ?>
    </table>
  </body>
</html>