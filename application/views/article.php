<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>文章列表</title>
  <link rel="stylesheet" type="text/css" href= 'http://crazyms.com/blog/resources/index.css'>
  <style type="text/css">
    html body{
      text-align: center;
    }
    table{
      position:relative;
      top: 40px;
      margin: 0 auto;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class='header'>
    <div class='ul'>
      <div class='li'>
            <?php include APPPATH.'views/header.php'; ?>
      </div>
    </div>
  </div>
  <table border=1>
    <tr>
    <th>Title</th><th>Author</th><th>Edit</th><th>Delete</th>

  <?php foreach ($articles as $article) { ?>
    <tr>
    <!-- <td><b><?php echo $article->id ;?></b></td> -->
    <td><b><?php echo $article->title ;?></b></td>
    <td><b><?php echo $article->name ;?></b></td>
    <td><b><a href='<?php echo site_url('articles/edit/'.$article->id)?>'>修改</a></b></td>
    <td><b><a href='<?php echo site_url('articles/delete/'.$article->id)?>'>刪除</a></b></td>

  <?php } ?>




</body>
</html>