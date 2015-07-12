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
<div style="margin-top:10px;">
<?php
mysql_query("SET NAMES 'UTF8'");
echo "<div class='charge1'><li>提现时间</li><li>提现金额</li><li>支付宝账号</li><li>提现状态</li></div>";
$query = "SELECT * FROM `money_get` WHERE `user_name` = '$_SESSION[uid]'";
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
if ($row[status] == 0)
{$sta = '待确认';}
if ($row[status] == 1)
{$sta = '成功';}
if (empty($row['date'])) {$row['date'] = '未知';}
echo "<div class='charge2'><li>".$row['date']."</li><li>".$row['money_get']."</li><li>".$row['alipay']."</li><li>".$sta."</li></div>";
}
?>
</body>
</html>
