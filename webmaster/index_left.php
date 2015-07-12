<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".in").hide();
  $(".ad-cont-left-in").click(function(){
    $(".ad-cont-left-in").removeClass("ain");
    $(".ad-cont-left-title").removeClass("ain");
    $(this).addClass("ain");
  });
  $(".ad-cont-left-title").click(function(){
    $(".ad-cont-left-in").removeClass("ain");
    $(".ad-cont-left-title").removeClass("ain");
    $(this).addClass("ain");
  });
  $("#ad").click(function(){$("#a").slideToggle();$("#b").slideUp();$("#c").slideUp();});
  $("#newad").click(function(){$("#b").slideToggle();$("#a").slideUp();$("#c").slideUp();});
  $("#charge").click(function(){$("#c").slideToggle();$("#b").slideUp();$("#a").slideUp();});
  $("#up").click(function(){$("#a").slideUp();$("#b").slideUp();$("#c").slideUp();});
});
</script>
<div class='ad-cont-left' id='ful'>
    <div style="margin:15px 5px;">
        <div class="ad-cont-left-title"><a href="wb_showin.php" target="right">网站投放数据</a></div>    
        <div class="ad-cont-left-title" id='ad'><a href="wb_wb.php" target="right">添加网站</a></div>
<ul class="in" id="a">
    <li class="ad-cont-left-in"><a href="wb_wbed.php" target="right">已添加网站</a></li>
</ul>
        <div class="ad-cont-left-title"><a href="wb_code.php" target="right">获取广告代码</a></div>
        <div class="ad-cont-left-title" id='charge'><a href="get_money.php" target="right">提现</a></div>
<ul class="in" id="c">
    <li class="ad-cont-left-in"><a href="geted.php" target="right">提现历史</a></li>
</ul>
        <div class="ad-cont-left-title"><a href="wb_data.php" target="right">更改资料</a></div>
        <div class="ad-cont-left-title" id="in-red"><a href="wb_invite.php" target="right">邀请注册</a></div>
        <div class="ad-cont-left-title"><a href="exit.php" target="_parent">退出</a></div>
    </div>
</div>