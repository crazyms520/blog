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
  <hr/>
  <?php
  foreach ($art as $key => $value) {
    # code...
    echo $value->title;
  }

  ?>
</body>
</html>
