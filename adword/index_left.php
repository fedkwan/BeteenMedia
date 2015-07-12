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
        <div class="ad-cont-left-title" id='ad'><a href="ad_showin.php" target="right">广告投放数据</a></div>
        <ul class="in" id="a">
            <li class="ad-cont-left-in"><a href="ad_showin.php?k=0" target="right">等待审核</a></li>
            <li class="ad-cont-left-in"><a href="ad_showin.php?k=1" target="right">正在投放</a></li>
            <li class="ad-cont-left-in"><a href="ad_showin.php?k=2" target="right">暂停投放</a></li>
            <li class="ad-cont-left-in"><a href="ad_showin.php?k=3" target="right">投放完毕</a></li>
        </ul>
        <div class="ad-cont-left-title" id='newad'><a href="ad_new.php" target="right">新建广告计划</a></div>
        <div class="ad-cont-left-title" id="charge"><a href="money_charge.php" target="right">充值</a></div>
        <ul class="in" id="c">
            <li class="ad-cont-left-in"><a href="money_charged.php" target="right">充值历史</a></li>
        </ul>
        <div class="ad-cont-left-title" id="up"><a href="ad_data.php" target="right">更改资料</a></div>
        <div class="ad-cont-left-title"><a href="exit.php" target="_parent">退出</a></div>
    </div>
</div>