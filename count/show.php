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
//$showtimepluspre = 'Update `user_form` SET `showtime` = `showtime` + 1  where id = '.$adr['user_name'];//广告商展示加一user表(总)
//mysql_query($showtimepluspre);
$showtimeplus = "Update `ad_form` SET `showtime` = `showtime` + 1 where sid = '$sid'";//广告商展示加一次ad表(分)
mysql_query($showtimeplus);
//$showtimecost = 'Update `ad_form` SET `ad_money_left` = `ad_money_left` - `ad_per_money` where id = '$sid'";//广告被展示扣费
//mysql_query($showtimecost);
$urltowebmaster = "select * from `wb_form` where `wb_url` = '$url'";//根据URL提取站长信息
$uwr = @mysql_fetch_array(mysql_query($urltowebmaster));
//$showtimeget = 'Update `user_form` SET `money` = `money` + '.( $adr['ad_per_money'] * $showmoney ) .' where `user_name` =' .$uwr['user_name'];//站长赚到钱
//mysql_query($showtimeget);
//$showtimeget2 = 'Update `wb_form` SET `money` = `money` + '.( $adr['ad_per_money'] * $showmoney ) .' where `user_name` =' .$uwr['user_name'];//站长赚到钱2
//mysql_query($showtimeget2);
$showtimeplusagain = "Update `wb_form` SET `showtime` = `showtime` + 1  where `wb_url` = '$url'";//站长展示加一次
mysql_query($showtimeplusagain);
}
unset($_SESSION['pw']);
?>