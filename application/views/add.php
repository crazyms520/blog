<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Blog</title>
  </head>
  <body>
    <a href='<?php echo site_url('')?>'>首頁</a>
    <a href='<?php echo site_url('books')?>'>書本列表</a>
    <a href='<?php echo site_url('books/add')?>'>新增書本</a>
    <hr>
    <form action='<?php echo site_url('books/add_post')?>' method='post'>
    <input type='text' name='addbook' value=''>
    <input type='submit' value='新增'>
    </form>

  </body>
</html>