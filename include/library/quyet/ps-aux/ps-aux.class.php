
<?php
  $output = shell_exec("ps aux | sed 's/$/<br\/><br\/>/g'| sed 's/ /./g'");
  //$output = shell_exec('ls -l');
  echo $output;
?>
