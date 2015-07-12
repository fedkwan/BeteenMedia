<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加新的广告计划SQL页面</title>
</head>

<body>
<?php include "../conn.php";?>
<?php
//if ($_POST['ad_name'] == '')
//{echo "<script>alert('请输入广告计划名称');<script>";exit;}
if ($_POST['ad_media_url'] == '')
{echo "<script>alert('请输入广告图片URL');</script>";exit;}
else if (!eregi("http\:\/\/.*(\.)?.*(\.)[a-z]{2,3}(\/.*)?",$_POST['ad_media_url']))
{echo "<script>alert('请输入正确的广告图片的URL');</script>";exit;}
else if ($_POST['ad_tip'] == '')
{echo "<script>alert('请输入正确选项');</script>";exit;}
else if (strlen($_POST['ad_tip']) > 30)
{echo "<script>alert('正确选项长度要小于20个字符。');</script>";exit;}
else if ($_POST['ad_target'] == '')
{echo "<script>alert('请输入广告要链接到的目标网址');</script>";exit;}
else if (!ereg("http\:\/\/.*(\.)?.*(\.)[a-z]{2,3}(\/.*)?",$_POST['ad_target']))
{echo "<script>alert('请输入正确的广告要链接到的目标URL');</script>";exit;}
else if ($_POST['ad_money'] == '')
{echo "<script>alert('请设置广告投放预算');</script>";exit;}
else if ($_POST['ad_per_money'] == '')
{echo "<script>alert('请设置广告投放单价');</script>";exit;}
/*else if ($_POST['ad_time'] == '')
{echo "<script>alert('请设置广告投放时长');</script>";exit;}*/
else
{
mysql_query("SET NAMES 'UTF8'");
$query4 = "SELECT * FROM `user_form` WHERE `user_name` = '$_SESSION[uid]'";
$result = mysql_query($query4);
$row = @mysql_fetch_array($result);
if ($row[money] < $_POST[ad_money])
{
echo "<script>alert('账号剩余的钱不足');</script>";
}
else 
{
$query3 = "UPDATE `user_form` SET `thenum` = `thenum` + '1' WHERE `user_name` = '$_SESSION[uid]'";
mysql_query($query3);
$query2 = "UPDATE `user_form` SET `money` = `money` - '$_POST[ad_money]'";
mysql_query($query2);
$query = "INSERT INTO `ad_form` (id,user_name,ad_name,ad_kind,ad_media_url,ad_tip,ad_target,ad_money,ad_per_money,ad_money_left,ad_time) VALUES (null,'$_SESSION[uid]','$_POST[ad_name]','$_POST[ad_kind]','$_POST[ad_media_url]','$_POST[ad_tip]','$_POST[ad_target]','$_POST[ad_money]','$_POST[ad_per_money]','$_POST[ad_money]','$_POST[ad_time]')";//链接表
mysql_query($query);
echo "<script>alert('新广告添加成功，请等待审核……'); window.location='ad_showin.php';</script>";
exit;
}
}
?>

</body>
</html>