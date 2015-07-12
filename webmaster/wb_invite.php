<?php session_start(); include '../logonornot.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站长提现｜比天传媒互动广告交易平台</title>
<link type="text/css" href="../beteen.css" rel="stylesheet" />
</head>
<body>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">发送以下链接给你的站长朋友，让他们一起在比天掘金！</div>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle">邀请的人越多，你就能获得高价广告优先投放权！</div>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle"><span class="ad-hi-div-span">http://www.cnbeteen.com/index.php?i=<?php echo $_SESSION['uid'];?></span></div>
<div class='prepart'><img src='../img/star.png' class='star' align="absmiddle"><a href='wb_invite.php' target='_self'>经你邀请注册的站长有</a></div>
<div class="ad-hi">
<?php 
include "../conn.php";
mysql_query("SET NAMES 'UTF8'");
$who ="select * from `user_form` where `fromwho` = '$_SESSION[uid]'";
$result = @mysql_query($who); 
while($row = @mysql_fetch_array($result))
{
echo "<li>".$row['user_name']."</li>";
}
?>
</div>
</body>
</html>
