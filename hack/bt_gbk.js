var btj = jQuery.noConflict();
document.write("<div class='beteen-ad-div'><a id='ad_go'target='_blank'href=''><img src=''id='ad_img'class='beteen-img'/></a><input type='hidden'name='ad_id'id='ad_id'value=''><iframe name='beteenshow'id='beteenshow'frameborder='0'width='0'height='0'scrolling='no'></iframe><input type='text'name='ad_input'id='ad_input'style=''onfocus=if(this.value=='����ͼ�д��Ǻ����֣�')this.value='' onblur=if(this.value=='')this.value='����ͼ�д��Ǻ����֣�'; value='����ͼ�д��Ǻ����֣�'><a id='ad_refresh'href='javascript:void(0)'><img src='http://www.cnbeteen.com/img/r.png'class='beteen-img-button1'id='r'/></a><img src='http://www.cnbeteen.com/img/q.png'class='beteen-img-button2'id='q'/><a href='http://www.cnbeteen.com/?from=logo'target='_blank'><img src='http://www.cnbeteen.com/img/label.png'class='beteen-label'/></a></div>");

btj(document).ready(function(){
	urlpreg=document.URL;
	urlpreg=urlpreg.replace(/\%/g,"%25");
	urlpreg=urlpreg.replace(/\#/g,"%23");
	urlpreg=urlpreg.replace(/\+/g,"%2B");
	urlpreg=urlpreg.replace(/\ /g,"%20");
	
	btj('#ad_input').attr('style','background-color:#fff; width:185px; height:20px; line-height:20px; position:absolute; top:212px; left:10px; text-indent:3px; z-index:100; padding:0px; font-family:΢���ź�; font-size:11.5px; -moz-box-shadow:inset 0 0px 0px rgba(0,0,0,0.1); -webkit-box-shadow:inset 0 0px 0px rgba(0,0,0,0.1); box-shadow:inset 0 0px 0px rgba(0,0,0,0.1); -moz-border-radius:0px; border-radius:0px;');
	
	btj.getJSON("http://www.cnbeteen.com/api.php?mm=" + urlpreg + "&callback=?",{r:new Date().getTime()},
        function(data){
			var obj = data.rows[0];
			input_md5 = obj.ad_tip;	sid = obj.sid; kind = obj.ad_kind;
			btj('#ad_go').attr('href',"http://www.cnbeteen.com/count/next_click.php?sid=" + sid + "&url=http://" + document.domain + "&go=" + obj.ad_target);
			btj('#ad_img').attr('src',"http://www.cnbeteen.com/pic.php?sid=" + sid);
			window.open("http://www.cnbeteen.com/count/next_show.php?sid="+ sid +"&url=http://" + document.domain,"beteenshow");
		});

	btj('#ad_input').one("mousedown",function(){
		window.open("http://www.cnbeteen.com/count/next_enter.php?sid="+ sid +"&url=http://" + document.domain,"beteenshow");
		});

	btj("[mosthandsomeguy=fedkwan]").submit(function(e){
		var ad_input = btj('#ad_input').attr('value');
		var md5tx = hex_md5(ad_input);
		if (input_md5 !== md5tx) {alert('��֤�벻��Ŷ��');return false;}
		});
	
	btj("#ad_refresh").click(function(){
		btj.getJSON("http://www.cnbeteen.com/api.php?sid=" + sid + "&kind=" + kind + "&mm=" + urlpreg + "&callback=?",{r:new Date().getTime()},
        function(data){  
			var obj = data.rows[0];
			input_md5 = obj.ad_tip;	sid = obj.sid; kind = obj.ad_kind;
			btj('#ad_go').attr('href',"http://www.cnbeteen.com/count/next_click.php?sid=" + sid + "&url=http://" + document.domain + "&go=" + obj.ad_target);
			btj('#ad_img').attr('src',"http://www.cnbeteen.com/pic.php?sid=" + sid);
			input_md5 = obj.ad_tip;
			btj('#ad_id').attr('value',obj.id);
			window.open("http://www.cnbeteen.com/count/next_show.php?sid="+ sid +"&url=http://" + document.domain,"beteenshow");		
			});	
		});
});