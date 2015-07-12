<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<!--比天代码要加一个jquery-->
<script type="text/javascript" src="http://www.cnbeteen.com/jq.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	urlpreg=document.URL;
	urlpreg=urlpreg.replace(/\%/g,"%25");
	urlpreg=urlpreg.replace(/\#/g,"%23");
	urlpreg=urlpreg.replace(/\+/g,"%2B");

	$.getJSON("http://www.cnbeteen.com/api.php?mm=" + urlpreg + "&callback=?",{r:new Date().getTime()},
        function(data){  
			var obj = data.rows[0];
			alert(obj.id);
		});
});
</script>
<!--比天代码-->
</body>
</html>
