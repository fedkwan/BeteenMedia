function flash(){refre=$.ajax({url:"kua.php?i=admin&g="+Math.random(),async:false});$("#adflash").html(refre.responseText);}
function beteenshow(){var sh = $('#sh').attr('value');window.open("http://www.cnbeteen.com/count/next_show.php?id="+ sh +"&url=http://" + document.domain,"be");}
function md5(e) {md = hex_md5(e);}
$(document).ready(function(){flash();beteenshow();});
function getValue(){var tx = $('#tx').attr('value'); var hd = $('#hd').attr('value'); if (hd !== md){alert('验证码不对哦！');} else{beteen.submit();}}