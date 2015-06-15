<!doctype html>
<html>
  <head>
    <title>ci login</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <?php
      $user=$_POST['user'];
      $password=$_POST['password'];

      if($user=='crazyms' && $password=='1234'){
        echo "登入成功";
      }else{
        echo"登入失敗";
      }
    ?>
  </body>
</html>