<?php
require 'conn.php';
mysql_query("SET NAMES 'UTF8'");

$id = $_GET['sid'];
$kind = $_GET['kind'];

if (empty($kind))
	{
	$fkurl = $_GET['mm'];
	$content=file_get_contents($fkurl);
	preg_match('/charset=([^">]+)/is',$content,$result);
	$wp = $result[1];
	if (empty($wp)) 
		{
		preg_match('/charset="(gbk)?(gb2312)?(utf-8)?"\>/is',$content,$result);
		$wp = preg_replace('/\"/','',$result[1],1);
		}

	if (strcasecmp($wp,'gbk')==0 || strcasecmp($wp,'gb2312')==0)
		{
		$kind = file_get_contents("http://www.cnbeteen.com/net_gbk.php?jk=".$fkurl);
		}
	else if (strcasecmp($wp,'utf-8')==0)
		{
		$kind = file_get_contents("http://www.cnbeteen.com/net_utf.php?jk=".$fkurl);
		}
	
	if(empty($kind))
		{
		$kind = 0;
		}

	$sql1=mysql_query("select * from `ad_form` where `sid` <> '$id' and `status` = 1 order by rand() limit 1;");
	if(!empty($sql1))
		{
		$row1=mysql_fetch_array($sql1,MYSQL_ASSOC);
		//print_r($row1);
		$row1[kind] = $kind;
		$row1[ad_tip] = md5($row1[ad_tip]);
		$row1[ad_media_url] = '';
		$row1[id] = '';
		echo $_GET['callback'].'('.'{"rows":['.json_encode($row1).']})';//*/
		}
	}
else
	{
	$sql2=mysql_query("select * from `ad_form` where `ad_kind` = '$kind' and `sid` <> '$id' and `status` = 1 order by rand() limit 1;");
	if(!empty($sql2))
		{
		$row2=mysql_fetch_array($sql2,MYSQL_ASSOC);
		//print_r($row);
		$row2[kind] = $kind;
		$row2[ad_tip] = md5($row2[ad_tip]);
		$row2[ad_media_url] = '';
		$row2[id] = '';
		echo $_GET['callback'].'('.'{"rows":['.json_encode($row2).']})';
		}
	}
?>