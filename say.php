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
  <title>say</title>
</head>
<body>
  <form action="" method="POST" >
    phrase<input type="text" name="phrase" id="phrase"/>
    <input type="submit" value="say">
  </form>
</body>
</html>
