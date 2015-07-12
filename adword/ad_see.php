<?php include "../conn.php";?>
<?php
//if(empty($_GET['pre']) && empty($_GET['ing']) && empty($_GET['pause']) && empty($_GET['over']) && empty($_GET['delete'])){echo "<script>alert('非法操作'); parent.location='index.php';<script>";}else {
if (!empty($_GET['pre']))
{$query0 = "UPDATE `ad_form` SET `status` = 0 WHERE `id` = '$_GET[pre]'";
mysql_query($query0);
echo "<script>location='ad_showin.php';</script>";}

if (!empty($_GET['ing']))
{$query1 = "UPDATE `ad_form` SET `status` = 1 WHERE `id` = '$_GET[ing]'";
mysql_query($query1);
echo "<script>location='ad_showin.php';</script>";}

if (!empty($_GET['pause']))
{$query2 = "UPDATE `ad_form` SET `status` = 2 WHERE `id` = '$_GET[pause]'";
mysql_query($query2);
echo "<script>location='ad_showin.php';</script>";}

if (!empty($_GET['over']))
{$query3 = "UPDATE `ad_form` SET `status` = 3 WHERE `id` = '$_GET[over]'";
mysql_query($query3);
echo "<script>location='ad_showin.php';</script>";}

/*if (!empty($_GET['delete']))
{$query4 = "UPDATE `ad_form` SET `status` = 4 WHERE `id` = '$_GET[delete]'";
mysql_query($query4);
echo "<script>location='ad_have_delete.php';</script>";}*/

//}
?>