<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>新增文章</title>


</head>
<body>
  <?php include APPPATH.'views/header.php'; ?>
  <?php
  if ($login){
      echo $message ;
      $url = site_url('articles');
      header("Refresh:3 ; url=$url");
  } else {
      echo $message ;
      $url = site_url('welcome');
      header("Refresh:3 ; url=$url");
    }
  ?>



</body>
</html>