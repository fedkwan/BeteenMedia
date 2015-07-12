<?php
include 'conn.php';
mysql_query("SET NAMES 'gbk'");
ini_set('memory_limit', '1024M');
$spe = mysql_fetch_array(mysql_query("select * from c_ps"));
//print_r($special);
?>