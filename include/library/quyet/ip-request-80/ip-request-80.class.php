
<p>
 <?php
  $cml = "netstat -plan | grep :80 | awk '{print $4}'| cut -d: -f1 |sort |uniq -c";
  $output = shell_exec("$cml | sed 's/$/<br\/>/g'| sed 's/ /./g'");
  echo "** Tổng số request vào từng IP của Server nhiều IP - cổng 80 ( netstat -plan | grep :80 | awk '{print $4}'| cut -d: -f1 |sort |uniq -c ): " . "<br/>" . $output;
 ?>
</p>
<p>
 <?php
  $cml = "netstat -an | grep :80 | awk '{print $6}' | sort | uniq -c";
  $output = shell_exec("$cml | sed 's/$/<br\/>/g'| sed 's/ /./g'");
  echo "** Hiển thị số lượng kết nối mỗi loại - cổng 80 ( netstat -an | grep :80 | awk '{print $6}' | sort | uniq -c ): " . "<br/>" . $output;
 ?>
</p>
<p>
 <?php
  $cml = "netstat -an | grep ':80' | awk '{print $5}' | sed s/'::ffff:'// | cut -d':' -f1 | sort | uniq -c | sort -rn";
  $output = shell_exec("$cml | sed 's/$/<br\/>/g'| sed 's/ /./g'");
  echo "** Hiển thị tất cả các IP đang kết nối và số lượng kết nối từ mỗi IP - cổng 80 ( netstat -an | grep ':80' | awk '{print $5}' | sed s/'::ffff:'// | cut -d':' -f1 | sort | uniq -c | sort -rn ): " . "<br/>" . $output;
 ?>
</p>
