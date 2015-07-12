<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../beteen.css" rel="stylesheet" />
<title>用户资料｜比天传媒互动广告交易平台</title>
<!--比天代码-->
<link type="text/css" href="../ad.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.min.js"></script>
<iframe name="show" id="show" frameborder="0" width="0" height="0" scrolling="no"></iframe>
<script type="text/javascript" src="http://www.cnbeteen.com/beteen.js"></script>
<!--比天代码-->
</head>
<body>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">如需修改，请填写以下信息：</div>
<form enctype = 'multipart/form-data' method = 'POST' action = 'wb_data_update.php' name = 'beteen'>
<div>
<div class="part">
<div class="part-div-left">密码：</div>
<div class="part-div-right">
<input class="part-input-text" type="password" name="data_password"></input>
</div>
</div>
<div class="part">
<div class="part-div-left">Email：</div>
<div class="part-div-right">
<input class="part-input-text" type="text" name="data_email"></input></div>
</div>
<!--比天代码要加一个jquery-->
<div class='index-ad' style="margin-left:125px;">
<button type="submit" class="submit2" onclick="beteen.submit()">提交</button>
</div>
<!--比天代码-->
</div>
</form>
</div>
</body>
</html>
