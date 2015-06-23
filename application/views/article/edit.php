<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Test edit</title>

  </head>
  <body>
    <a href='<?php echo site_url ();?>'>首頁</a>

    <a href='<?php echo site_url ('articles');?>'>文章列表</a>

    <a href='<?php echo site_url ('articles/add');?>'>新增文章</a>

    <a href='<?php echo site_url ('articles/update');?>'>修改</a>
    <hr/>

    <form action='<?php echo site_url ('articles/edit_post/'.$articles->id);?>' method='post'>
      <input type='text' name='title' value='<?php echo $articles->title;?>'>
      <input type='submit' value='修改'>
    </form>


  </body>
</html>
