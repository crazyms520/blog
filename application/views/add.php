<!doctype html>
<html>
<head>
  <title></title>
  <meta charset='utf-8'>
</head>
<body>
  <a href="<?php echo site_url('')?>">首頁</a>
  <a href='<?php echo site_url('articles')?>'>文章列表</a>
  <a href='<?php echo site_url('articles/add')?>'>新增文章</a>
  <a href='<?php echo site_url('books')?>'>書本列表</a>
  <a href='<?php echo site_url('books/book_add')?>'>新增書本</a>
  <hr/>
  <form action='<?php echo site_url('articles/add_post');?>' method='post'>
    <input type='text' name='ad' value=''>
    <input type='submit' value='新增'>
  </form>
</body>
</html>
