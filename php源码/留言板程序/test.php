<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
<!-- 我是中国人 -->

<?php
require_once("config.php");

/* 引入数据库配置文件，不需要再写数据库的连接 
 * 配置文件已经写好并系写好$link 
 * */

mysql_query("set names GBK");
$result = mysql_query("SELECT * FROM lyb");


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['biaoti'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($link);
?>