<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login page</title>
</head>
<body>
<?php include "conn.php";?>
<?php
if ($_POST['name'] == '')
{echo "<script>alert('请输入用户名');location='index.php';</script>";exit;}
else if ($_POST['password'] == '')
{echo "<script>alert('请输入密码');location='index.php';</script>";exit;}
if ($_POST['name'] !== '' & $_POST['password'] !== '')
{
$query = "select * from `user_form` where `user_name` = '$_POST[name]' and `password` = '$_POST[password]'";//链接表
$result = mysql_query($query);//执行结果
$row = @mysql_num_rows($result);//行数
$mil = mysql_fetch_array($result);//结果行
}
if($row == 0)
{
echo "<script>alert('用户名或密码错误'); location='index.php';</script>";
}
else{
$_SESSION['uid'] = $_POST['name'];
$s = time();
$gsql = "update `user_form` set `logtime` = '$s' where `user_name` = '$_POST[name]'";
mysql_query($gsql);
if ($mil['usertype'] == 1)
{echo "<script>location='adword/index.php';</script>";exit;}
else if ($mil['usertype'] == 2)
{echo "<script>location='webmaster/index.php';</script>";exit;}
}
?>
</body>
</html>
