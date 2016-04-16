
<?php
  $output = shell_exec("tail -200 /var/log/syslog | sed 's/$/<br\/>/g' ");
  //$output = shell_exec('ls -l');
  echo $output;
?>
