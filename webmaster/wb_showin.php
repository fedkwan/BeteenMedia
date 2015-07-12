<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站投放数据｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<?php include "../conn.php";?>
<body>
<div class="right-big">
<div class='showin1'><li style="width:80px;">图标</li><li style="width:200px;">网站名</li><li>展示数</li><li>点击数</li><li>点击率</li><li>收入</li></div>
<?php
mysql_query("SET NAMES 'UTF8'");
$query = "SELECT * FROM `wb_form` WHERE `user_name` = '$_SESSION[uid]'";
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
//if ($row['showtime'] != 0 && $row['veri'] != '') {$iv = round($row['veri']/$row['showtime']*100,2);} else $iv = 0;
if ($row['showtime'] != 0 && $row['click'] != '') {$ic = round($row['click']/$row['showtime']*100,2);} else $ic = 0;
echo "<div class='showin2'><li style='width:80px;'><img src='".$row['wb_url']."/favicon.ico' onerror=\"javascript:this.src='http://www.cnbeteen.com/i.ico'\" class='favicon' align='absmiddle' /></li><li style='width:200px;'>".$row['wb_name']."</li><li>".$row['showtime']."</li><li>".$row['click']."</li><li>".$ic."%</li><li>".$row['money']."元</li></div>";
}
?>
</body>
</html>
