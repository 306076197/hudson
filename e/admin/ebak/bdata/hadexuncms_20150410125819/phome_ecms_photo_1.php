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
E_D("replace into `phome_ecms_photo` values('1','15','0','1','0','0','2014-02-25','1','1','admin','0','0','1','0','0','0','1','1393335828','1427855246','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/cp/','1','1','1','厨房瓷砖品牌,厨房瓷砖价格','厨房','1421473551','/d/file/cptyg/shtyg/2015-01-17/4202d3dcc7ac5c230e0573ffe074e816.jpg','','厨房产品：\r\n凝香玉、意大利瓷木、浅啡网、水木纹、蓝色格子、欧式淡雅、恋花石轮、云睿纹、天山雅兰');");
E_D("replace into `phome_ecms_photo` values('2','15','0','0','0','0','2014-02-25','2','1','admin','0','0','1','0','0','0','1','1393335840','1427942017','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/wjs/','1','1','1','客厅瓷砖品牌,客厅瓷砖价格','客厅','1427424029','/d/file/cptyg/shtyg/2015-01-19/a3c7a312dceafb7e4a6743f342ca6c0e.jpg','','哈德逊客厅瓷砖：\r\n法国红香槟、云海玉、圆角仿古砖、贵妃玉、金缕玉、浅啡网、英伦橡木、卡拉拉、挪威枫桦');");
E_D("replace into `phome_ecms_photo` values('3','15','0','0','0','0','2014-02-25','3','1','admin','0','0','1','0','0','0','1','1393335848','1427942257','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/qpy/','1','1','1','卧室瓷砖品牌,卧室瓷砖价格','卧室','1421488734','/d/file/cptyg/shtyg/2015-03-27/15b6297303f4d788124442d02201b030.jpg','','哈德逊卧室瓷砖：\r\n碧云玉石、非洲梨木、贵妃玉、晶皇玉、香槟玉、雅典玉、云贝石、云海玉');");
E_D("replace into `phome_ecms_photo` values('4','15','0','0','0','0','2014-02-25','4','1','admin','0','0','1','0','0','0','1','1393335864','1427855741','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/cp/','1','1','1','浴室瓷砖品牌,卫生间瓷砖价格','浴室','1421488932','/d/file/cptyg/shtyg/2015-01-19/11758ab67676bec3b3cdf7f76f906cbf.jpg','','哈德逊浴室瓷砖：\r\n巴黎印象、黄色格子、蓝色格子、卡拉拉、浅啡网、田园稻香、意大利瓷木云贝石、云海石');");
E_D("replace into `phome_ecms_photo` values('5','10','0','0','0','0','2014-03-02','5','1','admin','0','0','1','0','0','0','1','1393747382','1421207372','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/fangguz/2014-09-22/569.html','1','1','1','','【哈德逊】阳台装修瓷砖仿古砖 斑驳岁月','1420802906','/d/file/cpyfw/zxcp/2015-01-09/8f7e628879ee8eb7535e65af7d7f3c51.jpg','/d/file/cpyfw/zxcp/2015-01-09/8f7e628879ee8eb7535e65af7d7f3c51.jpg','品牌：Hudson/哈德逊\r\n型号：HD6k5002\r\n颜色分类：斑驳岁月\r\n尺寸：300*300\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：田园');");
E_D("replace into `phome_ecms_photo` values('6','10','0','0','0','0','2014-03-02','6','1','admin','0','0','1','0','0','0','1','1393747454','1421205750','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/cp/2014-04-25/190.html','1','1','1','','【哈德逊】卫生间厨房装修瓷砖 浅啡网','1420802902','/d/file/cpyfw/zxcp/2015-01-09/fdcf3263b4ea2ab4bfea77e732b830e2.jpg','/d/file/cpyfw/zxcp/2015-01-14/a0f627ba63b03f8c71dbf999444a9eb6.jpg','品牌：Hudson/哈德逊\r\n型号：HDCW29-1 HDCW29-2\r\n颜色分类：浅啡网600*300 翡翠玉300*300\r\n尺寸：其他\r\n使用对象：内墙\r\n计价单位：片\r\n图案：仿石纹\r\n风格：欧式');");
E_D("replace into `phome_ecms_photo` values('7','10','0','0','0','0','2014-03-04','7','2','zjy','0','0','1','0','0','0','1','1393865083','1420862160','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/cp/524.html','1','1','1','','【哈德逊】卫生间厨房装修瓷砖 蓝色格子','1420802899','/d/file/cpyfw/zxcp/2015-01-09/08eb180e84d9cb76285ec108107f372a.jpg','/d/file/cpyfw/zxcp/2015-01-09/08eb180e84d9cb76285ec108107f372a.jpg','品牌：Hudson/哈德逊\r\n型号：HDCW27-3\r\n颜色分类：亮面淡蓝墙砖450*300 亮面深蓝墙砖450*300 亚光地砖300*300 花片450*300 腰线300*150\r\n尺寸：其他\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：简约现代');");
E_D("replace into `phome_ecms_photo` values('8','10','0','0','0','0','2014-03-04','8','2','zjy','0','0','1','0','0','0','1','1393865554','1420862148','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/bhz/2015-01-08/1640.html','1','1','1','','【哈德逊】800*800玻化砖抛光砖瓷砖 黄色聚晶','1420801923','/d/file/cpyfw/zxcp/2015-01-09/3802336ae242dd2e1c17d14a3f8fe23b.jpg','/d/file/cpyfw/zxcp/2015-01-09/3802336ae242dd2e1c17d14a3f8fe23b.jpg','品牌：Hudson/哈德逊\r\n型号：HJ001 HJ201\r\n颜色分类：黄色聚晶800*800 白色聚晶800*800 黄色聚晶600*600 白色聚晶600*600\r\n尺寸：其他\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：欧式');");
E_D("replace into `phome_ecms_photo` values('9','10','0','0','0','0','2014-03-04','9','2','zjy','0','0','1','0','0','0','1','1393865818','1420862132','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/muwenz/2015-01-09/1693.html','1','1','1','','【哈德逊】600*150木纹砖瓷砖 非洲梨木','1420802894','/d/file/cpyfw/zxcp/2015-01-09/a0fcc169cbca9be77c853fda456e0121.jpg','/d/file/cpyfw/zxcp/2015-01-09/a0fcc169cbca9be77c853fda456e0121.jpg','品牌：Hudson/哈德逊\r\n型号：HDMW09(HDM15601 HDM15602 HDM15601 HDM15606 HDM15608 HDM15632)\r\n颜色分类：原木色 浅黄色 棕黄色 棕灰色 深棕色\r\n尺寸：600*150\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿实木\r\n风格：美式乡村');");
E_D("replace into `phome_ecms_photo` values('10','10','0','0','0','0','2014-03-04','10','2','zjy','0','0','1','0','0','0','1','1393867216','1420862118','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/fangguz/2014-09-23/584.html','1','1','1','',' 【哈德逊】仿古砖瓷砖 罗马名爵','1420802883','/d/file/cpyfw/zxcp/2015-01-09/2967f065316bb02bae8999e2bc82139f.jpg','/d/file/cpyfw/zxcp/2015-01-09/2967f065316bb02bae8999e2bc82139f.jpg','品牌：Hudson/哈德逊\r\n型号：HDFG-81 HDFG-82 HDFG-83 HDFG-84 HDFG-85\r\n颜色分类：杏子色450*450 琥珀色450*450 青褐色450*450 铅丹色450*450 赤丹色450*450\r\n尺寸：450*450\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：地中海');");
E_D("replace into `phome_ecms_photo` values('11','10','0','0','0','0','2014-03-04','11','2','zjy','1','0','1','0','0','0','1','1393867379','1421203436','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/wjs/2014-09-18/535.html','1','1','1','','【哈德逊】800*800微晶石瓷砖 雅典玉','1420861689','/d/file/cpyfw/zxcp/2015-01-14/97b3a0aa17479808070d043702f7d6ec.jpg','/d/file/cpyfw/zxcp/2015-01-14/97b3a0aa17479808070d043702f7d6ec.jpg','品牌：Hudson/哈德逊\r\n型号：HDJS810\r\n颜色分类：雅典玉\r\n尺寸：800*800\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：简约现代');");
E_D("replace into `phome_ecms_photo` values('12','10','0','0','0','0','2014-03-04','12','2','zjy','0','0','1','0','0','0','1','1393867544','1420862064','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/qpy/2014-09-18/533.html','1','1','1','','【哈德逊】800*800全抛釉瓷砖 贵妃玉','1420802868','/d/file/cpyfw/zxcp/2015-01-09/5a281c3de67561075d98623bb0418633.jpg','/d/file/cpyfw/zxcp/2015-01-09/5a281c3de67561075d98623bb0418633.jpg','品牌：Hudson/哈德逊\r\n型号：HDPY03\r\n颜色分类：贵妃玉800*800\r\n尺寸：800*800\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：简约现代');");
E_D("replace into `phome_ecms_photo` values('13','10','0','0','0','0','2014-03-04','13','2','zjy','1','0','1','0','0','0','1','1393867758','1420862048','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/qpy/2015-01-06/1632.html','1','1','1','','【哈德逊】800*800全抛釉瓷砖 缅甸翡翠玉','1420861695','/d/file/cpyfw/zxcp/2015-01-09/0f902f9ba2e7950cfa26ce174fcbaab3.jpg','/d/file/cpyfw/zxcp/2015-01-09/0f902f9ba2e7950cfa26ce174fcbaab3.jpg','品牌：Hudson/哈德逊\r\n型号：HDPY16\r\n颜色分类：浅绿色800*800 浅黄色800*800\r\n尺寸：800*800\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：现代中式');");
E_D("replace into `phome_ecms_photo` values('14','10','0','0','0','0','2014-03-04','14','2','zjy','0','0','1','0','0','0','1','1393867954','1420862029','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/wjs/2014-03-07/133.html','1','1','1','','【哈德逊】800*800微晶石瓷砖 金缕玉','1420802864','/d/file/cpyfw/zxcp/2015-01-09/aa0351fc36c971ff1b199cafe23325ec.jpg','/d/file/cpyfw/zxcp/2015-01-09/aa0351fc36c971ff1b199cafe23325ec.jpg','品牌：Hudson/哈德逊\r\n型号：HDJS8829\r\n颜色分类：金缕玉\r\n尺寸：800*800\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：简约现代');");
E_D("replace into `phome_ecms_photo` values('15','10','0','0','0','0','2014-03-04','15','2','zjy','1','0','1','0','0','0','1','1393868164','1420861991','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/wjs/2014-03-07/131.html','1','1','1','','【哈德逊】800*800微晶石瓷砖 云海玉','1420861699','/d/file/cpyfw/zxcp/2015-01-09/7f4478d2d37c6b71566eec8672d2acf0.jpg','/d/file/cpyfw/zxcp/2015-01-09/7f4478d2d37c6b71566eec8672d2acf0.jpg','品牌：Hudson/哈德逊\r\n型号：HDJS8825\r\n颜色分类：黄色800*800\r\n尺寸：800*800\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：简约现代');");
E_D("replace into `phome_ecms_photo` values('16','10','0','0','0','0','2014-03-04','16','2','zjy','0','0','1','0','0','0','1','1393868493','1420862008','1','0','0','','http://www.hudsonhome.cn/cpyfw/cpfl/wjs/2014-09-19/549.html','1','1','1','',' 【哈德逊】800*800微晶石瓷砖 云贝石','1420802857','/d/file/cpyfw/zxcp/2015-01-09/ffa41ac55244629fc6b2263fcbdca3dc.jpg','/d/file/cpyfw/zxcp/2015-01-09/413a94b48558485f85e5b17b9ac2ba2e.jpg','品牌：Hudson/哈德逊\r\n型号：HDJS864\r\n颜色分类：黄色\r\n尺寸：800*800\r\n使用对象：室内地砖\r\n计价单位：片\r\n图案：仿石纹\r\n风格：欧式');");
E_D("replace into `phome_ecms_photo` values('23','15','0','0','0','0','2014-03-07','23','2','zjy','0','0','1','0','0','0','0','1394126488','1427856364','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-03-07/23.html','1','1','1','','书房','1421629378','/d/file/cptyg/shtyg/2015-01-19/e1b4ee2f04a8d716f46383be26ef58c9.jpg','','书房瓷砖：巴黎印象、缅甸玉、雅典玉、英伦橡木');");
E_D("replace into `phome_ecms_photo` values('22','15','0','0','0','0','2014-03-07','22','2','zjy','0','0','1','0','0','0','0','1394126446','1427855509','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-03-07/22.html','1','1','1','','餐厅','1421629011','/d/file/cptyg/shtyg/2015-01-19/2d5864bf31b0551dc95a7ef0a9a0286c.jpg','','餐厅瓷砖：非洲梨木、巴黎印象、翡翠玉石、昆仑玉、索菲米亚、雅典玉、云贝石、云海玉、香槟玉');");
E_D("replace into `phome_ecms_photo` values('24','15','0','0','0','0','2014-03-07','24','2','zjy','0','0','1','0','0','0','0','1394126533','1427856269','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-03-07/24.html','1','1','1','','阳台','1421629488','/d/file/cptyg/shtyg/2015-01-19/69d4d455b3a5091b45aa9af3bdfc6a97.jpg','/d/file/cptyg/shtyg/2015-01-19/69d4d455b3a5091b45aa9af3bdfc6a97.jpg','阳台装修瓷砖：斑驳岁月、岁月流砂、五彩仿古砖');");
E_D("replace into `phome_ecms_photo` values('25','15','0','0','0','0','2014-03-07','25','2','zjy','0','0','1','0','0','0','0','1394126588','1427856214','1','0','0','','http://www.hudsonhome.cn/cptyg/shtyg/2014-03-07/25.html','1','1','1','','走廊','1421629597','/d/file/cptyg/shtyg/2015-01-19/3198e9d24db9790d657c211158efd72d.jpg','/d/file/cptyg/shtyg/2015-01-19/3198e9d24db9790d657c211158efd72d.jpg','走廊瓷砖：巴黎印象、罗马名爵、雅典玉、云贝石');");

@include("../../inc/footer.php");
?>