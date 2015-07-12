<?php session_start(); $_SESSION['pw']='Comment-aller vous';
echo "<script>location.href='http://www.cnbeteen.com/count/enter.php?id=".$_GET['sid']."&url=".$_GET['url']."'</script>";
?>