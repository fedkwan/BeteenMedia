<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../beteen.css" rel="stylesheet" />
<link type="text/css" href="../ad.css" rel="stylesheet" />
<title>新广告计划｜比天传媒互动广告交易平台</title>
<?php include "../conn.php"; ?>
<?php 
mysql_query("SET NAMES 'UTF8'");
$query = "SELECT * FROM `user_form` WHERE `user_name` = '$_SESSION[uid]'";
$row = @mysql_fetch_array(mysql_query($query));?>
</head>
<body>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">将广告图片的引用地址，填到这里：</div>
<form action='ad_new_submit.php' method='post' enctype = 'multipart/form-data' name='beteen' target='be'>
    <div class='part'>
    <div class='part-div-left'>图片地址：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_media_url'></input></div></div>
    <div class='part'>
    <div class='part-div-left'></div>
    <div class='part-div-right'>图片大小为290*200像素或同等比例</div></div>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">设置点击图片后链接到的目标网址：</div>
    <div class='part'>
    <div class='part-div-left'>链接目标：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_target'></input></div></div>
    <div class='part'>
    <div class='part-div-left2'><img src='../img/star.png' class='star' align="absmiddle">设置验证文字：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_tip'></input></div></div>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">你的账号余额：<?php echo $row['money']; ?>元，可以用于广告投放。</div>
    <div class='part'>
    <div class='part-div-left'>投放总预算(元)：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_money' onkeyup= "this.value=this.value.replace(/[^0123456789.]/g,'')" onafterpaste= "this.value=this.value.replace(/[^0123456789.]/g,'')"></input></div></div>
    <div class='part'>
    <div class='part-div-left2'><img src='../img/star.png' class='star' align="absmiddle">设置广告验证单价：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_per_money' onkeyup= "this.value=this.value.replace(/[^0123456789.]/g,'')" onafterpaste= "this.value=this.value.replace(/[^0123456789.]/g,'')"></input></div></div>
    <!--<div class='part'>
    <div class='part-div-left2'><img src='../img/star.png' class='star' align="absmiddle">设置广告投放时长：</div>
    <div class='part-div-right'><input class='part-input-text' type='text' name='ad_time' onkeyup= "this.value=this.value.replace(/[^0123456789.]/g,'')" onafterpaste= "this.value=this.value.replace(/[^0123456789.]/g,'')"></input></div></div> -->
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