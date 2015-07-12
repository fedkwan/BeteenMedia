<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值提交页面</title>
</head>
<body>
<?php include "../conn.php";?>
<?php
if ($_POST['money_charge'] == '')
{echo "<script>alert('请输入要充值的金额');location.href='money_charge.php';</script>";exit;}
else if ($_POST['alipay'] == '')
{echo "<script>alert('请输入支付宝姓名');location.href='money_charge.php';</script>";exit;}
else
{
$h = date('H')+8;
$d = date("Y-m-d ".$h.":i:s");
mysql_query("SET NAMES 'UTF8'");
$query = "INSERT INTO `money_charge` (id,user_name,money_charge,alipay,status,date) VALUES (null,'$_SESSION[uid]','$_POST[money_charge]','$_POST[alipay]',0,'$d')";//链接表
mysql_query($query);
echo "<script>alert('充值提交成功，请等待确认……'); window.location='money_charge.php';</script>";
exit;
}
?>
</body>
</html>