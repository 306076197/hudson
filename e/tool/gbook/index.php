<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=12;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>留言板 - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$bname?>" />
<meta name="description" content="<?=$bname?>" />
<link href="http://www.hudsonhome.cn/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://www.hudsonhome.cn/skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<!-- 页头 -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%">
<!-- 登录 -->
<script>
document.write('<script src="http://www.hudsonhome.cn/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
</script>
</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">加入收藏</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hudsonhome.cn/')" href="#ecms">设为首页</a> | <a href="http://www.hudsonhome.cn/e/member/cp/">会员中心</a> | <a href="http://www.hudsonhome.cn/e/DoInfo/">我要投稿</a> | <a href="http://www.hudsonhome.cn/e/web/?type=rss2" target="_blank">RSS<img src="http://www.hudsonhome.cn/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="http://www.hudsonhome.cn/"><img src="http://www.hudsonhome.cn/skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="http://www.hudsonhome.cn/skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- 导航tab选项卡 -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global"><ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/">首页</a></li>
        <li id="tabnav_btn_1" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/news/">新闻中心</a></li>
        <li id="tabnav_btn_2" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/download/">下载中心</a></li>
        <li id="tabnav_btn_3" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/movie/">影视频道</a></li>
        <li id="tabnav_btn_4" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/shop/">网上商城</a></li>
        <li id="tabnav_btn_5" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/flash/">FLASH频道</a></li>
        <li id="tabnav_btn_6" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/photo/">图片频道</a></li>
        <li id="tabnav_btn_7" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/article/">文章中心</a></li>
        <li id="tabnav_btn_8" onmouseover="tabit(this)"><a href="http://www.hudsonhome.cn/info/">分类信息</a></li>
      </ul></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>现在的位置：<a href=../../../>首页</a>&nbsp;>&nbsp;<?=$bname?>
</td>
</tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
	<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
			<tr>
				<td align="center" bgcolor="#E1EFFB"><strong><?=$bname?></strong></td>
			</tr>
			<tr>
				<td align="left" valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
							<td height="100%" valign="top" bgcolor="#FFFFFF"> 
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#F4F9FD" class="tableborder">
										<tr class="header">
											<td width="55%" height="23">发布者: <?=$r[name]?> </td>
											<td width="45%">发布时间: <?=$r[lytime]?> </td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23" colspan="2"><table border="0" width="100%" cellspacing="1" cellpadding="8" bgcolor='#cccccc'>
													<tr>
														<td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> <?=$r[lytext]?> </td>
													</tr>
												</table>
												
<?
if($r[retext])
{
?>

												<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
													<tr>
														<td><img src="../../data/images/regb.gif" width="18" height="18" /><strong><font color="#FF0000">回复:</font></strong> <?=$r[retext]?> </td>
													</tr>
												</table>
												
<?
}
?> </td>
										</tr>
									</table>
								<br />
								
<?
}
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1">
									<tr>
										<td>分页: <?=$listpage?></td>
									</tr>
								</table>
								<form action="../../enews/index.php" method="post" name="form1" id="form1">
									<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1"class="tableborder">
										<tr class="header">
											<td colspan="2" bgcolor="#F4F9FD"><strong>请您留言:</strong></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="20%">姓名:</td>
											<td width="722" height="23"><input name="name" type="text" id="name" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系邮箱:</td>
											<td height="23"><input name="email" type="text" id="email" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系电话:</td>
											<td height="23"><input name="mycall" type="text" id="mycall" /></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>留言内容(*):</td>
											<td height="23"><textarea name="lytext" cols="60" rows="12" id="lytext"></textarea></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23">&nbsp;</td>
											<td height="23"><input type="submit" name="Submit3" value="提交" />
											<input type="reset" name="Submit22" value="重置" />
											<input name="enews" type="hidden" id="enews" value="AddGbook" /></td>
										</tr>
									</table>
								</form></td>
						</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table></td>
</tr>
</table>
<div class="foot">
<div class="wrap">
		<div class="fm_box">
            	<h3>公司动态</h3>
                <ul>
                	
                	        <li><a href="http://www.hudsonhome.cn/xwzx/hdzq/">活动专区</a></li>
                	    
                	        <li><a href="http://www.hudsonhome.cn/xwzx/qyxw/">企业新闻</a></li>
                	    
                	        <li><a href="http://www.hudsonhome.cn/xwzx/axgy/">爱心公益</a></li>
                	    
                </ul>
            </div>
            <div class="fm_box">
            	<h3>关于哈德逊</h3>
                <ul>
                	
                	        <li><a href="http://www.hudsonhome.cn/">董事长介绍</a></li>
                	    
                	        <li><a href="http://www.hudsonhome.cn/zjhdx/2014-02-22/6.html">企业简介</a></li>
                	    
                	        <li><a href="http://www.hudsonhome.cn/zjhdx/2014-02-22/7.html">企业文化</a></li>
                	    
                	        <li><a href="http://www.hudsonhome.cn/zjhdx/2014-02-22/8.html">发展历程</a></li>
                	    
                	        <li><a href="http://www.hudsonhome.cn/zjhdx/2014-02-22/11.html">联系我们</a></li>
                	        
                	        <li><a href="http://www.hudsonhome.cn/zjhdx/2014-02-22/10.html">哈德逊荣誉</a></li>
                	    
                </ul>
            </div>
            
            <div class="fm_box">
            	<h3>最新职位</h3>
                <ul>
                   [e:loop={'select title,titleurl from phome_ecms_news where classid=20 order by id desc limit 5',2,24,0}]
			         <li><a href="<?=$bqr[titleurl]?>" title="<?=$bqr[title]?>"><?=esub($bqr[title],14)?></a></li>
			       [/e:loop]

                </ul>
            </div>
            <div class="fm_box">
            	<h3>人力资源</h3>
                <ul>
                	     <li><a href="http://www.hudsonhome.cn/rlzy/rcg/2014-03-02/44.html">人才观</a></li>
                	    
                	     <li><a href="http://www.hudsonhome.cn/rlzy/zwfz/2014-03-02/45.html">职位发展</a></li>
                	    
                	     <li><a href="http://www.hudsonhome.cn/rlzy/xcfl/2014-03-02/46.html">薪酬福利</a></li>
                	    
                	     <li><a href="http://www.hudsonhome.cn/rlzy/ypzn/2014-03-02/47.html">应聘指南</a></li>
                	    
                	     <li><a href="">职位列表</a></li>
                	    
                	     <li><a href="http://www.hudsonhome.cn/rlzy/wzhdx/">我在哈德逊</a></li>
                </ul>
            </div>
            <div class="fm_box" style="margin:0">
            	<h3>产品</h3>
                <ul>
                  [e:loop={'select classname,classpath from phome_enewsclass where bclassid=11 order by classid desc limit 7',2,24,0}]
			         <li><a href="http://www.hudsonhome.cn/<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></li>
			       [/e:loop]
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
   佛山哈德逊股份有限公司&copy;版权所有 保留所有权利 <a href="http://www.hudsonhome.cn/wzdt.htm" target="_blank">网站地图</a> 展销中心：+86-757-82278159 客户服务中心：+86-757-82278159 
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
<?php
db_close();
$empire=null;
?>