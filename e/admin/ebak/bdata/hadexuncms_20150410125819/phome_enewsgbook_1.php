<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsgbook`;");
E_C("CREATE TABLE `phome_enewsgbook` (
  `lyid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `lytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lytext` text NOT NULL,
  `retext` text NOT NULL,
  `bid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`lyid`),
  KEY `bid` (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsgbook` values('1','rewre','rewq@163.com','18665097838','2014-03-11 12:00:33','fdasfdsafd','','1','14.120.192.135','0','0','');");
E_D("replace into `phome_enewsgbook` values('2','热情热舞','fda@163.com','18554678762','2014-03-11 12:02:07','分啊热武器热武器热','','1','14.120.192.135','0','0','');");

@include("../../inc/footer.php");
?>