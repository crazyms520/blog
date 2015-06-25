<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href='<?php echo site_url('')?>'>首頁</a>
    -
    <a href='<?php echo site_url('articles');?>'>文章列表</a>
    -
    <a href='<?php echo site_url('articles/add_article');?>'>新增文章</a>
    -
    <a href='<?php echo site_url('platform/logout');?>'>登出</a>
    <hr/>

      <?php
        foreach ($articles as $article) {
      ?>
      <a href='<?php echo site_url('article/edit/'.$article->id)?>'>修改</a>|<a href='<?php echo site_url('article/delete/'.$article->id)?>'>刪除</a><?php echo $article->title ?>
      <?php } ?>

  </body>
</html>