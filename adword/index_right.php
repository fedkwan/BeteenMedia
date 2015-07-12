<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告商首页</title>
</head>
<body>
<?php include "../conn.php";?>
<?php
mysql_query("SET NAMES 'UTF8'");
$query = "SELECT * FROM `user_form` WHERE `user_name` = '$_SESSION[uid]'";
$row = @mysql_fetch_array(mysql_query($query));

$sqlshow="SELECT sum(showtime) FROM `ad_form` where `user_name` = '$_SESSION[uid]'";
if ($resshow=mysql_query($sqlshow)){
  list($sumshow)=mysql_fetch_row($resshow);
  mysql_free_result($resshow);
  ($sumshow  == '')?($sumshow = 0):($sumshow = $sumshow);}

$sqlveri="SELECT sum(veri) FROM `ad_form` where `user_name` = '$_SESSION[uid]'";
if ($resveri=mysql_query($sqlveri)){
  list($sumveri)=mysql_fetch_row($resveri);
  mysql_free_result($resveri);
  ($sumveri  == '')?($sumveri = 0):($sumveri = $sumveri);}

$sqlclick="SELECT sum(click) FROM `ad_form` where `user_name` = '$_SESSION[uid]'";
if ($resclick=mysql_query($sqlclick)){
  list($sumclick)=mysql_fetch_row($resclick);
  mysql_free_result($resclick);
  ($sumclick  == '')?($sumclick = 0):($sumclick = $sumclick);}

$sqlmoney="select sum(money_charge) from `money_charge` where `user_name` = '$_SESSION[uid]'";
if ($resmoney=mysql_query($sqlmoney)){
  list($summoney)=mysql_fetch_row($resmoney);
  mysql_free_result($resmoney);
  ($summoney  == '')?($summoney = 0):($summoney = $summoney);}

$sqlnum="select * from `ad_form` where `user_name` = '$_SESSION[uid]'";
mysql_query($sqlnum);
$sumnum  = mysql_affected_rows();

?>
<?php include "../setting.php";?>
<div style="width:100%; height:100%;">
    <div class="ad-hi-div">你好，亲爱的<span class="ad-hi-div-span"><?php echo $_SESSION[uid];?></span>，欢迎回到比天</div>
    <div class="ad-hi-div">你共有<span class="ad-hi-div-span"><?php echo $sumnum;?></span>个广告在比天投放</div>
    <div class="ad-hi-div">你的的广告计划一共展示过<span class="ad-hi-div-span"><?php echo $sumshow;?></span>次</div>
    <div class="ad-hi-div">与用户交互<span class="ad-hi-div-span"><?php echo $sumveri;?></span>次</div>
    <div class="ad-hi-div">被点击<span class="ad-hi-div-span"><?php echo $sumclick;?></span>次</div>
    <div class="ad-hi-div">点击率为<span class="ad-hi-div-span"><?php if ($sumshow != 0 && $sumshow != '') {echo round($sumclick/$sumshow*100,2);} else echo 0;?></span>%</div>
    <div class="ad-hi-div">投入<span class="ad-hi-div-span"><?php echo $summoney;?></span>元</div>
    <div class="ad-hi-div">目前你的等级积分是<span class="ad-hi-div-span"><?php echo $adword ?></span>分</div>
</div>
</body>