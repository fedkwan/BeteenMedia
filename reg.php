<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>比天传媒｜注册</title>
<script type="text/javascript" src="jq.js" charset="utf-8"></script>
<script type="text/javascript" src="slidy.js"></script>
<link type="text/css" href="ad.css" rel="stylesheet" />
<link type="text/css" href="beteen.css" rel="stylesheet" />
<link type="text/css" href="slidy.css" rel="stylesheet"/>
</head>

<body>
<div id="content">
<div style='position:relative;'><a href="index.php" target="_self"><img class="trag" src="img/login.png"></a></div>
<div class='apple-nav'> </div>
<div style="margin-top:90px; height:1px;"></div>
<div class='index-slash' style="height:250px;">
<form enctype = 'multipart/form-data' method = 'POST' action = 'reg_submit.php' target="_self" name="beteen">
<li class="li1">账号</li>
<li class="li2"><input class="li3" type='text' name='name'></li>
<li class="li1">邮箱</li>
<li class="li2"><input class="li3" type='text' name='email'></li>
<li class="li1">密码</li>
<li class="li2"><input class="li3" type='password' name='password'></li>
<li class="li1">你是</li>
<li class="li2">
<label class="li4"><input type="radio" name='usertype' value='1' style="margin-right:5px;" checked />广告商</label>
<label class="li4"><input type="radio" name='usertype' value='2' style="margin-right:5px;" />站长</label>
</li>
</form>
</div>
<div class="index-typo">
<!--比天代码要加一个jquery-->
<div>
<button type="submit" class="submit2" onclick="beteen.submit()">注册</button>
</div>
<!--比天代码-->
</div>
</div>
<div class="index-foot"> 比天传媒 Www.Cnbeteen.Com 2010-2012 @ Copy Right. <a href="about.php">关于</a></div>
</body>
</html>
<script type="text/javascript">
$(function() {$('#menu').slidy({animation:'fade',children:'a',menu:true,pause:true,speed:400,time:4000,width:500,height:300});});
function my_kwicks(){$('.kwicks').kwicks({duration:300,max: 200,spacing:0});}
$(document).ready(function(){my_kwicks();});
</script>
