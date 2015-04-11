<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo_index`;");
E_C("CREATE TABLE `phome_ecms_photo_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=gbk");
E_D("replace into `phome_ecms_photo_index` values('1','15','1','1393335783','1393335828','1398493492','1');");
E_D("replace into `phome_ecms_photo_index` values('2','15','1','1393335830','1393335840','1398827918','1');");
E_D("replace into `phome_ecms_photo_index` values('3','15','1','1393335842','1393335848','1398838352','1');");
E_D("replace into `phome_ecms_photo_index` values('4','15','1','1393335858','1393335864','1398839321','1');");
E_D("replace into `phome_ecms_photo_index` values('5','10','1','1393747343','1393747382','1394178382','1');");
E_D("replace into `phome_ecms_photo_index` values('6','10','1','1393747384','1393747454','1393864787','1');");
E_D("replace into `phome_ecms_photo_index` values('7','10','1','1393864897','1393865083','1393865083','1');");
E_D("replace into `phome_ecms_photo_index` values('8','10','1','1393865124','1393865554','1393865554','1');");
E_D("replace into `phome_ecms_photo_index` values('9','10','1','1393865655','1393865818','1393865818','1');");
E_D("replace into `phome_ecms_photo_index` values('10','10','1','1393866979','1393867216','1393867216','1');");
E_D("replace into `phome_ecms_photo_index` values('11','10','1','1393867218','1393867379','1395042351','1');");
E_D("replace into `phome_ecms_photo_index` values('12','10','1','1393867381','1393867544','1393867544','1');");
E_D("replace into `phome_ecms_photo_index` values('13','10','1','1393867546','1393867758','1395042342','1');");
E_D("replace into `phome_ecms_photo_index` values('14','10','1','1393867760','1393867954','1394179071','1');");
E_D("replace into `phome_ecms_photo_index` values('15','10','1','1393867957','1393868164','1395042335','1');");
E_D("replace into `phome_ecms_photo_index` values('16','10','1','1393868166','1393868493','1394178491','1');");
E_D("replace into `phome_ecms_photo_index` values('24','15','1','1394126490','1394126533','1398827738','1');");
E_D("replace into `phome_ecms_photo_index` values('23','15','1','1394126448','1394126488','1397104384','1');");
E_D("replace into `phome_ecms_photo_index` values('22','15','1','1394126343','1394126446','1398665459','1');");
E_D("replace into `phome_ecms_photo_index` values('25','15','1','1394126535','1394126588','1398661373','1');");

@include("../../inc/footer.php");
?>