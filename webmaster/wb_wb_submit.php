<?php
session_start();
include "../conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
if ($_POST['wb_name'] == '')
{echo "<script>alert('请输入网站名称');</script>";exit;}
else if ($_POST['wb_url'] == '')
{echo "<script>alert('请输入网站地址');</script>";exit;}
else if (!eregi("http\:\/\/.*(\.)?.*(\.)[a-z]{2,3}(\/.*)?",$_POST['wb_url']))
{echo "<script>alert('请输入正确的网站地址');</script>";exit;}
else
{
mysql_query("SET NAMES 'UTF8'");
$query4 = "SELECT * FROM `user_form` WHERE `user_name` = '$_SESSION[uid]'";
$result = mysql_query($query4);
$row = @mysql_fetch_array($result);
{
$query3 = "UPDATE `user_form` SET `thenum` = `thenum` + '1'  WHERE `user_name` = '$_SESSION[uid]'";
mysql_query($query3);
$z = md5($_POST[wb_url]);
$query = "INSERT INTO `wb_form` (id,user_name,wb_name,wb_url,md5_url,status) VALUES (null,'$_SESSION[uid]','$_POST[wb_name]','$_POST[wb_url]','$z','0')";//链接表
mysql_query($query);
echo "<script>alert('新网站添加成功，请等待审核……'); window.parent.location='wb_wbed.php';</script>";
exit;
}
}
?>

</body>
</html>