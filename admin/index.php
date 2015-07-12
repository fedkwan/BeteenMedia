<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>后台首页</title>
<style>
.m {width:100%; height:100%;}
.m div {width:33%; height:250px; margin-right:3px; float:left; line-height:250px; text-align:center;}
.m div {color:#FFFFFF; text-decoration:none; font-size:32px; font-family:"微软雅黑"; font-weight:bold;}
.m div:hover {color:#EFEFEF;}
.l {background-color:#FF0066; margin-right:3px; float:left; cursor:pointer;}
.r {background-color:#0099CC; margin-left:3px; float:left; cursor:pointer;}
</style>
</head>

<body>
<?php
if ($_GET[hi]!=626)
{echo "不要干坏事";
exit;}
?>
<div class="m">
<div class=l onClick="location.href='ad_shenhe.php';">1、广告审核</div>
<div class=l onClick="location.href='wb_shenhe.php';">1、网站审核</div>
<div class=r onClick="location.href='money_shenhe.php';">2、充值审核（慎重）</div>
<div class=r onClick="location.href='tixian_shenhe.php';">2、提现审核（慎重）</div>
</div>
</body>
</html>