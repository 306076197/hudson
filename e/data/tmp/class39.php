<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?php
$classid = $class_r[$GLOBALS[navclassid]][classid];
$url = '';
if($classid==3){
	$url = 'http://www.hudsonhome.cn/xwzx/hdzq/';
}elseif($classid==4){
    $url = 'http://www.hudsonhome.cn/cpyfw/zxcp/';
}elseif($classid==5){
    $url = 'http://www.hudsonhome.cn/cptyg/alzs/';
}
echo '<script>url="'.$url.'";window.location.href=url;</script>';