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
E_D("replace into `phome_ecms_photo_index` values('1','15','1','1421473551','1393335828','1427855246','1');");
E_D("replace into `phome_ecms_photo_index` values('2','15','1','1427424029','1393335840','1427942017','1');");
E_D("replace into `phome_ecms_photo_index` values('3','15','1','1421488734','1393335848','1427942257','1');");
E_D("replace into `phome_ecms_photo_index` values('4','15','1','1421488932','1393335864','1427855741','1');");
E_D("replace into `phome_ecms_photo_index` values('5','10','1','1420802906','1393747382','1421207372','1');");
E_D("replace into `phome_ecms_photo_index` values('6','10','1','1420802902','1393747454','1421205750','1');");
E_D("replace into `phome_ecms_photo_index` values('7','10','1','1420802899','1393865083','1420862160','1');");
E_D("replace into `phome_ecms_photo_index` values('8','10','1','1420801923','1393865554','1420862148','1');");
E_D("replace into `phome_ecms_photo_index` values('9','10','1','1420802894','1393865818','1420862132','1');");
E_D("replace into `phome_ecms_photo_index` values('10','10','1','1420802883','1393867216','1420862118','1');");
E_D("replace into `phome_ecms_photo_index` values('11','10','1','1420861689','1393867379','1421203436','1');");
E_D("replace into `phome_ecms_photo_index` values('12','10','1','1420802868','1393867544','1420862064','1');");
E_D("replace into `phome_ecms_photo_index` values('13','10','1','1420861695','1393867758','1420862048','1');");
E_D("replace into `phome_ecms_photo_index` values('14','10','1','1420802864','1393867954','1420862029','1');");
E_D("replace into `phome_ecms_photo_index` values('15','10','1','1420861699','1393868164','1420861991','1');");
E_D("replace into `phome_ecms_photo_index` values('16','10','1','1420802857','1393868493','1420862008','1');");
E_D("replace into `phome_ecms_photo_index` values('24','15','1','1421629488','1394126533','1427856269','1');");
E_D("replace into `phome_ecms_photo_index` values('23','15','1','1421629378','1394126488','1427856364','1');");
E_D("replace into `phome_ecms_photo_index` values('22','15','1','1421629011','1394126446','1427855509','1');");
E_D("replace into `phome_ecms_photo_index` values('25','15','1','1421629597','1394126588','1427856214','1');");

@include("../../inc/footer.php");
?>