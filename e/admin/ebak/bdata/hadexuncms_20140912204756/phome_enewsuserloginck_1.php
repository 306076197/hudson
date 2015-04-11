<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserloginck`;");
E_C("CREATE TABLE `phome_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsuserloginck` values('2','667a2644b78fee992b69b21253d25e1c');");
E_D("replace into `phome_enewsuserloginck` values('3','953c4d214a16c6a24a9ac8c8d9b512d1');");
E_D("replace into `phome_enewsuserloginck` values('4','1c7c6dbf99b4d7c0347b525ee6d693f3');");
E_D("replace into `phome_enewsuserloginck` values('5','8f51982b9ccbad9063dff088ecf1ed8a');");

@include("../../inc/footer.php");
?>