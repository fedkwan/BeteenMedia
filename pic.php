<?php
Header("Content-type: image/png");
include 'conn.php';
include 'cod.php';
$sid = $_GET['sid'];
//$sql = "select * from `ad_form` where `sid` = '$sid'";
//$row = mysql_fetch_array(mysql_query($sql));
//$url = $row['ad_media_url'];
$url = urldecode(authcode($sid,"DECODE"));
$im =  imagecreatefromjpeg($url);
ImagePNG($im);
ImageDestroy($im);
?>