<?php/*START - This Comments - If Run remove this line
<?php
  echo shell_exec("ip addr show | grep 'inet' | tail -1");
?>
Server Date is:
<?php
  echo shell_exec("date");  
?>
END - This Comments - If Run remove this line*/?>

<?php
  echo date("l, Y-m-d") . " at " . date("h:i:s A (H:i:s) T");
?>
