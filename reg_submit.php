<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "conn.php";
?>
<?php
if ($_POST['name'] == '')
{echo "<script>alert('请输入用户名'); window.location='index.php';</script>";exit;}
else if (strlen($_POST['name']) < 2 || strlen($_POST['name']) > 16)
{echo "<script>alert('用户名长度必须大于2个字符，小于16个字符。');</script> window.location='index.php';";exit;}
else if ($_POST['email'] == '')
{echo "<script>alert('请输入Email'); window.location='index.php';</script>";exit;}
else if (!eregi("^[_\.0-9a-z-]+@([0-9a-z]+\.)+[a-z]{2,3}$",$_POST['email']))
{echo "<script>alert('请输入正确的Email'); window.location='index.php';</script>";exit;}
else if ($_POST['password'] == '')
{echo "<script>alert('请输入密码'); window.location='index.php';</script>";exit;}
else if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 20)
{echo "<script>alert('密码长度要大于6个字符，小于20个字符。'); window.location='index.php';</script>";exit;}
else if ($_POST['usertype'] == '')
{echo "<script>alert('请选择你的账号类型'); window.location='index.php';</script>";exit;}

if($_POST['name'] != "")
{
$query = "select * from `user_form` where `user_name` = '$_POST[name]' or `email` = '$_POST[email]'";//链接表
$result = mysql_query($query);//执行结果
$row = @mysql_num_rows($result);//行数
}
if($row == 0)
{
$regtime = time();
$reg = "INSERT INTO `user_form` (`id`,`user_name`,`email`,`password`,`usertype`,`regtime`,`fromwho`) values (null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[usertype]','$regtime','$_COOKIE[beteeninvite]')"; 
mysql_query($reg);
echo "<script>alert('注册成功，正跳转至首页……'); window.location='index.php';</script>";exit;}
else
{echo "<script>alert('用户名或邮箱已被注册');</script>";exit;}
?>
</head>