<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Test list</title>

  </head>
  <body>
    <a href='<?php echo site_url ();?>'>首頁</a>

    <a href='<?php echo site_url ('articles');?>'>文章列表</a>

    <a href='<?php echo site_url ('articles/add');?>'>新增文章</a>

    <a href='<?php echo site_url ('articles/update');?>'>修改</a>
    <hr/>

    <ol>
    <?php foreach ($articles as $article):?>
    <li><?=$article->title."<br>"?></li>
    <?php endforeach;?>
    </ol>
    <!-- <form action='<?php echo site_url('articles/update');?>'>
    <input type='text' name='update' value=''>
    <input type='submit' value='修改'> -->
    </form>
  </body>
</html>
