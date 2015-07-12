<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值历史｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<?php include "../conn.php";?>
<body>
<div style="height:15px;"></div>
<?php
mysql_query("SET NAMES 'UTF8'");
echo "<div class='charge1'><li>充值时间</li><li>充值金额</li><li>支付宝账号</li><li>充值状态</li></div>";
$query = "SELECT * FROM `money_charge` WHERE `user_name` = '$_SESSION[uid]'";
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
if ($row[status] == 0)
{$sta = '待确认';}
if ($row[status] == 1)
{$sta = '成功';}
if (empty($row['date'])) {$row['date'] = '未知';}
echo "<div class='charge2'><li>".$row['date']."</li><li>".$row['money_charge']."</li><li>".$row['alipay']."</li><li>".$sta."</li></div>";
}
?>
</body>
</html>
