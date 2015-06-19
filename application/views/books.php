<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Blog</title>
  </head>
  <body>
    <a href='<?php echo site_url('')?>'>首頁</a>
    <a href='<?php echo site_url('books')?>'>書本列表</a>
    <a href='<?php echo site_url('books/add')?>'>新增書本</a>
    <hr>
    <?php foreach ($name as $titles) {
      # code...
      echo $titles."<br>";
    }
    ?>
  </body>
</html>