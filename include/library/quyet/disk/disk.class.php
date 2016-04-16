
<?php
  $output = shell_exec("df -m | sed 's/$/<br\/>/g'| sed 's/ /./g'");
  echo $output;
?>
