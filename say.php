<?php
//$command = 'sudo sh -c "/home/pi/install/aquestalkpi/AquesTalkPi '. $_POST["phrase"] . ' | aplay"';
$command = 'sudo sh -c "/home/pi/install/aquestalkpi/AquesTalkPi '. $_POST["phrase"] . ' | aplay > /dev/null &"';
//shell_exec($command);
exec($command);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>say</title>
</head>
<body>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <div class="container-fluid">
    <div class="input-group">
      <form action="" method="POST" >
        phrase
        <input type="text" name="phrase" id="phrase">
        <span class="input-group-tn">
          <input type="submit" value="say" class="btn btn-default">
        </span>
      </form>
    </div>
  </div>
</body>
</html>
