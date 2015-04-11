<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_other`;");
E_C("CREATE TABLE `phome_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsfile_other` values('1','0','f95acd42f5b6f43c5d7ad04f36e2d936.jpg','11550','2014-02-26','admin','1393384003','0','20120915161659.jpg','1','0','16','0','0','1');");
E_D("replace into `phome_enewsfile_other` values('2','0','7d8ba1f4627765fc358c4b81d87d7c83.jpg','8786','2014-02-26','admin','1393384034','0','20120915161957.jpg','1','0','18','0','0','1');");
E_D("replace into `phome_enewsfile_other` values('3','0','dabdb7d1136a107ca7ee926fd1e89c6d.jpg','11458','2014-02-26','admin','1393384058','0','20120915162146.jpg','1','0','19','0','0','1');");
E_D("replace into `phome_enewsfile_other` values('4','0','1055bd22cde8bc26208e9a65bfa4e76b.jpg','13118','2014-02-26','admin','1393384088','0','20120915161739.jpg','1','0','20','0','0','1');");
E_D("replace into `phome_enewsfile_other` values('5','0','4ac2a86f22057322e60b5e096349428d.jpg','11458','2014-02-26','admin','1393384110','0','20120915162146.jpg','1','0','21','0','0','1');");
E_D("replace into `phome_enewsfile_other` values('6','0','f69ee1fad7af1378137946177d0764e2.jpg','13118','2014-02-26','admin','1393384544','0','20120915161739.jpg','1','0','17','0','0','1');");

@include("../../inc/footer.php");
?>