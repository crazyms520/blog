<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>文章列表</title>


</head>
<body>
  <?php include APPPATH.'views/header.php'; ?>

  <?php foreach ($articles as $article) { ?>

  <a href='<?php echo site_url('articles/edit/'.$article->id)?>'>修改</a>
  <a href='<?php echo site_url('articles/delete/'.$article->id)?>'>刪除</a>

  <?php echo $article->title ;
        echo 'by'.$article->nick ;
  ?>

  <?php echo "<br>"; ?>
  <?php } ?>




</body>
</html>