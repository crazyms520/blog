<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Blog</title>

    <style type="text/css">
      body > .header{
        position: relative;
        right: 500px;
        text-align: right;
      }
    </style>
    <script src="<?php echo base_url('js/jquery-1.11.3.min.js');?>" language="javascript" type="text/javascript" ></script>
    <script type="text/javascript">
  </script>
  </head>

  <body>
    <div class='header'>
      <?php if($user_id){?>
      <a href="<?php echo site_url('books/book');?>">書本</a>
      <a href="<?php echo site_url('platform/logout');?>">登出</a>
      <?php } ?>
    </div>

    <div class='search'>
      <form action='<?php echo site_url('books/search');?>' method='get'>
        搜尋<input type='text' name='search' value='' placeholder='請輸入id'>
        <input type='submit' value='搜尋'>
      </form>
    </div>

    <div>
    <?php
      echo $pagelist.'</br>';
      foreach($query->result() as $row){

      echo $row->id.'&nbsp';
      echo $row->name;
      echo '</br>';
    }
    ?>
  </div>
  </body>
</html>