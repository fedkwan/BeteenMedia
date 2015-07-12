<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提现管理｜后台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<?php include "../conn.php";?>
<body>
<div>
<?php
mysql_query("SET NAMES 'UTF8'");
echo "<div class='history2'><li>提现ID</li><li>提现金额</li><li>支付宝账号</li><li>提现状态</li></div>";
$query = "SELECT * FROM `money_get` WHERE `status` = 0";
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
echo "<div class='higray2'><li>".$row['user_name']."</li><li>".$row['money_get']."</li><li>".$row['alipay']."</li><li><a href='tixian_shenhe_submit.php?id=".$row['id']."'>确认</a></li><li><a href='tixian_shenhe_submit.php?del=".$row['id']."'>删除</a></li></div>";
}

?>
</body>
</html>
