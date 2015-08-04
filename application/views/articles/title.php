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
      background-color: rgba(255, 255, 250, 1);
      border-top: 1px solid rgba(228, 231, 239, 1);
      position: relative;
      top :40px;
      z-index: auto;
      border-collapse: collapse;
      margin: auto;
    }
    table .box{
      font-size: 12px;
      line-height: 20px;
      margin-bottom: 10px;
      width: 100%;

    }
    table a {
      text-decoration: none;
    }
    .bar{

    }
    .bar .t1,.t2,.t3{
      border-bottom: 1px solid rgba(228, 231, 239, 1);
      line-height: 30px;
      padding: 10px;
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

  <table class='box'>

    <!-- <th>Title</th><th>Author</th><th>time</th> -->

    <?php foreach ($articles as $article) { ?>
    <tr class='bar'>

    <!-- <td><b><?php echo $article->id ;?></b></td> -->
    <td class='t1'><a href='<?php echo  site_url('articles/detail/'.$article->id)?>'><?php echo $article->title ?></a></td>
    <td class='t2'><?php echo $article->name ;?></td>
    <td class='t3'><?php echo $article->time ;?></td>
    </tr>
  <?php } ?>
  </table>





</body>
</html>