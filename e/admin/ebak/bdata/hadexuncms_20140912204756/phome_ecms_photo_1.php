<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo`;");
E_C("CREATE TABLE `phome_ecms_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` varchar(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titleurl` varchar(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` varchar(120) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `picsay` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=gbk");
E_D("replace into `phome_ecms_photo` values('1','15','0','1','0','0','2014-02-25','1','1','admin','0','0','1','0','0','0','0','1393335828','1398493492','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-02-25/1.html','1','1','1','','厨房','1393335783','/d/file/cptyg/shtyg/2014-04-10/small6841c6b63070e4802ce9c3e57dfab598.jpg','','厨房产品：\r\n名称：翡翠玉石（墙砖）\r\n型号：HDCW29-1\r\n尺寸：300*600（平方毫米）\r\n名称：翡翠玉石（地砖）\r\n型号：HDCW29-2\r\n尺寸：300*300（平方毫米）');");
E_D("replace into `phome_ecms_photo` values('2','15','0','0','0','0','2014-02-25','2','1','admin','0','0','1','0','0','0','0','1393335840','1398827918','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-02-25/2.html','1','1','1','','客厅','1393335830','/d/file/cptyg/shtyg/2014-03-07/f72f04371d19fa11fc54ff175e9b24ec.jpg','','名称：晶皇玉微晶石\r\n型号：HDJS8493\r\n尺寸：800*800（平方毫米）');");
E_D("replace into `phome_ecms_photo` values('3','15','0','0','0','0','2014-02-25','3','1','admin','0','0','1','0','0','0','0','1393335848','1398838352','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-02-25/3.html','1','1','1','','卧室','1393335842','/d/file/cptyg/shtyg/2014-03-07/7274fd165392c0e95557c8c5cc96a9c1.jpg','','名称：珊瑚玉全抛釉\r\n型号：HDPY129\r\n尺寸：800*800（平方毫米）');");
E_D("replace into `phome_ecms_photo` values('4','15','0','0','0','0','2014-02-25','4','1','admin','0','0','1','0','0','0','0','1393335864','1398839321','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-02-25/4.html','1','1','1','','浴室','1393335858','/d/file/cptyg/shtyg/2014-03-07/340e4b01f3609b2e3b0fa4e21f53aef7.jpg','','名称：水木纹\r\n型号：HDCW26-1，HDCW26-2\r\n尺寸：300*300，300*450（平方毫米）');");
E_D("replace into `phome_ecms_photo` values('5','10','0','0','0','0','2014-03-02','5','1','admin','0','0','1','0','0','0','0','1393747382','1394178382','1','0','0','','/cpyfw/zxcp/2014-03-02/5.html','1','1','1','','【哈德逊】浴室厕所卫生间地砖 防水 防滑 不透水厨卫瓷砖釉面砖','1393747343','/d/file/cpyfw/zxcp/2014-03-07/16fd8a69bd75726e81c2c0a9e34abd7c.jpg','','品牌: Hudson/哈德逊  型号: HDCW02 峰景石  图案: 仿石纹  适用对象: 室内地砖\r\n同城服务: 同城物流送货上门  计价单位: 片   风格: 简约现代');");
E_D("replace into `phome_ecms_photo` values('6','10','0','0','0','0','2014-03-02','6','1','admin','0','0','1','0','0','0','0','1393747454','1393864787','1','0','0','','/cpyfw/zxcp/2014-03-02/6.html','1','1','1','','【哈德逊】瓷砖花纹卫生间腰线 花片 厨房卫浴墙砖建材 瓷砖配件','1393747384','/d/file/cpyfw/zxcp/2014-03-04/7a274274da47be838ac74c3408ee8c31.jpg','','品牌: Hudson/哈德逊\r\n型号: HDHP03\r\n颜色分类: 腰线70*300 花片300*600\r\n瓷砖类型: 其他/other\r\n计价单位: 片');");
E_D("replace into `phome_ecms_photo` values('7','10','0','0','0','0','2014-03-04','7','2','zjy','0','0','1','0','0','0','0','1393865083','1393865083','1','0','0','','/cpyfw/zxcp/2014-03-04/7.html','1','1','1','','【哈德逊】阳台防滑瓷砖地砖 釉面砖墙砖地板砖 厨房瓷砖地砖','1393864897','/d/file/cpyfw/zxcp/2014-03-04/408075da21caf985ce0770061d36b639.jpg','','品牌: Hudson/哈德逊\r\n型号: HDYF3035\r\n颜色分类: 桔色300*300\r\n图案: 纯色\r\n适用对象: 室内地砖\r\n尺寸: 其它\r\n同城服务: 同城买家上门提货\r\n计价单位: 片\r\n风格: 田园');");
E_D("replace into `phome_ecms_photo` values('8','10','0','0','0','0','2014-03-04','8','2','zjy','0','0','1','0','0','0','0','1393865554','1393865554','1','0','0','','/cpyfw/zxcp/2014-03-04/8.html','1','1','1','','【哈德逊】红色玻璃马赛克瓷砖 masaike背景墙 卫生间 地砖贴纸','1393865124','/d/file/cpyfw/zxcp/2014-03-04/ff65fd8ec27da1909da94818ed2642a7.jpg','','颜色分类: 红色磨砂 红色亮光\r\n适用对象: 室内地砖\r\n材质: 玻璃\r\n品牌: Hudson/哈德逊\r\n型号: HD8R08\r\n计价单位: 片\r\n同城服务: 同城买家上门提货\r\n风格: 欧式');");
E_D("replace into `phome_ecms_photo` values('9','10','0','0','0','0','2014-03-04','9','2','zjy','0','0','1','0','0','0','0','1393865818','1393865818','1','0','0','','/cpyfw/zxcp/2014-03-04/9.html','1','1','1','','【哈德逊】地砖800 800全抛釉 客厅瓷砖 踢脚线 欧式背景墙仿古砖','1393865655','/d/file/cpyfw/zxcp/2014-03-04/89b0726995a1d2e612489e036c99d840.jpg','','品牌: Hudson/哈德逊\r\n型号: HDPY03\r\n适用对象: 室内地砖\r\n计价单位: 片\r\n纹理: 仿石纹\r\n同城服务: 同城买家上门提货');");
E_D("replace into `phome_ecms_photo` values('10','10','0','0','0','0','2014-03-04','10','2','zjy','0','0','1','0','0','0','0','1393867216','1393867216','1','0','0','','/cpyfw/zxcp/2014-03-04/10.html','1','1','1','',' 【哈德逊】新品 瓷砖300 阳台厨卫地砖 仿古地板砖卫生间厨房磁砖','1393866979','/d/file/cpyfw/zxcp/2014-03-04/989e8d618692a0779041c23dbdfdc6f3.jpg','','品牌: Hudson/哈德逊\r\n型号: hd3018 青花石\r\n适用对象: 室内地砖\r\n计价单位: 片\r\n纹理: 仿石纹\r\n同城服务: 同城物流送货上门');");
E_D("replace into `phome_ecms_photo` values('11','10','0','0','0','0','2014-03-04','11','2','zjy','1','0','1','0','0','0','0','1393867379','1395042351','1','0','0','','/cpyfw/zxcp/2014-03-04/11.html','1','1','1','','【哈德逊】微晶石电视背景墙砖 地砖800800 玉石 客厅瓷砖 拼花','1393867218','/d/file/cpyfw/zxcp/2014-03-04/a9284b470508d983c9964cc4e090ee7c.jpg','','品牌: Hudson/哈德逊\r\n型号: HDJS8825\r\n颜色分类: 黄色\r\n适用对象: 室内地砖\r\n同城服务: 同城买家上门提货\r\n计价单位: 片\r\n尺寸: 800*800\r\n风格: 简约现代');");
E_D("replace into `phome_ecms_photo` values('12','10','0','0','0','0','2014-03-04','12','2','zjy','0','0','1','0','0','0','0','1393867544','1393867544','1','0','0','','/cpyfw/zxcp/2014-03-04/12.html','1','1','1','','【哈德逊】卫生间瓷砖地砖 不透水釉面砖 厨房瓷砖防滑地砖','1393867381','/d/file/cpyfw/zxcp/2014-03-04/62f9b117c1b33ab431229e61aae99c43.jpg','','牌: Hudson/哈德逊\r\n型号: HDCW32-2地砖\r\n颜色分类: 浅黄色地砖300*300\r\n图案: 仿石纹\r\n适用对象: 室内地砖\r\n尺寸: 其它\r\n同城服务: 同城买家上门提货\r\n计价单位: 片\r\n风格: 简约现代');");
E_D("replace into `phome_ecms_photo` values('13','10','0','0','0','0','2014-03-04','13','2','zjy','1','0','1','0','0','0','0','1393867758','1395042342','1','0','0','','/cpyfw/zxcp/2014-03-04/13.html','1','1','1','','【哈德逊】卫生间瓷砖地砖 釉面砖墙砖地板砖 厨房瓷砖防滑地砖','1393867546','/d/file/cpyfw/zxcp/2014-03-07/7fa99297a89f40b7ef0ce589f6fd9178.jpg','','品牌: Hudson/哈德逊\r\n型号: HDCW27-3\r\n颜色分类: 亮面深蓝墙砖（300*450） 腰线300*150 亮面淡蓝墙砖（300*450） 花片300*450 地砖（300*300）\r\n图案: 仿石纹\r\n适用对象: 室内地砖\r\n尺寸: 其它\r\n同城服务: 同城买家上门提货\r\n计价单位: 片\r\n风格: 简约现代');");
E_D("replace into `phome_ecms_photo` values('14','10','0','0','0','0','2014-03-04','14','2','zjy','0','0','1','0','0','0','0','1393867954','1394179071','1','0','0','','/cpyfw/zxcp/2014-03-04/14.html','1','1','1','','【哈德逊】地中海仿古砖防滑地板砖 卫生间瓷砖地砖 厨房瓷砖墙砖','1393867760','/d/file/cpyfw/zxcp/2014-03-07/15375beaa9c435ded15780c875e2c140.jpg','','品牌: Hudson/哈德逊\r\n型号: HDFG05 塞纳\r\n颜色分类: 棕色150*150 暖灰色150*150 浅黄色150*150 桔色150*150 浅橙色150*150 天蓝色150*150 军绿色\r\n尺寸: 其它\r\n适用对象: 室内地砖\r\n计价单位: 片\r\n纹理: 仿石纹\r\n同城服务: 同城买家上门提货');");
E_D("replace into `phome_ecms_photo` values('15','10','0','0','0','0','2014-03-04','15','2','zjy','1','0','1','0','0','0','0','1393868164','1395042335','1','0','0','','/cpyfw/zxcp/2014-03-04/15.html','1','1','1','',' 【哈德逊】欧式地砖600600 卧室地板砖 防滑客厅地砖 全抛釉 瓷','1393867957','/d/file/cpyfw/zxcp/2014-03-07/eb1c902bd5d6eac84072b49773a56d90.jpg','','品牌: Hudson/哈德逊\r\n型号: HDPY02\r\n适用对象: 室内地砖\r\n同城服务: 同城买家上门提货\r\n计价单位: 片\r\n风格: 欧式');");
E_D("replace into `phome_ecms_photo` values('16','10','0','0','0','0','2014-03-04','16','2','zjy','0','0','1','0','0','0','0','1393868493','1394178491','1','0','0','','/cpyfw/zxcp/2014-03-04/16.html','1','1','1','',' 【哈德逊】马赛克瓷砖 玻璃马赛克 背景墙 厨房卫生间瓷砖墙砖','1393868166','/d/file/cpyfw/zxcp/2014-03-07/2c33b059989875fae27235ae93cbe5eb.jpg','','尺寸: 30×30\r\n颜色分类: 绿色 白色 天蓝色\r\n适用对象: 内墙\r\n材质: 玻璃\r\n品牌: Hudson/哈德逊\r\n型号: 8rno5\r\n计价单位: 片');");
E_D("replace into `phome_ecms_photo` values('23','15','0','0','0','0','2014-03-07','23','2','zjy','0','0','1','0','0','0','0','1394126488','1397104384','1','0','0','','/cptyg/shtyg/2014-03-07/23.html','1','1','1','','书房','1394126448','/d/file/cptyg/shtyg/2014-04-10/smalldafc769492413bf17db7fa1e307cd2d8.jpg','','名称：非洲花梨木\r\n型号：HDMW07\r\n尺寸：150*600（平方毫米）');");
E_D("replace into `phome_ecms_photo` values('22','15','0','0','0','0','2014-03-07','22','2','zjy','0','0','1','0','0','0','0','1394126446','1398665459','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-03-07/22.html','1','1','1','','餐厅','1394126343','/d/file/cptyg/shtyg/2014-03-07/c4183edf9659d45a7f8190417e0341e5.jpg','','名称：宾夕法尼亚\r\n型号：HDFG14\r\n尺寸：300*600，600*600（平方毫米）');");
E_D("replace into `phome_ecms_photo` values('24','15','0','0','0','0','2014-03-07','24','2','zjy','0','0','1','0','0','0','0','1394126533','1398827738','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-03-07/24.html','1','1','1','','阳台','1394126490','/d/file/cptyg/shtyg/2014-03-07/16cb2c7556cd1551b199514ff60ce7a1.jpg','/d/file/cptyg/shtyg/2014-04-28/6010df97bdd44a0352b6549a7b26b928.jpg','名称：夏威夷沙滩石\r\n型号：HDFG20\r\n尺寸：300*300（平方毫米）');");
E_D("replace into `phome_ecms_photo` values('25','15','0','0','0','0','2014-03-07','25','2','zjy','0','0','1','0','0','0','0','1394126588','1398661373','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-03-07/25.html','1','1','1','','走廊','1394126535','/d/file/cptyg/shtyg/2014-03-07/80d8d8330e3b8d235dcaf700cf9a6352.jpg','/d/file/cptyg/shtyg/2014-04-28/43ecdeae55d60ea01046b5f5c9b7bb03.jpg','名称：莎贝拉\r\n型号：AP060121\r\n尺寸：600*600（平方毫米）');");

@include("../../inc/footer.php");
?>