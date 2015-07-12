<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改广告计划｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../ad.css" rel="stylesheet" />
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<body>
<?php include '../conn.php'; ?>
<!--比天代码-->
<link type="text/css" href="../ad.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.min.js"></script>
<iframe name="show" id="show" frameborder="0" width="0" height="0" scrolling="no"></iframe>
<script type="text/javascript" src="http://www.cnbeteen.com/beteen.js"></script>
<!--比天代码-->
<script type="text/javascript">$(document).ready(function(){$("#fra").hide();$("#fraa").click(function(){$("#fra").slideToggle();});});</script>
<?php 
mysql_query("SET NAMES 'UTF8'");
$sql=mysql_query("select * from `ad_form` where `id` = '$_GET[id]';");
$row=mysql_fetch_array($sql,MYSQL_ASSOC);
?>

<form action='ad_update_submit.php' method='post' enctype = 'multipart/form-data' name='beteen' target='be'>
    <input class='part-input-text' type='hidden' name='ad_id' value="<?php echo $row['id'];?>"></input>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">将广告图片的引用地址，填到这里：</div>
    <div class='part'>
    <div class='part-div-left'>图片地址：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_media_url' value="<?php echo $row['ad_media_url'];?>"></input></div></div>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">设置点击图片后链接到的目标网址：</div>
    <div class='part'>
    <div class='part-div-left'>链接目标：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_target' value="<?php echo $row['ad_target'];?>"></input></div></div>
    <div class='part'>
    <div class='part-div-left2'><img src='../img/star.png' class='star' align="absmiddle">设置验证文字：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_tip' value="<?php echo $row['ad_tip'];?>"></input></div></div>
    <div class='part'>
    <div class='part-div-left2'><img src='../img/star.png' class='star' align="absmiddle">设置广告点击单价：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_per_money' onkeyup= "this.value=this.value.replace(/[^0123456789.]/g,'')" onafterpaste= "this.value=this.value.replace(/[^0123456789.]/g,'')" value="<?php echo $row['ad_per_money'];?>"></input></div></div>
    <div class='part'>
    <div class='part-div-left2'><img src='../img/star.png' class='star' align="absmiddle">设置广告投放时长：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_time' onkeyup= "this.value=this.value.replace(/[^0123456789.]/g,'')" onafterpaste= "this.value=this.value.replace(/[^0123456789.]/g,'')" value="<?php echo $row['ad_time'];?>"></input></div></div>
    <div class='part'>
    <div class='part-div-left2'><img src='../img/star.png' class='star' align="absmiddle">设置广告类型：</div>
    <div class='part-div-right' style="width:800px;">
	<?php include 'g.php'; ?>
	</div></div>
</form>
<!--比天代码要加一个jquery-->
<div class='index-ad' style="margin-left:125px;">
<button type="submit" class="submit2" onclick="beteen.submit()">提交</button>
</div>
<!--比天代码-->
</body>
</html>