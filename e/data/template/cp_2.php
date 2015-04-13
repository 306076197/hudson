<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?></td>
        </tr>
      </table></td>
</tr>
</table>
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
                   [e:loop={'select title,titleurl from phome_ecms_news where classid=20 order by id desc limit 5',2,24,0}]
			         <li><a href="<?=$bqr[titleurl]?>" title="<?=$bqr[title]?>"><?=esub($bqr[title],14)?></a></li>
			       [/e:loop]

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
                  [e:loop={'select classname,classpath from phome_enewsclass where bclassid=11 order by classid desc limit 7',2,24,0}]
			         <li><a href="http://www.hudson.com/<?=$bqr[classpath]?>"><?=$bqr[classname]?></a></li>
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