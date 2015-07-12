<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(".option2").hover(function(){
	$(".option2").css({"background-color":"",});
	$(this).css({"background-color":"#ccc",});
	});
});
</script>
<style type="text/css">
* { margin:0; padding:0; list-style:none;}
.c_subNav { width:150px; }
.c_subNav table { width:100%; border-collapse:collapse;}
.c_subNav a { text-decoration:none; color:#333;}
.c_subNav a:hover { color:#f60;}
.c_subNav ul ul { position:absolute; visibility:hidden; right:-200px; top:-1px;}
.c_subNav li {position:relative; _position:static; float:left; width:100%;}
.c_subNav a.li { position:relative;}
.c_subNav li .option { display:block; line-height:15px; padding:5px 5px 5px 25px; background:no-repeat 5px 4px; cursor:pointer; font:12px Verdana; zoom:1;}
.c_subNav li .option:hover { color:#f60; background-color:#ffa;}
.c_subNav li .option span { display:block; padding-right:15px;}
.c_subNav li .option:hover span { background-position:right -15px;}
.c_subNav li .option2 { display:block; line-height:15px; padding:5px 5px 5px 25px; background:no-repeat 5px 4px; cursor:pointer; font:12px Verdana; zoom:1;}
.c_subNav li .option2:hover { color:#f60; background-color:#ffa;}
.c_subNav li .option2 span { display:block; padding-right:15px;}
.c_subNav li .option2:hover span { background-position:right -15px;}
.c_subNav .li:hover { z-index:2; background:transparent;}
.c_subNav .li:hover ul { visibility:visible;}
.c_subNav .li:hover ul ul { visibility:hidden;}
.c_subNav .li:hover ul { border:1px solid #ccc; border-width:1px 2px 2px 1px; width:200px; background:#fff; padding:1px; text-indent:20px;}
/*.c_subNav .li:hover li { border-bottom:none;}*/
.c_subNav .li:hover li .option { padding:2px 5px; background:transparent;}
.c_subNav .li:hover li .option:hover { background:#0096ff; color:#fff;}
.c_subNav .li:hover li .option:hover span { background-position:right -30px;}
.c_subNav .li:hover .li:hover ul { visibility:visible; left:200px; top:-2px;}
.c_subNav .dn_wl .option2 { background-position:4px -45px; height:28px; line-height:28px;}
.c_subNav .dzsm .option2 { background-position:4px -73px; height:28px; line-height:28px;}
.c_subNav .edutech .option2 { background-position:4px -101px; height:28px; line-height:28px;}
.c_subNav .life .option2 { background-position:4px -129px; height:28px; line-height:28px;}
.c_subNav .social .option2 { background-position:4px -157px; height:28px; line-height:28px;}
.c_subNav .biz .option2 { background-position:4px -185px; height:28px; line-height:28px;}
.c_subNav .sport .option2 { background-position:4px -213px; height:28px; line-height:28px;}
.c_subNav .art .option2 { background-position:4px -241px; height:28px; line-height:28px;}
.c_subNav .sport .option { background-position:4px -213px; height:28px; line-height:28px;}
/*---图标差异---*/
.c_subNav .dn_wl .option { background-position:4px -45px; height:28px; line-height:28px;}
.c_subNav .dzsm .option { background-position:4px -73px; height:28px; line-height:28px;}
.c_subNav .edutech .option { background-position:4px -101px; height:28px; line-height:28px;}
.c_subNav .life .option { background-position:4px -129px; height:28px; line-height:28px;}
.c_subNav .social .option { background-position:4px -157px; height:28px; line-height:28px;}
.c_subNav .biz .option { background-position:4px -185px; height:28px; line-height:28px;}
.c_subNav .sport .option { background-position:4px -213px; height:28px; line-height:28px;}
.c_subNav .art .option { background-position:4px -241px; height:28px; line-height:28px;}
</style>

<div class="c_subNav">
<ul>

<li class="li dn_wl">
<a href="#nogo" class="option2"><span>电脑网络<!--b_dn_wl--></span></a>
<ul>
    <li class="li"><a href="#nogo" class="option"><span>笔记本电脑<!--b_dn_wl_bjbdn--></span></a></li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>程序设计<!--b_dn_wl_cxsj--></span></a>
    <ul>
        <li class="li"><a href="#nogo" class="option">汇编语言<!--b_dn_wl_cxsj_hbyy--></a></li>
        <li class="li"><a href="#nogo" class="option">JAVA相关<!--b_dn_wl_cxsj_javaxg--></a></li>
        <li class="li"><a href="#nogo" class="option">其他编程语言<!--b_dn_wl_cxsj_qtbcyy--></a></li>
        <li class="li"><a href="#nogo" class="option">数据库<!--b_dn_wl_cxsj_sjk--></a></li>
        <li class="li"><a href="#nogo" class="option">VB<!--b_dn_wl_cxsj_vb--></a></li>
    </ul>
    </li>

    <li class="li"><a href="#nogo" class="option">操作系统<!--b_dn_wl_czxt_xtgz--></a></li>
    <li class="li"><a href="#nogo" class="option">电脑装机<!--b_dn_wl_dnzj--></a></li>
    <li class="li"><a href="#nogo" class="option">反病毒<!--b_dn_wl_fbd--></a></li>

    <li class="li">
	<a href="#nogo" class="option"><span>互联网<!--b_dn_wl_hlw--></span></a>
    <ul>
        <li class="li"><a href="#nogo" class="option">QQ<!--b_dn_wl_hlw_qq--></a></li>
        <li class="li"><a href="#nogo" class="option">上网帮助<!--b_dn_wl_hlw_swbz--></a></li>
        <li class="li"><a href="#nogo" class="option">网站推荐<!--b_dn_wl_hlw_wztj--></a></li>
    </ul>
    </li>

    <li class="li">
    <a href="#nogo" class="option"><span>软件<!--b_dn_wl_rj--></span></a>
    <ul>
        <li class="li"><a href="#nogo" class="option">办公软件<!--b_dn_wl_rj_bgrj--></a></li>
        <li class="li"><a href="#nogo" class="option">多媒体软件<!--b_dn_wl_rj_dmtrj--></a></li>
        <li class="li"><a href="#nogo" class="option">图像处理软件<!--b_dn_wl_rj_txclrj--></a></li>
        <li class="li"><a href="#nogo" class="option">网络软件<!--b_dn_wl_rj_wlrj--></a></li>
    </ul>
    </li>

    <li class="li">
    <a href="#nogo" class="option"><span>硬件<!--b_dn_wl_yj--></span></a>
    <ul>
        <li class="li"><a href="#nogo" class="option">CPU<!--b_dn_wl_yj_cpu--></a></li>
        <li class="li"><a href="#nogo" class="option">内存<!--b_dn_wl_yj_nc--></a></li>
        <li class="li"><a href="#nogo" class="option">显卡<!--b_dn_wl_yj_xk--></a></li>
        <li class="li"><a href="#nogo" class="option">显示器<!--b_dn_wl_yj_xsq--></a></li>
        <li class="li"><a href="#nogo" class="option">硬盘<!--b_dn_wl_yj_yp--></a></li>
    </ul>
    </li>
</ul>
</li>

<li class="li dzsm">
<a href="#nogo" class="option2"><span>电子数码<!--b_dzsm--></span></a>
<ul style="margin-top:-35px;">
    <li class='li'><a href="#nogo" class="option">MP4/MP3<!--b_dzsm_mp4_mp3--></a></li>
    <li class='li'><a href="#nogo" class="option">手机通讯<!--b_dzsm_sj_tx--></a></li>
    <li class='li'><a href="#nogo" class="option">手机购买<!--b_dzsm_sj_tx_sjgm--></a></li>
    <li class='li'><a href="#nogo" class="option">手机使用<!--b_dzsm_sj_tx_sjsy--></a></li>
    <li class='li'><a href="#nogo" class="option">通讯服务<!--b_dzsm_sj_tx_txfw--></a></li>
    <li class='li'><a href="#nogo" class="option">相机/摄像机<!--b_dzsm_zxj_sxj--></a></li>
</ul>
</li>


<li class="li edutech">
<a href="#nogo" class="option2"><span>教育科学<!--b_jy_kx--></span></a>
<ul style="margin-top:-70px;">
	<li class='li'><a href="#nogo" class="option">出国留学<!--b_jy_kx_cg_lx--></a></li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>理工学科<!--b_jy_kx_lgxk--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">地球科学<!--b_jy_kx_lgxk_dqkx--></a></li>
        <li class='li'><a href="#nogo" class="option">工程技术科学<!--b_jy_kx_lgxk_gcjskx--></a></li>
        <li class='li'><a href="#nogo" class="option">环境学<!--b_jy_kx_lgxk_hjx--></a></li>
        <li class='li'><a href="#nogo" class="option">化学<!--b_jy_kx_lgxk_hx--></a></li>
        <li class='li'><a href="#nogo" class="option">建筑学<!--b_jy_kx_lgxk_jzx--></a></li>
        <li class='li'><a href="#nogo" class="option">农业科学<!--b_jy_kx_lgxk_nykx--></a></li>
        <li class='li'><a href="#nogo" class="option">生物学<!--b_jy_kx_lgxk_swx--></a></li>
        <li class='li'><a href="#nogo" class="option">数学<!--b_jy_kx_lgxk_sx--></a></li>
        <li class='li'><a href="#nogo" class="option">天文学<!--b_jy_kx_lgxk_twx--></a></li>
        <li class='li'><a href="#nogo" class="option">物理学<!--b_jy_kx_lgxk_wlx--></a></li>
    </ul>
    </li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>人文学科<!--b_jy_kx_rwxk--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">历史学<!--b_jy_kx_rwxk_lsx--></a></li>
        <li class='li'><a href="#nogo" class="option">语言学<!--b_jy_kx_rwxk_yyx--></a></li>
        <li class='li'><a href="#nogo" class="option">哲学<!--b_jy_kx_rwxk_zx--></a></li>
    </ul>
    </li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>升学入学<!--b_jy_kx_sxrx--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">高考<!--b_jy_kx_sxrx_gk--></a></li>
        <li class='li'><a href="#nogo" class="option">考研<!--b_jy_kx_sxrx_ky--></a></li>
        <li class='li'><a href="#nogo" class="option">小学教育<!--b_jy_kx_sxrx_xjy--></a></li>
        <li class='li'><a href="#nogo" class="option">中考<!--b_jy_kx_sxrx_zk--></a></li>
    </ul>
    </li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>外语学习<!--b_jy_kx_wyxx--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">法语<!--b_jy_kx_wyxx_fy--></a></li>
        <li class='li'><a href="#nogo" class="option">韩语<!--b_jy_kx_wyxx_hy--></a></li>
        <li class='li'><a href="#nogo" class="option">日语<!--b_jy_kx_wyxx_ry--></a></li>
        <li class='li'><a href="#nogo" class="option">英语翻译<!--b_jy_kx_wyxx_yyfy--></a></li>
        <li class='li'><a href="#nogo" class="option">英语考试<!--b_jy_kx_wyxx_yyks--></a></li>
    </ul>
    </li>
    
    <li class='li'><a href="#nogo" class="option">学习帮助<!--b_jy_kx_xxbz--></a></li>
    <li class='li'><a href="#nogo" class="option">院校信息<!--b_jy_kx_yxx--></a></li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>职业教育<!--b_jy_kx_zyjy--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">公务员考试<!--b_jy_kx_zyjy_gwyks--></a></li>
        <li class='li'><a href="#nogo" class="option">会计资格考试<!--b_jy_kx_zyjy_hjzgks--></a></li>
        <li class='li'><a href="#nogo" class="option">自考<!--b_jy_kx_zyjy_zk--></a></li>
        <li class='li'><a href="#nogo" class="option">职业培训<!--b_jy_kx_zyjy_zypx--></a></li>
    </ul>
    </li>
</ul>
</li>

<li class="li art">
<a href="#nogo" class="option2"><span>文化艺术<!--b_wh_ys--></span></a>
<ul style="margin-top:-105px;">
    <li class='li'><a href="#nogo" class="option">地理<!--b_wh_ys_dl--></a></li>
    <li class='li'><a href="#nogo" class="option">历史话题<!--b_wh_ys_lsht--></a></li>
    <li class='li'><a href="#nogo" class="option">民俗传统<!--b_wh_ys_msct--></a></li>
    <li class='li'><a href="#nogo" class="option">器乐_声乐<!--b_wh_ys_ql_sl--></a></li>
    <li class='li'><a href="#nogo" class="option">书画美术<!--b_wh_ys_shms--></a></li>
    <li class='li'><a href="#nogo" class="option">舞蹈<!--b_wh_ys_wd--></a></li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>文学<!--b_wh_ys_wx--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">小说<!--b_wh_ys_wx_s--></a></li>
        <li class='li'><a href="#nogo" class="option">诗歌<!--b_wh_ys_wx_sg--></a></li>
        <li class='li'><a href="#nogo" class="option">散文<!--b_wh_ys_wx_sw--></a></li>
        <li class='li'><a href="#nogo" class="option">戏剧<!--b_wh_ys_wx_xj--></a></li>
    </ul>
    </li>
</ul>
</li>

<li class="li social">
<a href="#nogo" class="option2"><span>社会民生<!--b_shms--></span></a>
<ul style="margin-top:-140px;">
	<li class='li'><a href="#nogo" class="option">法律<!--b_shms_fl--></a></li>
	<li class='li'><a href="#nogo" class="option">公务办理<!--b_shms_gwbl--></a></li>
	<li class='li'><a href="#nogo" class="option">军事<!--b_shms_js--></a></li>
	<li class='li'><a href="#nogo" class="option">其他社会话题<!--b_shms_qtshht--></a></li>
	<li class='li'><a href="#nogo" class="option">求职就业<!--b_shms_qzjy--></a></li>
	<li class='li'><a href="#nogo" class="option">时事政治<!--b_shms_sszz--></a></li>
	<li class='li'><a href="#nogo" class="option">宗教<!--b_shms_zj--></a></li>
</ul>
</li>


<li class="li biz">
<a href="#nogo" class="option2"><span>商业理财<!--b_sy_lc--></span></a>
<ul style="margin-top:-175px;">
	<li class='li'><a href="#nogo" class="option">保险<!--b_sy_lc_bx--></a></li>
	<li class='li'><a href="#nogo" class="option">财务税务<!--b_sy_lc_cwsw--></a></li>
	<li class='li'><a href="#nogo" class="option">创业投资<!--b_sy_lc_cytz--></a></li>
	<li class='li'><a href="#nogo" class="option">产业信息<!--b_sy_lc_cyxx--></a></li>
	<li class='li'><a href="#nogo" class="option">股票<!--b_sy_lc_gp--></a></li>
	<li class='li'><a href="#nogo" class="option">个人理财<!--b_sy_lc_grlc--></a></li>
	<li class='li'><a href="#nogo" class="option">基金<!--b_sy_lc_jj--></a></li>
	<li class='li'><a href="#nogo" class="option">经济研究<!--b_sy_lc_jjyj--></a></li>
	<li class='li'><a href="#nogo" class="option">企业管理<!--b_sy_lc_qygl--></a></li>
	<li class='li'><a href="#nogo" class="option">商务文书<!--b_sy_lc_swws--></a></li>
	<li class='li'><a href="#nogo" class="option">贸易<!--b_sy_lc_y--></a></li>
	<li class='li'><a href="#nogo" class="option">银行业务<!--b_sy_lc_yxyw--></a></li>
</ul>
</li>

<li class="li sport">
<a href="#nogo" class="option2"><span>体育运动<!--b_ty_yd--></span></a>
<ul style="margin-top:-210px;">
	<li class='li'><a href="#nogo" class="option">奥运赛事<!--b_ty_yd_ay_ss--></a></li>
	<li class='li'><a href="#nogo" class="option">户外运动<!--b_ty_yd_hwyd--></a></li>
	<li class='li'><a href="#nogo" class="option">健身<!--b_ty_yd_js--></a></li>
	<li class='li'><a href="#nogo" class="option">篮球<!--b_ty_yd_lq--></a></li>
	<li class='li'><a href="#nogo" class="option">棋牌麻将<!--b_ty_yd_qpmj--></a></li>
	<li class='li'><a href="#nogo" class="option">小球运动<!--b_ty_yd_qyd--></a></li>
	<li class='li'><a href="#nogo" class="option">赛车F1<!--b_ty_yd_sc_f1--></a></li>
	<li class='li'><a href="#nogo" class="option">田径<!--b_ty_yd_tj--></a></li>
	<li class='li'><a href="#nogo" class="option">武术搏击<!--b_ty_yd_wsbj--></a></li>
	<li class='li'><a href="#nogo" class="option">运动用品<!--b_ty_yd_ydyp--></a></li>
	<li class='li'><a href="#nogo" class="option">足球<!--b_ty_yd_zq--></a></li>
</ul>
</li>

<li class="li life">
<a href="#nogo" class="option2"><span>生活<!--b_sh--></span></a>
<ul style="margin-top:-245px;">
	<li class="li">
	<a href="#nogo" class="option"><span>购物<!--b_sh_gw--></span></a>
	<ul>
		<li class='li'><a href="#nogo" class="option">服装_首饰<!--b_sh_fz_ss--></a></li>
		<li class='li'><a href="#nogo" class="option">购车养车<!--b_sh_gcyc--></a></li>
		<li class='li'><a href="#nogo" class="option">汽车购买<!--b_sh_gcyc_qcgm--></a></li>
		<li class='li'><a href="#nogo" class="option">汽车养护<!--b_sh_gcyc_qcyh--></a></li>
		<li class='li'><a href="#nogo" class="option">购房置业<!--b_sh_gfzy--></a></li>
		<li class='li'><a href="#nogo" class="option">家电<!--b_sh_jd--></a></li>
	</ul>
	</li>

    <li class='li'><a href="#nogo" class="option">保健养生<!--b_sh_bjys--></a></li>
    <li class='li'><a href="#nogo" class="option">婚嫁<!--b_sh_hj--></a></li>
    <li class='li'><a href="#nogo" class="option">家居装修<!--b_sh_jjzx--></a></li>
    <li class='li'><a href="#nogo" class="option">交通出行<!--b_sh_jtcx--></a></li>
    <li class='li'><a href="#nogo" class="option">礼节礼仪<!--b_sh_ljly--></a></li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>美容塑身<!--b_sh_mr_ss--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">祛斑祛痘<!--b_sh_mr_ss_b_d--></a></li>
        <li class='li'><a href="#nogo" class="option">护肤<!--b_sh_mr_ss_hf--></a></li>
        <li class='li'><a href="#nogo" class="option">化妆<!--b_sh_mr_ss_hz--></a></li>
        <li class='li'><a href="#nogo" class="option">减肥塑身<!--b_sh_mr_ss_jf_ss--></a></li>
        <li class='li'><a href="#nogo" class="option">美白防晒<!--b_sh_mr_ss_mb_fs--></a></li>
        <li class='li'><a href="#nogo" class="option">美发护发<!--b_sh_mr_ss_mf_hf--></a></li>
    </ul>
    </li>
    
    <li class="li">
    <a href="#nogo" class="option"><span>美食烹饪<!--b_sh_ms_p--></span></a>
    <ul>
        <li class='li'><a href="#nogo" class="option">厨具<!--b_sh_ms_p_cj--></a></li>
        <li class='li'><a href="#nogo" class="option">餐厅酒店<!--b_sh_ms_p_ct_jd--></a></li>
        <li class='li'><a href="#nogo" class="option">酒类饮品<!--b_sh_ms_p_jl_yp--></a></li>
        <li class='li'><a href="#nogo" class="option">烹饪方法<!--b_sh_ms_p_pff--></a></li>
    </ul>
    </li>
    
    <li class='li'><a href="#nogo" class="option">起名<!--b_sh_qm--></a></li>
    <li class='li'><a href="#nogo" class="option">生活常识<!--b_sh_shcs--></a></li>
    <li class='li'><a href="#nogo" class="option">育儿<!--b_sh_ye--></a></li>
    
</ul>
</li>


</ul>
</div>