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
    <a href='<?php echo site_url('articles/add');?>'>新增文章</a>
    -
    <a href='<?php echo site_url('platform/logout');?>'>登出</a>
    <hr/>
    <form action='<?php echo site_url('articles/edit_post/'.$article->id);?>' method='post'>
      <input type='text' name='article' value='<?php echo $article->title?>'>
      <input type='submit' value='修改'>
    </form>

  </body>
</html>