<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站长首页</title>
</head>
<body>
<?php include "../conn.php";?>
<?php
mysql_query("SET NAMES 'UTF8'");
$query = "SELECT * FROM `user_form` WHERE `user_name` = '$_SESSION[uid]'";
$row = @mysql_fetch_array(mysql_query($query));

$sqlshow='SELECT sum(showtime) FROM `ad_form`';
if ($resshow=mysql_query($sqlshow)){
  list($sumshow)=mysql_fetch_row($resshow);
  mysql_free_result($resshow);
} else echo mysql_error();

$sqlveri='SELECT sum(veri) FROM `ad_form`';
if ($resveri=mysql_query($sqlveri)){
  list($sumveri)=mysql_fetch_row($resveri);
  mysql_free_result($resveri);
} else echo mysql_error();

$sqlclick='SELECT sum(click) FROM `ad_form`';
if ($resclick=mysql_query($sqlclick)){
  list($sumclick)=mysql_fetch_row($resclick);
  mysql_free_result($resclick);
} else echo mysql_error();

$querymoney = "SELECT * FROM `money_get` WHERE `user_name` = '$_SESSION[uid]' and `status` = '0'";
$rowmoney = @mysql_fetch_array(mysql_query($querymoney));
$sqlmoney='select sum(money_get) from money_get';
if ($resmoney=mysql_query($sqlmoney)){
  list($summoney)=mysql_fetch_row($resmoney);
  mysql_free_result($resmoney);
} else echo mysql_error();
?>
<?php include "../setting.php";?>
<div class="ad-hi">
    <div class="ad-hi-div">你好，亲爱的<span class="ad-hi-div-span"><?php echo $_SESSION[uid];?></span>，欢迎回到比天</div>
    <div class="ad-hi-div">你共有<span class="ad-hi-div-span"><?php echo $row[thenum];?></span>个网站在比天投放广告</div>
    <div class="ad-hi-div">你的网站一共展示过<span class="ad-hi-div-span"><?php echo $sumshow;?></span>次广告</div>
    <div class="ad-hi-div">其中被点击<span class="ad-hi-div-span"><?php echo $sumclick;?></span>次</div>
    <div class="ad-hi-div">点击率为<span class="ad-hi-div-span"><?php echo round($sumclick/$sumshow*100,2);?></span>%</div>
    <div class="ad-hi-div">收入<span class="ad-hi-div-span"><?php echo $summoney;?></span>元</div>
<!--    <div class="ad-hi-div">共推荐<span class="ad-hi-div-span"><?php echo $row[ijoin];?></span>位站长注册</div>-->
    <div class="ad-hi-div">目前你的等级积分是<span class="ad-hi-div-span"><?php echo $webmaster; ?></span>分</div>
</div>
</body>