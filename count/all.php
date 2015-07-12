<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>次数 比天传媒</title>
<style type="text/css">
@charset "utf-8";
*{margin:0;padding:0;}
body {background-color:#003366;TEXT-ALIGN: center;}
.word {font-family:"微软雅黑"; letter-spacing:2px; font-size:25px; color:#FFFFFF; line-height:40px; padding:280px;}
</style>
<?php
include 'conn.php';
$sql='select sum(showtime) from `ad_form`';
if ($res=mysql_query($sql)){
list($sum)=mysql_fetch_row($res);
mysql_free_result($res);
echo "<div class='word'>";
echo "比天传媒验证码广告已验证 ".$sum." 次，期待你的加入!<br/>";
echo "www.cnbeteen.com";
echo "</div>";
} else echo mysql_error();
?> 