<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="[!--news.url--]skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="" />
</div>
<div class="tophead">
<script type="text/javascript" src="http://115.29.242.148/qqonweb/hudsonhome.js" charset="utf-8"></script> 
<script type="text/javascript">
        function checkAll()
         {
            var search= document.getElementById("txtSelAll").value;



            if (search == "关键字" || search == "")
           {
               alert("请输入关键字");
               return false;
           }
           window.location="/aid/search.aspx?key="+search;
           
         }
         $(document).ready(function(){
          $("#txtSelAll").keyup(function(){
       
    if(event.keyCode==13||window.event.which==13)
   {   
       
        $("#btnSearch").click(); 
       
    }
    
 
 });
 });

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
                <img src="[!--news.url--]skin/default/images/icon_8.png" width="16" height="11" align="absmiddle" />
                                                中国 
            </div>
        </div>
        <div class="topbox1">
              <a target="_blank" href="http://hudson.tmall.com/shop/view_shop.htm?spm=a1z10.4.w5001-4530759858.6.yRhs4b&scene=taobao_shop">官方商城</a>
            关注我们：<a target="_blank" rel="nofollow" href="http://weibo.com/1hudson">
                <img src="[!--news.url--]skin/default/images/icon_4.png" width="16" height="16" align="absmiddle" alt="新浪微博" title="新浪微博" />
              </a> 
              <a target="_blank" rel="nofollow" href="http://t.qq.com/hudson2006">
                    <img src="[!--news.url--]skin/default/images/icon_5.png" width="16" height="16" align="absmiddle" alt="腾讯微博" title="腾讯微博" />
              </a>
              <a rel="nofollow" href="http://www.jiathis.com/share/" class="jiathis" target="_blank">
                  <img src="[!--news.url--]skin/default/images/icon_6.png" width="16" height="16" align="absmiddle" />
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
                <a href="[!--news.url--]">
                    <img src="[!--news.url--]skin/default/images/logo.png"/></a></h1>
            <div class="nav">
                <ul class="navlist">
                    <li><a href="[!--news.url--]">首 页</a></li>
                </ul>
                <ul class="navlist" id="nav">
                    <li class="lihover"><a href="[!--news.url--]zjhdx/2014-02-22/6.html">走进哈德逊</a>
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
                    <li class="lihover"><a href="[!--news.url--]xwzx/hdzq/">新闻资讯</a>
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
							      <span><a href="[!--news.url--]<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></span>
							    <?php
}
}
?>
                            </p>
                        </div>
                    </li>
                    <li class="bg lihover"><a href="[!--news.url--]cpyfw/zxcp/">产品与服务</a>
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
							     <span><a href="[!--news.url--]<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></span>
							   <?php
}
}
?>
                            </p>
                        </div>
                    </li>
                    <li class="bg lihover"><a href="[!--news.url--]cptyg/alzs/">产品体验馆</a>
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
							     <span><a href="[!--news.url--]<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></span>
							    <?php
}
}
?>
                            </p>
                        </div>
                    </li>
                    <li class="bg lihover"><a href="[!--news.url--]rlzy/">人力资源</a>
                        <div class="navbox">
                            <p class="boxlist" style="padding-left: 280px;">
                               <span><a href="[!--news.url--]rlzy/rcg/2014-03-02/44.html">人才观</a></span>
                               <span><a href="[!--news.url--]rlzy/zwfz/2014-03-02/45.html">职位发展</a></span>
                               <span><a href="[!--news.url--]rlzy/xcfl/2014-03-02/46.html">薪酬福利</a></span>
                               <span><a href="[!--news.url--]rlzy/ypzn/2014-03-02/47.html">应聘指南</a></span>
                               <span><a href="[!--news.url--]rlzy/zwlb/">职位列表</a></span>
                               <span><a href="[!--news.url--]rlzy/wzhdx/">我在哈德逊</a></span>
                            </p>
                        </div>
                    </li>
                    <li class="lihover"><a href="http://hudson.tmall.com"  style="font-weight:bold; color:#F00; font-size:20px;" target="_blank">逛商城</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td>[!--empirenews.listtemp--]<ul>
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5--></ul>
[!--empirenews.listtemp--]
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
                <td height="38"><div class="epages">[!--show.listpage--]</div></td>
</tr>
</table>
</td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('selfinfo',10,44,0,0,2,0);?> 
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
</tr>
</table></td>
</tr>
</table>
<div class="foot">
<div class="wrap">
		<div class="fm_box">
            	<h3>公司动态</h3>
                <ul>
                	
                	        <li><a href="[!--news.url--]xwzx/hdzq/">活动专区</a></li>
                	    
                	        <li><a href="[!--news.url--]xwzx/qyxw/">企业新闻</a></li>
                	    
                	        <li><a href="[!--news.url--]xwzx/axgy/">爱心公益</a></li>
                	    
                </ul>
            </div>
            <div class="fm_box">
            	<h3>关于哈德逊</h3>
                <ul>
                	
                	        <li><a href="[!--news.url--]">董事长介绍</a></li>
                	    
                	        <li><a href="[!--news.url--]zjhdx/2014-02-22/6.html">企业简介</a></li>
                	    
                	        <li><a href="[!--news.url--]zjhdx/2014-02-22/7.html">企业文化</a></li>
                	    
                	        <li><a href="[!--news.url--]zjhdx/2014-02-22/8.html">发展历程</a></li>
                	    
                	        <li><a href="[!--news.url--]zjhdx/2014-02-22/11.html">联系我们</a></li>
                	        
                	        <li><a href="[!--news.url--]zjhdx/2014-02-22/10.html">哈德逊荣誉</a></li>
                	    
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
                	     <li><a href="[!--news.url--]rlzy/rcg/2014-03-02/44.html">人才观</a></li>
                	    
                	     <li><a href="[!--news.url--]rlzy/zwfz/2014-03-02/45.html">职位发展</a></li>
                	    
                	     <li><a href="[!--news.url--]rlzy/xcfl/2014-03-02/46.html">薪酬福利</a></li>
                	    
                	     <li><a href="[!--news.url--]rlzy/ypzn/2014-03-02/47.html">应聘指南</a></li>
                	    
                	     <li><a href="">职位列表</a></li>
                	    
                	     <li><a href="[!--news.url--]rlzy/wzhdx/">我在哈德逊</a></li>
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
			         <li><a href="[!--news.url--]<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></li>
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
</body>
</html>