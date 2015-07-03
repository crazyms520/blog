<?php
/*---------------------------------------*/
//........ 此頁面請放在view資料夾底下.......//
/*---------------------------------------*/
$link = 'http://localhost/test/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公佈欄</title>
<!--以下是 Bootstrap 的文件包-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=$link;?>css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?=$link;?>css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="<?=$link;?>js/jquery.js"></script>
<script src="<?=$link;?>js/bootstrap.min.js"></script>
<style>
#heig{
     height:10px;
}
#color{
     background-color: #E5E5E5;
}
</style>
</head>
<body>
<!--"container"為固定置中,請參考 http://kkbruce.tw/Bootstrap/Scaffolding 佈局篇-->
<div class="container">
  <p align="center"><h2 align="center"><strong>留言板</strong></h2></p>
  <form id="form1" name="form1" method="post" action="<?=$link;?>index1.php/gbook/AddGbook">
    <table width="1200" border="1"  class="table table-bordered table-condensed">
      <tr>
        <td id="color"><div id="heig"><strong>留言人:</strong>
            <input type="text" name="user" id="user" />
            <input name="time" type="hidden" id="time" value="<?=date('Y/m/d');?>" />
            </div>
        </td>
        <td id="color"><div align="center">
          <button class="btn" type="submit">留言</button>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <div align="center">
            <textarea name="content" id="content" rows="3" class="span10"></textarea>
          </div>
        </label></td>
      </tr>
    </table>
  </form>
  <?php foreach($query->result_array() as $row):?>
  <table width="1200" border="1" class="table table-bordered table-condensed">
    <tr>
      <td id="color"><strong>
        <?=$row['user'];?>
      在  <?=$row['time'];?>  留言說:</strong></td>
    </tr>
    <tr>
      <td><?=$row['content'];?></td>
    </tr>
  </table>
  <?php endforeach; ?>
  <p>&nbsp;</p>
</div>
</body>
</html>