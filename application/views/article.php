<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>文章列表</title>


</head>
<body>
  <?php include APPPATH.'views/header.php'; ?>
  <table border=1>
    <tr>
    <th>ID</th><th>Author</th><th>title</th><th>Edit</th><th>Delete</th>

  <?php foreach ($articles as $article) { ?>
    <tr>
    <td><b><?php echo $article->id ;?></b></td>
    <td><b><?php echo $article->name ;?></b></td>
    <td><b><?php echo $article->title ;?></b></td>
    <td><b><a href='<?php echo site_url('articles/edit/'.$article->id)?>'>修改</a></b></td>
    <td><b><a href='<?php echo site_url('articles/delete/'.$article->id)?>'>刪除</a></b></td>

  <?php } ?>




</body>
</html>