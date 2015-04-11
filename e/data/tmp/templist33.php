<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?php
$classid = $class_r[$GLOBALS[navclassid]][classid];
$url = '';
if($classid==2){
	$url = '[!--news.url--]zjhdx/2014-02-22/7.html';
}elseif($classid==15){
    $url = '[!--news.url--]cptyg/shtyg/2014-02-25/1.html';
}elseif($classid==16){
    $url = '[!--news.url--]rlzy/rcg/2014-03-02/44.html';
}elseif($classid==18){
    $url = '[!--news.url--]rlzy/xcfl/2014-03-02/46.html';
}elseif($classid==19){
    $url = '[!--news.url--]rlzy/ypzn/2014-03-02/47.html';
}elseif($classid==13){
    $url = '[!--news.url--]cpyfw/zxfk/2014-03-02/65.html';
}elseif($classid==17){
    $url = '[!--news.url--]rlzy/zwfz/2014-03-02/45.html';
}
echo '<script>url="'.$url.'";window.location.href=url;</script>';
