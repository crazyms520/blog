<!doctype html>
<html>
<head>
  <title></title>
  <meta charset='utf-8'>
</head>
<body>
  <a href="<?php echo site_url('')?>">首頁</a>
  <a href='<?php echo site_url('articles')?>'>文章列表</a>
  <a href='<?php echo site_url('articles/add')?>'>新增文章</a>
  <a href='<?php echo site_url('book')?>'>書本列表</a>
  <a href='<?php echo site_url('book/book_add')?>'>新增書本</a>
  <hr/>

  <?php
    echo $title1."<br>".$title2."<br>".$title3;
  ?>

</body>
</html>
