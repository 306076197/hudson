<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta name='renderer' content='webkit'>
<meta charset='utf-8' />
<title>
<?php 
if($class_r[$GLOBALS[navclassid]][classid]==43){
?>
哈德逊瓷砖官方手机网站
<?php }else{?>
<?=$grpagetitle?>
<?php } ?>
</title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<link href="favicon.ico" rel="apple-touch-icon-precomposed" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/metinfo.css" id="metuimodule" data-module ="10001" />

<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/default.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/green.css" />

<!--矢量图标css begin-->
<link rel="stylesheet" href="http://www.hudsonhome.cn/wapfile/css/font-awesome.min.css">
<!--矢量图标css end-->

<!--轮播皮肤css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/slider.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/slider.default.css" /> 
<!--轮播皮肤css end-->

<!--面板皮肤css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/panel.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/panel.default.css" />
<!--面板皮肤css begin-->

<!--内滚导航css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/navigator.css" />
<!--内滚导航css end-->

<!--选项卡css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/transitions.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/tabs.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudsonhome.cn/wapfile/css/tabs.default.css" />
<!--选项卡css end-->

<!--核心组件js begin-->
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/zepto.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/touch.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/matchMedia.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/event.ortchange.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/parseTpl.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/gmu.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/event.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/widget.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/iscroll.js"></script>

<!--面板相关 end-->
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/throttle.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/event.scrollStop.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/panel.js"></script>
<!--面板相关js end-->

<!--轮播组件 begin-->
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/slider.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/arrow.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/dots.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/$touch.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/$autoplay.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/$lazyloadimg.js"></script>
<!--轮播组件js end-->

<!--内滚导航js begin-->
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/highlight.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/navigator.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/scrolltonext.js"></script>
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/$scrollable.js"></script>
<!--内滚导航js end-->

<!--选项卡js begin-->
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/tabs/tabs.js"></script>
<!--选项卡js end-->

<!--图片加载js begin-->
<script type="text/javascript" src="http://www.hudsonhome.cn/wapfile/js/imglazyload.js"></script>
<!--图片加载js end-->

<script type="text/javascript">
var ks = 4,
	columnshow=3,
	classnow='10001',
	lang='cn',
	fliptext1='查看更多',
	fliptext2='加载中...'
	,Empty='不能为空'
	,member_err1='两次密码输入不一致'
	,member_err2='密码应大于等于6位！'
	,member_err3=''
	,member_err4='用户名不能小于3位'
	,falsh_y='350'
	,promaximgY='300'
	,imgmaximgY='300'
	;
</script>
<style type="text/css">
body{ font-size:14px!important;}
.flexslider li img{ height:350px;}
.showproduct_slides img{ height:300px!important;}
.showimg_slides img{ height:300px!important;}
.dl-jqrun dt img,.dl-jqrun dt{ max-width:px;}
</style>
</head>
<body>
	<div class="metcont" style="background:#fff;">

    <header data-value=1>
	
	
		<div class="top">
			<div class="top-logo" style="color:white;font-size:18px;padding-top:10px;">
				&nbsp;哈德逊瓷砖
			</div>
			<ul class="top-right">
				<li class="tlist seach"><span class="tspan icon-search"></span>
				</li>


				<li class="tlist column"><span class="tspan icon-reorder"></span>
			        <!--导航方式3-->
					<nav class="type3 none topmorebox"><i></i>
					  <ul class="list-none">
					  <li id="nav_10001"  ><a href='http://www.hudsonhome.cn/wap/gywm/' title='关于我们' class='nav'><span>关于我们</span></a></li>
					  <li id='nav_1'  ><a href='http://www.hudsonhome.cn/wap/cpzx/'  title='关于我们' class='hover-none nav'><span>产品中心</span></a></li>
					  <li id='nav_2'  class='navdown'>
					  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=46 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>" title='产品展示' class='hover-none nav'>
					  <?php
}
}
?>
					  <span>品牌故事</span></a></li>
					  <li id='nav_7'  >
					  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=47 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>" title='展厅风采' class='hover-none nav'>
					  <?php
}
}
?>
					  <span>展厅风采</span></a></li>
					  <li id='nav_19'  >
					  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=48 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>" title='最新活动' class='hover-none nav'>
					  <?php
}
}
?>
					  <span>最新活动</span></a></li>
					  <li id='nav_18'  ><a href='http://www.hudsonhome.cn/wap/gcal/'  title='工程案例' class='hover-none nav'><span>工程案例</span></a></li>
					  <li id='nav_18'  >
					  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=50 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>" title='加盟服务' class='hover-none nav'>
					  <?php
}
}
?>
					  <span>加盟服务</span></a></li>
					  <li id='nav_18'  ><a href='http://www.hudsonhome.cn/wap/zxzx/'  title='最新资讯' class='hover-none nav'><span>最新资讯</span></a></li>
					  <li id='nav_18'  >
					  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=52 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>" title='联系我们' class='hover-none nav'>
					  <?php
}
}
?>
					  <span>联系我们</span></a></li>
					  </ul>
					</nav>
				</li>

			</ul>
		</div>
<!--搜索框-->
<div class="seachbox none topmorebox">
	<div class="seachbox_box">
			<i></i>
			<form method="POST" name="myform" action="http://www.hudsonhome.cn//e/search/index.php">
                <input type="text" name="keyboard" class="text" placeholder="请输入关键词" />
                <input type="hidden" name="show" value="title" />
				<input type="hidden" name="tempid" value="1" />
                <input type="hidden" name="tbname" value="news" />
                
                <input type="submit" name="Submit" value="立即搜索" class="submit" />
            </form>
	</div>
</div>




	</header>
<script type="text/javascript">
//导航
$("#nav li.navdown").addClass('ui-state-active');
if($("nav").size()>0){
var navsize = $('.navflipsnap li').size();
	var navszlt = new Array();
	if(columnshow==1){//内滚导航
	if(document.documentElement.clientWidth>800){
		$(".metcont").width(340);
	}
		function navmore(navsize,ks){
			ks=ks>4?4:ks;
			navszlt[1] = Math.round($('.metcont').width()/1);
			navszlt[2] = Math.round($('.metcont').width()/2);
			navszlt[3] = Math.round($('.metcont').width()/3);
			navszlt[4] = Math.round($('.metcont').width()/4);
			$('#nav li').width(navszlt[ks]);
			$('#nav').navigator();
		}
		navmore(navsize,ks);
		$(window).resize(function() {
			navmore(navsize,ks);
		});
	}else if(columnshow==2){//普通导航
		function navtype2(ks){
			navszlt[1] = '100%';
			navszlt[2] = '50%';
			navszlt[3] = '33.3%';
			navszlt[4] = '25%';
			$('nav.type2 li,nav.type3 li').css("width",navszlt[ks]);
			//if(ks==3)$('nav.type2 li,nav.type3 li').each(function(i){ i++; if(i%3==0){ $(this).css("width",'34%'); } });
		}
		navtype2(ks);
		$(window).resize(function() {
			navtype2(ks);
		});
	}
}
</script>

<div class="sidebar">
    <div class="sb_nav">
			<h3 class='title'>

			<!-- <p class="moresidebar">更多分类</p> -->
               <?=$ecms_gr[title]?>
			</h3>
    </div>
    <div class="sb_box">

        <div class="editor active" id="showtext">
		    <div>
		      <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
              [!--page.url--]
		    </div>
			<div class="clear"></div>
		</div>

    </div>
    <div class="clear"></div>
</div>


<style type="text/css">
     .foot-text{background:#9a9b9f; color:#ffffff;}
     .foot-text a{ color:#ffffff;}
</style>
	<div class="foot-text">
		服务热线：0757-82279667<div class='metpcmobile'>版有所权，侵权必究</div>

	</div>

<div id="footnum" data-value="1"></div>


<div id="footernav">
	<div class="footerboxnav">
	
         <div id="jisou-info" class="jisou-info" style="display:none;"></div>
             <div class="info-nr">
                <div id="info-nr-phone" class="info-nr-phone color-orange">
                  <input id="info-nr-btn" type="checkbox" class="info-nr-menu">
                     <div> <a href="tel:0757-82786959"><span class="icon-phone tel"></span></a> </div>
                     <div> <a href="http://www.hudsonhome.cn/wapfile/map.html"><span class="icon-map-marker map"></span></a> </div>
                     <div> <a href="message/index.php?lang=cn"><span class="icon-edit message"></span></a> </div>
                     <div> <a href="http://www.hudsonhome.cn/wap/"><span class="icon-home home"></span></a> </div>
                </div>
        </div>
  
	</div>
</div>
<style type="text/css">
	.metcont{ padding-bottom:0px!important;}
</style>

</div>

<script src="http://www.hudsonhome.cn/wapfile/js/fun.inc.js" type="text/javascript"></script>
<div class="sidebar_jsbox none"></div>
		<div id="sidebar" class="none" data-csnow="1" data-class3="0">
			<h3 class="title">关于我们</h3>
			<div id="wrapper_sidebar">
				<div id="scroller_sidebar"><dl class="list-none navnow"><dt id='part2_13'><a href='../about/show.php?lang=cn&id=13'  title='总裁致辞' class="zm"><span>总裁致辞</span></a></dt></dl><dl class="list-none navnow"><dt id='part2_14'><a href='../about/show.php?lang=cn&id=14'  title='公司简介' class="zm"><span>公司简介</span></a></dt></dl><dl class="list-none navnow"><dt id='part2_15'><a href='../about/show.php?lang=cn&id=15'  title='企业文化' class="zm"><span>企业文化</span></a></dt></dl><dl class="list-none navnow"><dt id='part2_17'><a href='../about/show.php?lang=cn&id=17'  title='荣誉证书' class="zm"><span>荣誉证书</span></a></dt></dl><dl class="list-none navnow"><dt id='part2_18'><a href='../about/show.php?lang=cn&id=18'  title='联系我们' class="zm"><span>联系我们</span></a></dt></dl></div>
			</div>
		</div>
</body>
</html>