<?php include 'header.php'; ?>
	<p>
		<?php 
			include 'include/library/quyet/hostname/hostname.class.php';
			echo " - ";
		?>
		<?php
			echo "System Time: ";
			include 'include/library/quyet/time/time.class.php';
		?>
	</p>
	<p>
		<a href="ip-request-80.php" target="_blank">Request Port 80</a> OR <a href="ip-request-443.php" target="_blank">Request Port 443</a><br/>
		<a href="url-request.php" target="_blank">URL Request</a> OR <a href="url-ssl-request.php" target="_blank">URL SSL Request</a><br/>
		<a href="ps-aux.php" target="_blank">ps-aux</a> OR <a href="syslog.php" target="_blank">syslog</a> OR <a href="phpinfo.php" target="_blank">PHP infomation</a>
	</p>
	<p>
		<?php 
			echo "** % CPU: ";
			include 'include/library/quyet/cpu/cpu.class.php';
		?>
	</p>
	<p>
		<?php 
			echo "** RAM(vmstat -S m -s): " . "<br/>";
			include 'include/library/quyet/ram/ram.class.php';
		?>
	</p>
	<p>
		<?php 
			echo "** RAM(df -m): " . "<br/>";
			include 'include/library/quyet/disk/disk.class.php';
		?>
	</p>
<?php include 'footer.php';?>
