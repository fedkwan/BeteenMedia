<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站管理｜后台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<?php include "../conn.php";?>
<body>
<div>
<?php
mysql_query("SET NAMES 'UTF8'");
echo "<div class='history2'><li>ID</li><li>账号名</li><li>网站名称</li><li style='width:250px'>网址</li><li>状态</li></div>";
$query = "SELECT * FROM `wb_form` WHERE `status` = 0";
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
if ($row[status] == 0) {$status = '待审核';}
else if ($row[status] == 1) {$status = '审核成功';}
echo "<div class='higray2'><li>".$row['id']."</li><li>".$row['user_name']."</li><li>".$row['ad_tip']."</li><li>".$row['wb_name']."</li><li style='width:250px'>".$row['wb_url']."</li><li>".$status."</li><li><a href='wb_shenhe_submit.php?id=".$row['id']."'>确认</a></li><li><a href='wb_shenhe_submit.php?del=".$row['id']."'>删除</a></li></div>";
}

?>
</body>
</html>
