<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuser`;");
E_C("CREATE TABLE `phome_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsuser` values('1','admin','f1de07cc497222d990d7feaaa02a59ab','9ru5Mb3asTTGBQBZQxm4','|','1','0','1','0','RSdq7i4c','56','1401069228','14.18.54.199','','','0','1399375449','14.119.118.182','1375114899','127.0.0.1','Ut5ckgnASGpHYEzRXAGCF3nyPhmvs3g9ARWWXBxjeRRFiFKk');");
E_D("replace into `phome_enewsuser` values('2','zjy','9e09c050111b2be414b4559f7ddb3608','iB9Cu6nhvuC3kLGy6viq','|','1','0','1','0','2yDBemyy','22','1397104113','101.46.63.246','','','0','1397055625','101.104.2.217','1393089738','127.0.0.1','MuZVvHEp7Z4RiB6QvGdBdbeyhhD7fn4ZyujLmmM5NMqs4CC9');");
E_D("replace into `phome_enewsuser` values('3','hadexun','d8ab6534952c556a836c2357792f6a5b','kXmi279kfPdAZMWiNdki','|','1','0','1','0','GPWiuQCs','107','1410526028','119.126.29.133','','','0','1410489946','125.95.160.54','1397751940','36.250.1.75','NAuKGjb2uusmmHcduwSz62nWSESzM8MKYtnajjDN8heJvzVQ');");
E_D("replace into `phome_enewsuser` values('4','hudson01','3ac60f4551043b015d3d877a4cbd0330','Ch9EB6BeHLkQyiZR9Kbh','|','2','0','1','0','Q7m7xZ7W','108','1410523310','119.126.29.133','','','0','1410436324','119.126.29.77','1402479216','183.27.202.181','UxKywp9MDQ5bk2zdLBCyUEbjjwzf6M3ZJkSkwECdVVEz5L7n');");
E_D("replace into `phome_enewsuser` values('5','hudson02','83d178ab72a3d72dddf26c079c92187f','Ag2mUEJd4VHhaRmHAXX4','|','2','0','1','0','Ha2FrjLy','2','1402731743','218.13.12.119','','','0','1402536694','218.13.12.119','1402479242','183.27.202.181','k98fwuJG5Dzv7hW6ztGVTX8GViP34j3crncpHVjNGFSJbLh3');");

@include("../../inc/footer.php");
?>