<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php include "../conn.php";?>
<?php
if(empty($_GET['id']))
{echo "<script>alert('非法操作'); location='ad_have.php';</script>";}
else {
$query3 = "SELECT * FROM `ad_form` WHERE `id` = '$_GET[id]'";
$result = mysql_query($query3);
$row = @mysql_fetch_array($result);
$mo = $row[ad_money_left];
$query = "DELETE FROM `ad_form` WHERE `id` = '$_GET[id]'";
mysql_query($query);
$query2 = "UPDATE `user_form` SET `money` = `money` + '$mo' WHERE `id` = '$_GET[id]'";
mysql_query($query2);
echo "<script> window.parent.location='index.php';</script>";}
?>
</body>
</html>
