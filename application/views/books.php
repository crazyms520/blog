<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Blog</title>
  </head>
  <body>
    <a href='<?php echo site_url('');?>'>首頁</a>
    <!--移動到控制器啟動的類別('welcome')-->
    <a href='<?php echo site_url('books');?>'>書本列表</a>
    <!--移動到控制器啟動的類別('books')-->
    <a href='<?php echo site_url('books/add');?>'>新增書本</a>
    <!--移動到控制器啟動的類別('books 並呼叫函數 /add')-->
    <hr>


    <?php
    if($name){
      foreach ($name as $name) {?>
        <a href='<?php echo site_url('books/edit/.$name->id');?>'>修改</a>|<a href='<?php echo site_url('books/del/ . $name->id')?>'>刪除</a>-<?php echo $name->name;?>
        <hr/>
    <?php  }
    }
    ?>
  </body>
</html>