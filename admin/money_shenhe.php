<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值管理｜后台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<?php include "../conn.php";?>
<body>
<div>
<?php
mysql_query("SET NAMES 'UTF8'");
echo "<div class='history2'><li>充值ID</li><li>充值金额</li><li>支付宝账号</li><li>充值状态</li></div>";
$query = "SELECT * FROM `money_charge` WHERE `status` = 0";
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
if ($row[status] == 0) {$status = '待审核';}
else if ($row[status] == 1) {$status = '充值成功';}
echo "<div class='higray2'><li>".$row['user_name']."</li><li>".$row['money_charge']."</li><li>".$row['alipay']."</li><li>".$status."</li><li><a href='money_shenhe_submit.php?id=".$row['id']."'>确认</a></li><li><a href='money_shenhe_submit.php?del=".$row['id']."'>删除</a></li></div>";
}

?>
</body>
</html>
