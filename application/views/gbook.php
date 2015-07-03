<!doctype html>
<html>
  <head>
    <title>comment</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <!--<?php
      include APPPATH . 'views/header.php'
    ?>-->

    <form  method="post" action="<?php echo site_url('gbooks/AddGbook');?>">
    <table width="1200" border="1"  class="table table-bordered table-condensed">
      <tr>
        <td><strong>留言人:<?php echo $user_id[0]->nick ;?></strong>

            <input type="hidden" name="user" value="<?php echo $user_id[0]->nick ;?>"/>
            <input type="hidden" name='time' value="<?php date_default_timezone_set('Asia/Taipei');echo date('Y/m/d H:i:s');?>" />
        </td>
        <td>
          <button  type="submit">留言</button>
        </td>
      </tr>
      <tr>
        <td><label>
            <textarea name="content" rows="3"></textarea>
        </label></td>
      </tr>
    </table>
  </form>
  <?php foreach($query->result_array() as $row):?>
  <table width="1200" border="1">
    <tr>
      <td><strong>
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