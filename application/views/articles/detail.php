<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Blog</title>
    <link rel=stylesheet type="text/css" href="http://crazyms.com/blog/resources/index.css">
    <style type="text/css">

      .boxs{
        position:relative;
        top: 40px;
        width: 100%;
        text-align: center;
      }
      .boxs .top{
        border: 1px solid;
        width: 500px;
        margin: 0 auto;
      }
      .boxs .top .t1{

      }
      .boxs .content{
        border: 1px solid;
        width: 500px;
        margin: 0 auto;
      }

    </style>
  </head>
  <body>
    <div class='header'>
      <div class='ul'>
        <div class='li'>
            <?php include APPPATH.'views/header.php'; ?>
        </div>
      </div>
    </div>
      <div class='boxs'>
        <table class='top'>
          <tr>
          <td><?php echo $content ;?></td>
          <td><?php echo $time; ?></td>
          </tr>
        </table>

        <table class='content'>
        <?php if($messages){ ?>

          <?php foreach ($messages as $message) { ?>
          <tr>
            <td><?php echo $message->name."&nbsp".'say:';?></td>
            <td><?php echo $message->message ;?></td>
            <td><?php $message->created_at ; ?></td>

          <?php } ?>
          </tr>
        <?php } ?>
        </table>
    </div>
  </body>
</html>