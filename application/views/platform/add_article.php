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
    <form action='<?php echo site_url('platform/add_article_post');?>' method='post'>
      <input type='text' name='add_article' value='' />
      <input type='submit' value='新增' />
    </form>

  </body>
</html>