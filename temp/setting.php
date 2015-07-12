<?php 
$adword = $sumshow+$sumclick+$sumveri+$summoney+$sumpoint-(time()-$row[regtime])/86400;
$webmaster = $sumshow+$sumclick+$sumveri+$summoney+$sumijoin+$sumpoint-(time()-$row[regtime])/86400;
$sqlupdatepoint = "update `user_form` set `pointall` = '$adword' where `user_name` = '$_SESSION[uid]'";
mysql_query($sqlupdatepoint);
$sqlupdatepoint2 = "update `user_form` set `pointall` = '$webmaster' where `user_name` = '$_SESSION[uid]'";
mysql_query($sqlupdatepoint2);
if ($pointall < 1000){$pricelow = 0.0; $pricehigh = 3.0;};
?>