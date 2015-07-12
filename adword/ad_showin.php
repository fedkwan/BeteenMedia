<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站投放数据｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".showin3").hide();
  });
</script>
</head>
<?php include "../conn.php";?>
<body>
<div class='showin1'><li style="width:180px; float:left;">广告预览</li><li>展示数</li><li>验证数</li><li>点击率</li><li>基准单价</li><li style="width:120px; float:left;">支出</li><li style="width:120px; float:left;">操作</li><li>状态</li><li>详细</li></div>
<?php
$k = $_GET['k'];
mysql_query("SET NAMES 'UTF8'");
if(!isset($k)) {$query = "SELECT * FROM `ad_form` WHERE `user_name` = '$_SESSION[uid]'";}
else {$query = "SELECT * FROM `ad_form` WHERE `user_name` = '$_SESSION[uid]' and `status` = '$k'";}
$result = mysql_query($query);
while($row = @mysql_fetch_array($result))
{
//if ($row['showtime'] != 0 && $row['veri'] != '') {$iv = round($row['veri']/$row['showtime']*100,2);} else $iv = 0;
if ($row['showtime'] != 0 && $row['click'] != '') {$ic = round($row['click']/$row['showtime']*100,2);} else $ic = 0;
if ($row['status'] == 1) {$do = "<li style='width:120px;'><a href='ad_see.php?pause=".$row[id]."'><img class='showin' src='../img/pause.png' /></a>"; $st = '投放中';}
else if ($row['status'] == 2) {$do = "<li style='width:120px;'><a href='ad_see.php?ing=".$row[id]."'><img class='showin' src='../img/start.png' /></a>"; $st = '暂停中';}
else if ($row['status'] == 0) {$do = "<li style='width:120px;'><a href='javascript:void(0)'>　　</a>"; $st = '待审核';}
else if ($row['status'] == 3) {$do = "<li style='width:120px;'><a href='javascript:void(0)'>　　</a>"; $st = '投放完';}
else {$do = "";}
/*echo "<script type='text/javascript'>
$(document).ready(function(){
  $('#idb3".$row['id']."').click(function(){
    $('#ids3".$row['id']."').slideToggle();
  });  
  });
</script>";*/
echo "<div class='showin2'><li style='width:180px;'><embed style='width:90px; height:60px;' src='".$row[ad_media_url]."'></embed></li><li>".$row['showtime']."</li><li>".$row['veri']."</li><li>".$ic."%</li><li>".$row['ad_per_money']."元</li><li style='width:120px;'>".round(($row['ad_money']-$row['ad_money_left']),2)."元</li>".$do."　<a href='ad_update.php?id=".$row[id]."'><img class='showin' src='../img/adjust.png' /></a>　<a href='ad_delete.php?id=".$row[id]."'><img class='showin' src='../img/delete.png' /></a></li><li style='color:#FF0000'>".$st."</li><li><a class='sub' id='idb3".$row['id']."'><img class='showin' src='../img/more.png' /></a></li></div>";
//<div class='showin3' id='ids3".$row['id']."'>1</div>
}
?>
</body>
</html>