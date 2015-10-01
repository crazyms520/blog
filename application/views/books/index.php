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
      <a href="<?php echo site_url('books/index');?>">書本</a>
      <a href="<?php echo site_url('platform/logout');?>">登出</a>
    </div>

  </body>
</html>