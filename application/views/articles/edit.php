<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>文章列表</title>


</head>
<body>
  <?php include APPPATH.'views/header.php'; ?>

  <form action='<?php echo site_url('articles/edit_post/'.$article->id);?>' method='POST'>

    <input type='text' name='title' value=''>
    <input type='submit' value='修改'>
  </form>






</body>
</html>