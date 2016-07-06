<?php
//$command = 'sudo sh -c "/home/pi/install/aquestalkpi/AquesTalkPi '. $_POST["phrase"] . ' | aplay"';
$command = 'sudo sh -c "/home/pi/install/aquestalkpi/AquesTalkPi '. $_POST["phrase"] . ' | aplay > /dev/null &"';
//shell_exec($command);
exec($command);
?>
