<?php
session_start();
require 'conn.php';
if($_SESSION['pw'] != 'Comment-aller vous'){exit;}
else {
$url = $_GET['url'];
$sid = $_GET['id'];
mysql_query("SET NAMES 'UTF8'");
$ad = "select * from `ad_form` where sid = '$sid'";//获取广告信息
$adr = @mysql_fetch_array(mysql_query($ad));
//$clickpluspre = 'Update `user_form` SET `click` = `click` + 1  where id = '.$adr['user_name'];//广告商点击加一user表(总)
//mysql_query($clickpluspre);
$veriplus = "Update `ad_form` SET `veri` = `veri` + 1 where sid = '$sid'";//广告商展示加一次ad表(分)
mysql_query($veriplus);
$vericost = "Update `ad_form` SET `ad_money_left` = `ad_money_left` - `ad_per_money` where sid = '$sid'";//广告被展示扣费
mysql_query($vericost);
$urltowebmaster = "select * from `wb_form` where `wb_url` = '$url'";//根据URL提取站长信息
$uwr = @mysql_fetch_array(mysql_query($urltowebmaster));
$num = $adr['ad_per_money']+0;
$veriget = "Update `user_form` SET `money` = `money` + $num where `user_name` = '$uwr[user_name]'";//站长赚到钱
mysql_query($veriget);
$veriget2 = "Update `wb_form` SET `money` = `money` + $num where `user_name` = '$uwr[user_name]'";//站长赚到钱2
mysql_query($veriget2);
$veriplusagain = "Update `wb_form` SET `veri` = `veri` + 1  where `wb_url` = '$url'";//站长展示加一次
mysql_query($veriplusagain);
}
unset($_SESSION['pw']);
?>