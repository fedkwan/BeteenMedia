<?php session_start();?><?php include '../logonornot.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站长首页｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
<link type="text/css" href="../slidy.css" rel="stylesheet" />
<?php include "../conn.php"; ?>
<script> function del(url,mes){var mymes;mymes = confirm(mes);if (mymes == true){window.location = url;}}</script>
</head>
<body>
<div class='ad-head-div'>
    <div class="ad-head-logo"><a href="index.php">比天传媒</a></div>
    <div class='ad-head-info'></div>
</div>
<div class="span-div"></div>
<div id="content" style="width:1440px; height:780px; margin-top:0px;">
<div class='ad-cont-div'>
    <?php include 'index_left.php'; ?>
    <div class='ad-cont-right'>
    <iframe width="1250px" height="780px" frameborder="0" name="right" src='wb_showin.php' style="margin-left:15px;"></iframe>
    </div>
</div>
<iframe width="0" height="0" frameborder="0" scrolling="no" name="be"></iframe>
</div>
</div>
</body>
</html>
