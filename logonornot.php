<?php
if (empty($_SESSION['uid']))
	{
	echo "
	<style type='text/css'>
	* {margin:0;padding:0;}
	div {
		width:100%;
		height:90%;
		background:url('img/logon.png') center no-repeat
		}
	</style>
	<script>function jump(){location='http://www.cnbeteen.com/index.php'}setTimeout('jump()',3000);</script>
	<div></div>
	";
	exit;
	}
?>