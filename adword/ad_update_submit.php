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
else if (!eregi("http\:\/\/.*(\.)?.*(\.)[a-z]{2,3}(\/.*)?",$_POST['ad_target']))
{echo "<script>alert('请输入正确的广告要链接到的目标URL');</script>";exit;}
else if ($_POST['ad_per_money'] == '')
{echo "<script>alert('请设置广告投放单价');</script>";exit;}
else if ($_POST['ad_time'] == '')
{echo "<script>alert('请设置广告投放时长');</script>";exit;}
else
{
mysql_query("SET NAMES 'UTF8'");
$query = "UPDATE `ad_form` SET `ad_name` = '$_POST[ad_name]', `ad_media_url` = '$_POST[ad_media_url]', `ad_kind` = '$_POST[ad_kind]', `ad_tip` = '$_POST[ad_tip]', `ad_target` = '$_POST[ad_target]', `ad_per_money` = '$_POST[ad_per_money]', `veri` = `ad_money`/'$_POST[ad_time]', `status` = 0 WHERE `id` = '$_POST[ad_id]'";//链接表
mysql_query($query);
echo "<script>alert('广告修改成功，请等待审核……'); window.location='ad_showin.php';</script>";
exit;
}
?>

</body>
</html>