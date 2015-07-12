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
$query = "UPDATE `wb_form` SET `status` = '1' WHERE `id` = '$_GET[id]'";
mysql_query($query);}
if (empty($_GET['id'])){
$query2 = "DELETE FROM `wb_form` WHERE `id` = '$_GET[del]'";
mysql_query($query2);
}
echo "<script>location='wb_shenhe.php';</script>";
?>
</body>
</html>
