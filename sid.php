<?php
if ($_GET['shit'] != 'gjj'){exit;}
include 'conn.php';
include 'cod.php';
$sql = "select * from `ad_form`";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
  $sidac = urlencode(authcode($row['ad_media_url'],'jiami'));
  $id = $row['id'];
  mysql_query("update `ad_form` set `sid` = '$sidac' where `id` = '$id' ");
//  echo $sidac."<br>";
  }
?>