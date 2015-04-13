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
WAP网站
<?php } ?>
</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<link href="favicon.ico" rel="apple-touch-icon-precomposed" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/metinfo.css" id="metuimodule" data-module ="10001" />

<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/default.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/green.css" />

<!--矢量图标css begin-->
<link rel="stylesheet" href="http://www.hudson.com/wapfile/css/font-awesome.min.css">
<!--矢量图标css end-->

<!--轮播皮肤css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/slider.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/slider.default.css" /> 
<!--轮播皮肤css end-->

<!--面板皮肤css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/panel.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/panel.default.css" />
<!--面板皮肤css begin-->

<!--内滚导航css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/navigator.css" />
<!--内滚导航css end-->

<!--选项卡css begin-->
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/transitions.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/tabs.css" />
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/wapfile/css/tabs.default.css" />
<!--选项卡css end-->

<!--核心组件js begin-->
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/zepto.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/touch.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/matchMedia.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/event.ortchange.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/parseTpl.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/gmu.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/event.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/widget.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/iscroll.js"></script>

<!--面板相关 end-->
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/throttle.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/event.scrollStop.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/panel.js"></script>
<!--面板相关js end-->

<!--轮播组件 begin-->
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/slider.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/arrow.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/dots.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/$touch.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/$autoplay.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/$lazyloadimg.js"></script>
<!--轮播组件js end-->

<!--内滚导航js begin-->
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/highlight.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/navigator.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/scrolltonext.js"></script>
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/$scrollable.js"></script>
<!--内滚导航js end-->

<!--选项卡js begin-->
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/tabs/tabs.js"></script>
<!--选项卡js end-->

<!--图片加载js begin-->
<script type="text/javascript" src="http://www.hudson.com/wapfile/js/imglazyload.js"></script>
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


<!--大图轮播-->
<div class="flexslider" style="height:350px;">
  <ul class="flash_slides">
   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titlepic from phome_ecms_news where classid=54 order by ftitle asc limit 3',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
	  <li><img src='<?=$bqr[titlepic]?>' height='350' /></li>
	<?php
}
}
?>
  </ul>
</div>



<div class="index">

        <section>
            <a href="tel:0757-82786959" class="link_tel icon-phone" style="background:#87c236;">0757-82786959</a>
        </section>

         <section style="margin:5px 0 7px 0;">


		<section style="padding:0px; margin:0px;">
            <ul class="list_font">

                    <li>
						<a href="http://www.hudson.com/wap/gywm/">
						    <div style="background-color:#686b70;"><span class="icon-user"></span></div>
                            <div>
                                <p>关于我们</p>
                            </div>
                        </a>
                    </li>

                    <li>
					    <a href="http://www.hudson.com/wap/cpzx/">
						    <div style="background-color:#87c236;"><span class="icon-th"></span></div>
                            <div>
                                <p>产品中心</p>
                            </div>
                        </a>
                    </li>

                    <li>
						<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=46 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>">
						<?php
}
}
?>
						    <div style="background:#686b70 url('http://www.hudsonhome.cn/wapfile/images/brand.png') no-repeat center 10px;"><span  class="icon-volume-up" style="color:#686b70;position:relative;z-index:-1;"></span></div>
                            <div>
                                <p>品牌故事</p>
                            </div>
                        </a>
                    </li>


                            </ul>
        </section>
		<div class="clear"></div>




		<section style="padding:0px; margin:0px;">
            <ul class="list_font">

                    <li>
						<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=47 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>">
						<?php
}
}
?>
						    <div style="background-color:#87c236;"><span class="icon-group"></span></div>
                            <div>
                                <p>展厅风采</p>
                            </div>
                        </a>
                    </li>

                    <li>
						<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=48 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>">
						<?php
}
}
?>
						    <div style="background:#686b70 url('http://www.hudsonhome.cn/wapfile/images/act.jpg') no-repeat center 12px;"><span class="icon-volume-up" style="color:#686b70;position:relative;z-index:-1;"></span></div>
                            <div>
                                <p>最新活动</p>
                            </div>
                        </a>
                    </li>

                    <li>
						<a href="http://www.hudson.com/wap/gcal/">
						    <div style="background-color:#87c236;"><span class="icon-trophy"></span></div>
                            <div>
                                <p>工程案例</p>
                            </div>
                        </a>
                    </li>


                            </ul>
        </section>
		<div class="clear"></div>




		<section style="padding:0px; margin:0px;">
            <ul class="list_font">


                    <li>
						<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=50 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						  <a href="<?=$bqr[titleurl]?>">
						<?php
}
}
?>
						    <div style="background-color:#686b70;"><span class="icon-heart"></span></div>
                            <div>
                                <p>加盟服务</p>
                            </div>
                        </a>
                    </li>

                    <li>
						<a href="http://www.hudson.com/wap/zxzx/">
						    <div style="background-color:#87c236;"><span class="icon-globe"></span></div>
                            <div>
                                <p>最新资讯</p>
                            </div>
                        </a>
                    </li>

                    <li>
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl from phome_ecms_news where classid=52 order by id desc limit 1',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					  <a href="<?=$bqr[titleurl]?>">
					<?php
}
}
?>
						    <div style="background-color:#686b70;"><span class="icon-phone"></span></div>
                            <div>
                                <p>联系我们</p>
                            </div>
                        </a>
                    </li>

                            </ul>
        </section>
		<div class="clear"></div>



         </section>

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
                     <div> <a href="http://www.hudson.com/wapfile/map.html"><span class="icon-map-marker map"></span></a> </div>
                     <div> <a href="message/index.php?lang=cn"><span class="icon-edit message"></span></a> </div>
                     <div> <a href="http://www.hudson.com/wap/"><span class="icon-home home"></span></a> </div>
                </div>
        </div>
  
	</div>
</div>
<style type="text/css">
	.metcont{ padding-bottom:0px!important;}
</style>

</div>

<script src="http://www.hudson.com/wapfile/js/fun.inc.js" type="text/javascript"></script>

</body>
</html>