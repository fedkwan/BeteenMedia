<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提现历史｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<?php include "../conn.php";?>
<body>
<div>
<?php
mysql_query("SET NAMES 'UTF8'");
echo "<div class='charge1'><li>网站名称</li><li style='width:350px;'>网站地址</li><li>状态</li></div>";
$query = "SELECT * FROM `wb_form` WHERE `user_name` = '$_SESSION[uid]'";
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
if ($row[status] == 0)
{$sta = '待审核';}
if ($row[status] == 1)
{$sta = '通过审核';}
echo "<div class='charge2'><li>".$row['wb_name']."</li><li style='width:350px;'>".$row['wb_url']."</li><li>".$sta."</li></div>";
}
?>
</body>
</html>
