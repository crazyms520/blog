<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>新增文章</title>


</head>
<body>
  <?php include APPPATH.'views/header.php'; ?>

  <form action='<?php echo site_url('articles/add_post')?>' method='POST'>
    <input type='text' name='title' value=''>
    <input type='submit' value='新增'>

  </form>




</body>
</html>