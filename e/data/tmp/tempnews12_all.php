<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> 哈德逊瓷砖官网|全抛釉|微晶石|浴室砖|背景墙|仿古砖|木纹砖|哈德逊-中国领先的品牌瓷砖生产经销商 - www.hudsonhome.cn</title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<meta name="author" content="哈德逊网络营销部Chan，哈德逊官网 -  www.hudsonhome.cn" />
<link rel="stylesheet" type="text/css" href="http://www.hudson.com/skin/default/css/style.css" />
<script type="text/javascript" src="http://www.hudson.com/skin/default/js/jquery.js"></script>
<script type="text/javascript" src="http://www.hudson.com/skin/default/js/jqnav.js"></script>
<script src="http://www.hudson.com/skin/default/js/tab.js" type="text/javascript"></script>
<!--[if lte IE 6]>
<SCRIPT src="http://www.hudson.com/skin/default/js/iepng.js" type="text/javascript"></SCRIPT>
<script> 
    EvPNG.fix('div, ul, img, li, input'); 
</script>
<![endif]-->
<script type="text/javascript">
   function productclick(objimg,id,objno)
   {   
   
    document.getElementById("dailyImage"+objno).src=objimg;
            $.ajax({
                   type:"post",
                   url:"/product/experienceInfo.aspx?eid="+id+"&randroom="+Math.random(),
                   data:"",
                   success:function(data)
                   {                       
                        if(data!="-1")
                        {
                        document.getElementById("ProductLists"+objno).innerHTML=data;

                        }    
                   }
                
            });
   
   }
   </script>
</head>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Faed9e7d575a1cc8a944631fa5314681e' type='text/javascript'%3E%3C/script%3E"));
</script>
<body class="bgtx">
<!-- 头部开始   -->
 <script type="text/javascript">

         function uaredirect(murl){  
         	    try {  
         	           if(document.getElementById("bdmark") != null){  
         	                return;  
         	           }  
         	           var urlhash = window.location.hash;  
         	           if (!urlhash.match("fromapp")){  
         	               if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i))) {  
         	                      location.replace(murl);  
         	               }  
         	            }  
         	       } catch(err){}  
         	}  
         uaredirect("http://www.hudson.com/wap/");


</script>
<a name="gotop"></a>
<div class="go">
    <a title="返回顶部" class="top" href="#gotop">
      <img src="http://www.hudson.com/skin/default/images/top2.png" width="50" height="50" /></a> <a class="top" href="#gotop">
      <img src="http://www.hudson.com/skin/default/images/back2.png" width="50" height="50" /></a>
</div>
<div class="wrap">
    <div name="gotop">
    </div>
    <div class="top">
        <div class="topbox2">
            <div class="searchcc">
                <input name="txtSelAll" id="txtSelAll" type="text" class="in_sin" value="关键字" onblur="if (this.value=='')this.value='关键字';"
                    onclick="if (this.value=='关键字')this.value=''" /><input name="btnSearch" id="btnSearch"
                        type="button" value="" class="ins_b" onclick="checkAll();" />
            </div>
            <div class="lan2">
                <img src="http://www.hudson.com/skin/default/images/icon_8.png" width="16" height="11" align="absmiddle" />
                                                中国 
            </div>
        </div>
        <div class="topbox1">
              <a target="_blank" href="http://hudson.tmall.com/shop/view_shop.htm?spm=a1z10.4.w5001-4530759858.6.yRhs4b&scene=taobao_shop">官方商城</a>
            关注我们：<a target="_blank" rel="nofollow" href="http://weibo.com/1hudson">
                <img src="http://www.hudson.com/skin/default/images/icon_4.png" width="16" height="16" align="absmiddle" alt="新浪微博" title="新浪微博" />
              </a> 
              <a target="_blank" rel="nofollow" href="http://t.qq.com/hudson2006">
                    <img src="http://www.hudson.com/skin/default/images/icon_5.png" width="16" height="16" align="absmiddle" alt="腾讯微博" title="腾讯微博" />
              </a>
              <a rel="nofollow" href="http://www.jiathis.com/share/" class="jiathis" target="_blank">
                  <img src="http://www.hudson.com/skin/default/images/icon_6.png" width="16" height="16" align="absmiddle" />
              </a>
       </div>
    </div>
</div>
<div class="head">
    <div class="navbg" id="navbg">
    </div>
    <div class="wrap">
        <div class="headone">
            <h1>
                <a href="http://www.hudson.com/">
                    <img src="http://www.hudson.com/skin/default/images/logo.png"/></a></h1>
            <div class="nav">
                <ul class="navlist">
                    <li><a href="http://www.hudson.com/">首 页</a></li>
                </ul>
                <ul class="navlist" id="nav">
                    <li class="lihover"><a href="http://www.hudson.com/zjhdx/2014-02-22/6.html">走进哈德逊</a>
                        <div class="navbox">
                            <p class="boxlist">
                               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select titleurl,title from phome_ecms_news where classid=2 order by id asc',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							    <span><a href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></span>
							   <?php
}
}
?>
                            </p>
                        </div>
                    </li>
                    <li class="lihover"><a href="http://www.hudson.com/xwzx/hdzq/">新闻资讯</a>
                        <div class="navbox">
                            <p class="boxlist" style="padding-left: 50px;">
                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classname,classpath from phome_enewsclass where bclassid=3 order by classid asc',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							      <span><a href="http://www.hudson.com/<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></span>
							    <?php
}
}
?>
                            </p>
                        </div>
                    </li>
                    <li class="bg lihover"><a href="http://www.hudson.com/cpyfw/zxcp/">产品与服务</a>
                        <div class="navbox">
                            <p class="boxlist" style="padding-left: 180px;">
                               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from phome_enewsclass where bclassid=4 order by classid asc',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							     <?php 
								     if($bqr[classid]==13){
								     	$bqr[classpath] = 'cpyfw/zxfk/2014-03-02/65.html';
								     }
								   ?>
							     <span><a href="http://www.hudson.com/<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></span>
							   <?php
}
}
?>
                            </p>
                        </div>
                    </li>
                    <li class="bg lihover"><a href="http://www.hudson.com/cptyg/alzs/">产品体验馆</a>
                        <div class="navbox">
                            <p class="boxlist" style="padding-left: 310px;">
                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from phome_enewsclass where bclassid=5 order by classid asc',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							     <?php 
								     if($bqr[classid]==15){
								     	$bqr[classpath] = 'cptyg/shtyg/2014-03-07/24.html';
								     }
								   ?>
							     <span><a href="http://www.hudson.com/<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></span>
							    <?php
}
}
?>
                            </p>
                        </div>
                    </li>
                    <li class="bg lihover"><a href="http://www.hudson.com/rlzy/">人力资源</a>
                        <div class="navbox">
                            <p class="boxlist" style="padding-left: 280px;">
                               <span><a href="http://www.hudson.com/rlzy/rcg/2014-03-02/44.html">人才观</a></span>
                               <span><a href="http://www.hudson.com/rlzy/zwfz/2014-03-02/45.html">职位发展</a></span>
                               <span><a href="http://www.hudson.com/rlzy/xcfl/2014-03-02/46.html">薪酬福利</a></span>
                               <span><a href="http://www.hudson.com/rlzy/ypzn/2014-03-02/47.html">应聘指南</a></span>
                               <span><a href="http://www.hudson.com/rlzy/zwlb/">职位列表</a></span>
                               <span><a href="http://www.hudson.com/rlzy/wzhdx/">我在哈德逊</a></span>
                            </p>
                        </div>
                    </li>
                    <li class="lihover"><a href="http://hudson.tmall.com"  style="font-weight:bold; color:#F00; font-size:20px;" target="_blank">逛商城</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 头部结束   -->
     <div class=" wrap">
   <div class="home">当前位置：<?=$grurl?></div>
     
     
</div>
    <div class="cls">
    </div>
    <div class="main">
        <div class="txwrap" style="position:relative;">
        <div class="shang"><a href="http://www.hudson.com/cptyg/shtyg/2014-02-25/1.html"><img src="http://www.hudson.com/skin/default/images/b_left.gif" /></a></div>
          <div class="xia"><a href="http://www.hudson.com/qt/2014-04-04/181.html"><img src="http://www.hudson.com/skin/default/images/b_right.gif" /></a></div>
            <div class="tixian_tt">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title from phome_ecms_photo where classid=15 order by id asc limit 4',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                 <?php 
                   $sdcss = $bqno==4?'margin-right: 0':'';
                   $dascss = $bqno==1?'hover':'';
                 ?>
			     <span class="<?=$dascss?>" onclick="setTab('showbox',<?=$bqno?>,4)" id="showbox<?=$bqno?>" style="<?=$sdcss?>"><a href="javascript:"><?=$bqr[title]?></a><img src="http://www.hudson.com/skin/default/images/tx<?=$bqno?>.jpg" /></span>
			    <?php
}
}
?>
            </div>
        </div>
        <div class="txwrap2">
            <div class="tixian2">
                <div class="tixianbg">
                </div>
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select id from phome_ecms_photo where classid=15 order by id asc limit 4',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                      <?php 
                       $numcss = $bqno==1?'':'none';
                                              $newbook=$empire->query("select morepic from phome_ecms_photo_data_1 where id=$bqr[id]");
                                              while($r=$empire->fetch($newbook)) {
                                              	 $arr = explode('::::::', $r[morepic]);
                                              }
                      ?>
                            <div id="con_showbox_<?=$bqno?>" style="display:<?=$numcss?>">
                                <img src="<?=$arr['0']?>" width="932" height="540" id="dailyImage<?=$bqno?>" />
                                <div class="tixian_show">
                                    <div class="txslide" id="slide<?=$bqno?>">
                                        <span class="as1"><a class="gray press" id="pre<?=$bqno?>" hidefocus href="javascript:;"></a>
                                        </span>
                                        <div class="pic-container">
                                             <ul style='width:656px'>
                                             <?php 
												  $i = 0;
												  foreach($arr as $v){
                                                     	if($i%2==0){
                                                     		$i++;
                                                     		continue;
                                                     	}
                                                     	$v = str_replace('rn', '', $v);
                                                     	$c = $i==1?'cur':'';
                                                     	echo '<li onclick="javascript:productclick('."'".$v."'".",'100000008549212','$bqno');".'" class="'.$c.'">';
                                                     	echo '<img src="'.$v.'" />';
                                                     	echo '</li>';
                                                     	if($i==1){
                                                     		echo '<script type="text/javascript"> document.getElementById("dailyImage'.$bqno.'").src="'.$v.'"; </script>';
                                                     	}
                                                     	$i++;
                                                     }
                                                     $arr = '';
												 ?>
                                               
                                             </ul>

                                          </div>          
                                          <span class="as2"><a class="nextss" id="next<?=$bqno?>" hidefocus href="javascript:;"></a>    </span>                
                                          
                                            </div>               
                                          </div>              
                            </div>
                            <?php
}
}
?>
                        
            </div>
        </div>
    </div>
    <div class="cls">
    </div>
    <!--foot star-->
    
<!-- 尾部开始 -->
      <div class="foot">
<div class="wrap">
		<div class="fm_box">
            	<h3>公司动态</h3>
                <ul>
                	
                	        <li><a href="http://www.hudson.com/xwzx/hdzq/">活动专区</a></li>
                	    
                	        <li><a href="http://www.hudson.com/xwzx/qyxw/">企业新闻</a></li>
                	    
                	        <li><a href="http://www.hudson.com/xwzx/axgy/">爱心公益</a></li>
                	    
                </ul>
            </div>
            <div class="fm_box">
            	<h3>关于哈德逊</h3>
                <ul>
                	
                	        <li><a href="http://www.hudson.com/">董事长介绍</a></li>
                	    
                	        <li><a href="http://www.hudson.com/zjhdx/2014-02-22/6.html">企业简介</a></li>
                	    
                	        <li><a href="http://www.hudson.com/zjhdx/2014-02-22/7.html">企业文化</a></li>
                	    
                	        <li><a href="http://www.hudson.com/zjhdx/2014-02-22/8.html">发展历程</a></li>
                	    
                	        <li><a href="http://www.hudson.com/zjhdx/2014-02-22/11.html">联系我们</a></li>
                	        
                	        <li><a href="http://www.hudson.com/zjhdx/2014-02-22/10.html">哈德逊荣誉</a></li>
                	    
                </ul>
            </div>
            
            <div class="fm_box">
            	<h3>最新职位</h3>
                <ul>
                   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title,titleurl from phome_ecms_news where classid=20 order by id desc limit 5',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			         <li><a href="<?=$bqr[titleurl]?>" title="<?=$bqr[title]?>"><?=esub($bqr[title],14)?></a></li>
			       <?php
}
}
?>

                </ul>
            </div>
            <div class="fm_box">
            	<h3>人力资源</h3>
                <ul>
                	     <li><a href="http://www.hudson.com/rlzy/rcg/2014-03-02/44.html">人才观</a></li>
                	    
                	     <li><a href="http://www.hudson.com/rlzy/zwfz/2014-03-02/45.html">职位发展</a></li>
                	    
                	     <li><a href="http://www.hudson.com/rlzy/xcfl/2014-03-02/46.html">薪酬福利</a></li>
                	    
                	     <li><a href="http://www.hudson.com/rlzy/ypzn/2014-03-02/47.html">应聘指南</a></li>
                	    
                	     <li><a href="">职位列表</a></li>
                	    
                	     <li><a href="http://www.hudson.com/rlzy/wzhdx/">我在哈德逊</a></li>
                </ul>
            </div>
            <div class="fm_box" style="margin:0">
            	<h3>产品</h3>
                <ul>
                  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classname,classpath from phome_enewsclass where bclassid=11 order by classid desc limit 7',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			         <li><a href="http://www.hudson.com/<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></li>
			       <?php
}
}
?>
                </ul>
            </div>
        </div>
   
  <div class="mfoot" style=" padding-top: 20px;">
  <div class="warp" style=" text-align:center; border-bottom:#999 solid 1px;">
  友情链接：
<a href="http://www.hudsonbuy.com/ " target="_blank">建材网上商城</a>
                  <a href="http://www.chinagzn.com" target="_blank">硅藻泥</a>
                  <a href="http://www.ganji.com/nuanqi" target="_blank">暖气</a>
                  <a href="http://www.china-lz.com" target="_blank">天津办公家具</a>
                  <a href="http://www.xuexi111.com/s/jiaju" target="_blank">家居装修设计</a>
                  <a href="http://www.reaz.com.cn" target="_blank">高端家居品牌</a>
                  <a href="http://xining.66zhuang.com" target="_blank">西宁装修网</a>
                  <a href="http://www.lejj.com/cizhuan/" target="_blank">瓷砖</a>
                  <a href="http://www.meilele.com/category-cizhuan/" target="_blank">瓷砖</a>
                  <a href="http://jxyczs.cn/" target="_blank">南昌装修公司</a>
                  <a href="http://beijing.kuyiso.com/jiancai/" target="_blank">北京建材加盟</a>
                  <a href="http://www.qianlima.com/zb/area_304/" target="_blank">佛山招标网</a>
                  <a href="http://www.whczs.com/" target="_blank">南宁装修公司</a>
                  <a href="http://huiz.pupuwang.com/" target="_blank">惠州商铺转让网</a>
                  <a href="http://world.fang.com/Singapore/" target="_blank">新加坡买房</a>
                  <a href="http://zz.huizhuang.com/" target="_blank">郑州装修网</a>
                  <a href="http://jiancai.11467.com/" target="_blank">中国建筑建材网</a>
                  <a href="http://bj.ganji.com/chuguijiancai/ " target="_blank">北京橱柜公司</a>
                  <a href="http://tj.ganji.com/dengshi/ " target="_blank">天津灯饰公司</a>
                  <a href="http://www.mfj95.com " target="_blank">瓷砖美缝剂</a>
                  <a href="http://www.zgdbw.cn/ " target="_blank">复合地板品牌 </a>


















        <script type="text/javascript" src="http://links.webscan.360.cn/index/index/b447b66a05b05015e513cd4b065ed8f6"></script>
  </div>
 	<div class="wrap">
   佛山哈德逊股份有限公司&copy;版权所有 保留所有权利 <a href="http://www.hudson.com/wzdt.htm" target="_blank">网站地图</a> 展销中心：+86-757-82278159 客户服务中心：+86-757-82278159 
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Faed9e7d575a1cc8a944631fa5314681e' type='text/javascript'%3E%3C/script%3E"));
</script>
   <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5915010'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/stat.php%3Fid%3D5915010%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><br/>
   </div>
   </div>
</div> 
    <!-- 尾部结束 -->
 
     
    <!--foot over-->

    <script type="text/javascript" src="http://www.hudson.com/skin/default/js/prolist2.js"></script>

    <script type="text/javascript">
$(function() {
	$('.flashBody').hover(
		function() {
			$(this).stop();
			$(this).animate(
				{height: '270'}, 
				{duration: "normal"}
			); 
		},
		function() {
			$(this).stop();
			$(this).animate(
				{height: '30'}, 
				{duration: "normal"}
			); 
		}
	);


	

});


    </script>

</body>
</html>