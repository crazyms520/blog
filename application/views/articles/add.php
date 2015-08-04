<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>新增文章</title>
  <link rel="stylesheet" type="text/css" href="http://crazyms.com/blog/resources/index.css">
  <style type="text/css">
   html body .box{
      height: 250px;
    }
    html body .box form{
      position: relative;
      top:35px;
    }
    html body .box form input{
      margin: 0 auto;
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

  <div class='box'>
  <form action='<?php echo site_url('articles/add_post')?>' method='POST'>
    <input type='text' name='title' value=''>
    <input tupe='text' name='content' value=''>
    <input type='submit' value='新增'>
  </form>
  </div>
</div>





</body>
</html>