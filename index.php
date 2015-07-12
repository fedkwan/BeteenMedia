<?php session_start(); ?>
<?php setcookie("beteeninvite",$_GET['i'],time()+86400*5);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>比天传媒</title>
<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript" src="slidy.js"></script>
<link type="text/css" href="slidy.css" rel="stylesheet"/>
<link type="text/css" href="beteen.css" rel="stylesheet" />
<link type="text/css" href="ad.css" rel="stylesheet" />
</head>

<body>
<div id="content">
<div style='position:relative;'><a href="reg.php" target="_self"><img class="trag" src="img/reg.png"></a></div>
<div class='apple-nav'> </div>
<div class='index-slash'>
<div id="menu">
	<a href="javascript:void(0);"><img src="img/image-1.jpg" title="新型媒体模式"/></a>
	<a href="javascript:void(0);"><img src="img/image-2.jpg" title="精准投放定位"/></a>
	<a href="javascript:void(0);"><img src="img/image-3.jpg" title="优秀广告效应"/></a>
</div>
</div>
<script type="text/javascript">
$(function() {$('#menu').slidy({animation:'fade',children:'a',menu:true,pause:true,speed:400,time:4000,width:500,height:300});});
</script>
<div class="index-typo">
<div class="index-denglukuang">
	<form method="post" action="login.php" mosthandsomeguy='fedkwan'>
	<div style='position:relative; float:left;'><img class='imgg' src='img/username.png'><input type="text" class="index-i" name="name"/></div>
	<div style='position:relative; float:left; margin-left:8px;'><img class='imgg' src='img/password.png'><input type="password" class="index-i" name="password"/></div>
</div>
    <input type="submit" class="four-button" value="登陆" />
	</form>
</div>
</div>
<div class="index-foot"> 比天传媒 Www.Cnbeteen.Com 2010-2012 @ Copy Right. <a href="about.php">关于</a></div>
</body>
</html>