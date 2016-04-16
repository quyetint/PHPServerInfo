
<?php
 $cml = "awk {'print $4,$7'} /var/log/apache2/ssl_access_log | sort -rn | uniq -c";
 $output = shell_exec("$cml | sed 's/$/<br\/>/g'| sed 's/ /./g'");
 echo "** URL SSL Request( apache ): " . "<br/>" . $output;
?>
