<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告商充值｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
<link type="text/css" href="../ad.css" rel="stylesheet" />
<script type="text/javascript" src="jq.js"></script>
</head>
<body>
<form enctype = 'multipart/form-data' method = 'POST' action = 'money_charge_add.php' name = 'beteen'>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">请填写充值信息：</div>
<div class="part">
<div class="part-div-left">充值金额：</div>
<div class="part-div-right"><input class="part-input-text" type="text" name="money_charge" onkeyup= "this.value=this.value.replace(/[^0123456789.]/g,'')" onafterpaste= "this.value=this.value.replace(/[^0123456789.]/g,'')"></input></div></div>
<div class="part">
<div class="part-div-left">支付宝姓名：</div>
<div class="part-div-right"><input class="part-input-text" type="text" name="alipay"></input></div></div>
<!--比天代码要加一个jquery-->
<div class='index-ad' style="margin-left:125px;">
<button type="submit" class="submit2" onclick="beteen.submit()">提交</button>
</div>
<!--比天代码-->
</form>
</body>
</html>
