<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo_data_1`;");
E_C("CREATE TABLE `phome_ecms_photo_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `filesize` varchar(10) NOT NULL DEFAULT '',
  `picsize` varchar(20) NOT NULL DEFAULT '',
  `picfbl` varchar(20) NOT NULL DEFAULT '',
  `picfrom` varchar(120) NOT NULL DEFAULT '',
  `morepic` mediumtext NOT NULL,
  `num` tinyint(4) NOT NULL DEFAULT '0',
  `width` varchar(12) NOT NULL DEFAULT '',
  `height` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `phome_ecms_photo_data_1` values('1','15','','0','0','0','0','','','','','','/d/file/cptyg/shtyg/2014-02-25/d5f3a430dc2c22cb4f914e6b67e917e1.jpg::::::/d/file/cptyg/shtyg/2014-04-10/aa0a26382ec9f2ecdfbafa49802900e1.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/ded1824b683f6a709cf02fb299e1113c.jpg::::::/d/file/cptyg/shtyg/2014-03-07/a3493032f0dcea10b765f4cb4223bd34.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/3f2091155758b0d4f8984bc0c3973821.jpg::::::/d/file/cptyg/shtyg/2014-02-25/3f2091155758b0d4f8984bc0c3973821.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/d0bf155ddfb11d43bf656f84f7701124.jpg::::::/d/file/cptyg/shtyg/2014-02-25/d0bf155ddfb11d43bf656f84f7701124.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/a738de2024be8e5ac364aec5fe5a2fd1.jpg::::::/d/file/cptyg/shtyg/2014-02-25/a738de2024be8e5ac364aec5fe5a2fd1.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/9580f2c873dcfd1a2a86619d8fd3d5aa.jpg::::::/d/file/cptyg/shtyg/2014-02-25/9580f2c873dcfd1a2a86619d8fd3d5aa.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('2','15','','0','0','0','0','','','','','','/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-10/0d0edc80eaf1cde36112c4db72f9f046.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-30/0acb8d36d746c692088f67d485d92d3b.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-30/e0fa65039a75efd4bf0bd6d16cef753e.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-30/6f4bb69f2a993ffa93dce4a80e43cd59.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('3','15','','0','0','0','0','','171.20 KB','','','','/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::/d/file/cptyg/shtyg/2014-03-07/7274fd165392c0e95557c8c5cc96a9c1.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::/d/file/cptyg/shtyg/2014-04-30/3ceb47ffc972e1a31e98a25175007e71.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::/d/file/cptyg/shtyg/2014-04-30/7968eb142d25959500d982e93e8adcd7.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::/d/file/cptyg/shtyg/2014-02-25/eb04c9c3dded1373852b1dae6da7ae46.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('4','15','','0','0','0','0','','327.20 KB','','','','/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::/d/file/cptyg/shtyg/2014-03-07/340e4b01f3609b2e3b0fa4e21f53aef7.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::/d/file/cptyg/shtyg/2014-04-30/756db285d0bafaac27b6d1274dbe5966.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::/d/file/cptyg/shtyg/2014-04-30/315463a3b79a99ebf37853130dccb968.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::/d/file/cptyg/shtyg/2014-02-25/f638bff4489705a8ceea83c5732fd6e7.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('5','10','','0','0','0','0','','','','','','@::::::/d/file/cpyfw/zxcp/2014-03-07/1c30fff31abeb056fabd625e4e993d65.jpg::::::\r\n@::::::/d/file/cpyfw/zxcp/2014-03-07/ee09345ed0b945a35222503a9cd76162.jpg::::::\r\n@::::::/d/file/cpyfw/zxcp/2014-03-04/a914e7c821c176a6c1ccc2e114852f99.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('6','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/c31adfc0c357fa41bb7e0ee774ab5189.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/8409ec9aa233fe11655dd4c8877e4336.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/4f8f3187e4abf5286b1af563902b270c.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/9558155385b9cb341523cf7f0b36fead.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/187c391d4ceea25cefd82da3373a07b1.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/bd776ee34f314fbc415a2926eddedd87.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('7','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/a86e624d5e933a7fc7240bc695b08eca.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/639f49c55a5d04ab5527cf3830466250.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/9f83f140daed5dfa93197129b5616a10.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/03d529367edbc08d62a5badadf518e49.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/12e685b0e762e562903e1bbea5359342.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/a6e9555e71bdcd2a46546ba6cf355d9d.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('8','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/faad83e04b7ca1583563d5a73844df29.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/1d1673cca63bd8a9f1f92fd369bb8fe5.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/b7c1836aa672717611f6c60496083356.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/db9570b8f37beec11510c71414a4093a.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/dbbf230ab8865954905c58d9c3e1c0f5.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/db4461e06faf46eb9d6d22b3b5fbbf71.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('9','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/b798d4f14bafb85b320c63136d57c0b0.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/a1569083ad643cb110509c2230fe4908.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/0ca56fe02f2132b255e1edd2a91f146a.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/309b3137b65ba4ea6434a25ad73ce7e2.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/b8b5dd6f6d17e9257ad9f51dd234c780.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/fe7101aa2cdae763d7899c526251e797.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('10','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/5928bea47e6b39815aeb9c7b574068d3.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/5928bea47e6b39815aeb9c7b574068d3.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/5737a7c8a8b8ca63e118b3b532b51cb0.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/5737a7c8a8b8ca63e118b3b532b51cb0.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/559784e486884878e94b90d41400fdf2.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/559784e486884878e94b90d41400fdf2.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('11','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/c09a6cc41e622e8087ef43981813645b.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/c09a6cc41e622e8087ef43981813645b.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/7399a4b506ef180bedba02a42c42b3cb.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/7399a4b506ef180bedba02a42c42b3cb.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/c9b3e6562f61e0b8d35b6b97ab7276ef.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/c9b3e6562f61e0b8d35b6b97ab7276ef.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('12','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/f676a06544e2c3ea42365ce9c6b44088.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/f676a06544e2c3ea42365ce9c6b44088.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/b98720136a112c6595cfa466ae00019f.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/b98720136a112c6595cfa466ae00019f.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/62ae92b8be896b3a56f0e95bc23326a0.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/62ae92b8be896b3a56f0e95bc23326a0.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('13','10','','0','0','0','0','','','','','','@::::::/d/file/cpyfw/zxcp/2014-03-07/d7d68531b6ac939c0167b20fc5378a23.jpg::::::\r\n@::::::/d/file/cpyfw/zxcp/2014-03-07/f7ef4e0c52f1eb49b054779de3f4227f.jpg::::::\r\n@::::::/d/file/cpyfw/zxcp/2014-03-07/0288d8d4e0bd40e09f86101a709378fb.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('14','10','','0','0','0','0','','','','','','@::::::/d/file/cpyfw/zxcp/2014-03-07/22e9d861a4292a98c2d36135bbe43dbf.jpg::::::\r\n@::::::/d/file/cpyfw/zxcp/2014-03-07/2c7762f1c8960fa299951af7f91763c9.jpg::::::\r\n@::::::/d/file/cpyfw/zxcp/2014-03-07/545c83c6db540a0c390a576d1ddc7b1e.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('15','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/8e848922a72acd9a8c2b582b4356aec0.jpg::::::/d/file/cpyfw/zxcp/2014-03-07/2ac51d3821e5ae692f69c5c26eb9a40b.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/7ac74581b837f2978f516706e3cdc6c2.jpg::::::/d/file/cpyfw/zxcp/2014-03-07/85d572027408a636e58b74a5dcc5928d.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/016c51b2a3c97bbd8c00d95546703d25.jpg::::::/d/file/cpyfw/zxcp/2014-03-07/66a5d7012ff2453d70c436d60e16fc94.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('16','10','','0','0','0','0','','','','','','/d/file/cpyfw/zxcp/2014-03-04/ab4b5d70c119589baedb6f7c36e32af6.jpg::::::/d/file/cpyfw/zxcp/2014-03-07/bd3a31fdc29c2a15df396cb203005552.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/3e9dd157594cd222a8457264ef21a635.jpg::::::/d/file/cpyfw/zxcp/2014-03-04/3e9dd157594cd222a8457264ef21a635.jpg::::::\r\n/d/file/cpyfw/zxcp/2014-03-04/d0147fe3b43cb641ad109a37f9d2ae6d.jpg::::::/d/file/cpyfw/zxcp/2014-03-07/c7660781f238af7ed234421b9a29dea9.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('22','15','','0','0','0','0','','1.52 MB','','','','/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-03-07/c4183edf9659d45a7f8190417e0341e5.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('23','15','','0','0','0','0','','','','','','/d/file/cptyg/shtyg/2014-03-07/ab2b6bc830837958290bd3c45f219bfe.jpg::::::/d/file/cptyg/shtyg/2014-04-10/b46b5f9a12744b2ea1e73d7d1164034b.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('24','15','','0','0','0','0','','121.85 KB','','','','/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-30/ec4f640a8a7cb5a7892c2090a78267f1.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-30/436cf0772d0d6c2bc00d0f3e564322d6.jpg::::::\r\n/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-30/92fb6e85e2d5f8e5345bd7a5fba00dd6.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('25','15','','0','0','0','0','','261.67 KB','','','','/d/file/cptyg/shtyg/2014-02-25/468a5d1e218323ec3dd0847160728fa8.jpg::::::/d/file/cptyg/shtyg/2014-04-28/34af462f48c5fd523f10e16322a7d4a7.jpg::::::\r\n/d/file/cptyg/shtyg/2014-04-28/ef548bc4dfa3d00596958ae2134db0e4.jpg::::::/d/file/cptyg/shtyg/2014-04-28/93394e9f489b550b404a4759d508fb53.jpg::::::','3','','');");

@include("../../inc/footer.php");
?>