<!doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <a href='<?php echo site_url('')?>'>首頁</a>
    <?php if($has_login){?>
    -
    <a href='<?php echo site_url('articles ');?>'>文章列表</a>
    -
    <a href='<?php echo site_url('articles/add');?>'>新增文章</a>
    -
    <a href='<?php echo site_url('platform/logout');?>'>登出</a>
    <?php
    }else{?>
    -
    <a href='<?php echo site_url('platform/login');?>'>登入</a>
    -
    <a href='<?php echo site_url('platform/register');?>'>註冊</a>
    <?php }?>
    <hr/>
    <?php if ($has_login){?>
      <?php foreach ($articles as $article) {?>
      <a href='<?php echo site_url('articles/edit/'.$article->id)?>'>修改</a>|<a href='<?php echo site_url('articles/delete/'.$article->id)?>'>刪除</a><?php echo $article->title.'<br/>'?>
      <?php } ?>
      <?php } ?>
  </body>
</html>