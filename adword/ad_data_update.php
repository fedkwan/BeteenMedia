<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数据更新</title>
<link type="text/css" href="beteen.css" rel="stylesheet" />

</head>

<body>
<?php include "../conn.php";?>
<?php
if ($_POST['data_email'] !== '' || $_POST['data_password'] !== '')
{
if ($_POST['data_password'] !== '')
	{
			if (strlen($_POST['data_password']) < 6 || strlen($_POST['data_password']) > 20)
			{echo "<script>alert('密码长度要大于6个字符，小于20个字符。'); location='ad_data.php';</script>";exit;}
		$query = "UPDATE user_form SET password = '$_POST[data_password]' WHERE username = '$_SESSION[uid]'";
		$result = mysql_query($query);
	}
if ($_POST['data_email'] !== '')
	{
			if (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$",$_POST['data_email']))
			{echo "<script>alert('请输入正确的Email'); location='ad_data.php';</script>";exit;}
		$query = "UPDATE user_form SET email = '$_POST[data_email]' WHERE username = '$_SESSION[uid]'";
		$result = mysql_query($query);
	}
echo "<script>alert('修改成功'); location='ad_data.php';</script>";exit;
}
else
{
echo "<script>alert('你未作任何修改'); location='ad_data.php';</script>";exit;
}
?>
</body>
</html>
