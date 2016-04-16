<?php
  $output = shell_exec("vmstat -S m -s | sed 's/$/<br\/>/g'| sed 's/ /./g'");
  echo $output;
?>

<?php/*START - This Comments - If Run remove this line
<?php
  $output = shell_exec("free -m | sed 's/$/<br\/>/g'| sed 's/ /./g'");
  echo "** RAM(free -m): " . "<br/>" . $output;
?>

<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^MemTotal:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);
  echo "MemTotal: " . $mem . " kB RAM found";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^MemFree:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);
  echo "MemFree: " . $mem . " kB RAM found";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Cached:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);
  echo "Cached: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Buffers:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);
  echo "Buffers: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Active:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);
  echo "Active: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Inactive:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);
  echo "Inactive: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Active(anon):\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Active(anon): " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Inactive(anon):\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Inactive(anon): " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Active(file):\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Active(file): " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Inactive(file):\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Inactive(file): " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Unevictable:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Unevictable: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Mlocked:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Mlocked: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^SwapTotal:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "SwapTotal: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^SwapFree:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "SwapFree: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Dirty:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Dirty: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Writeback:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Writeback: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^AnonPages:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "AnonPages: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Shmem:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Shmem: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^Slab:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "Slab: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^SReclaimable:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "SReclaimable: " . $mem . " kB";
?>
<br>
<?php
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^SUnreclaim:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  echo "SUnreclaim: " . $mem . " kB";
?>
END - This Comments - If Run remove this line*/?>
