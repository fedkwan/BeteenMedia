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
if (empty($_GET['del'])){
$query = "UPDATE `ad_form` SET `status` = '1' WHERE `id` = '$_GET[id]'";
mysql_query($query);}
if (empty($_GET['id'])){
$query2 = "DELETE FROM `ad_form` WHERE `id` = '$_GET[del]'";
mysql_query($query2);
$query3 = "SELECT * FROM `ad_form` WHERE `id` = '$_GET[del]'";
$result = mysql_query($query3);
$row = @mysql_fetch_array($result);
$mo = $row[ad_money_left];
$query4 = "UPDATE `user_form` SET `money` = `money` + '$mo'";
mysql_query($query4);
}
echo "<script>location='ad_shenhe.php';</script>";
?>
</body>
</html>
