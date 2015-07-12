$(document).ready(function(){
	$.getJSON("http://www.cnbeteen.com/api.php?mm=" + document.URL + "&callback=?",{r:new Date().getTime()},
        function(data){  
			var obj = data.rows[0];
			alert(obj.id);
		});
});