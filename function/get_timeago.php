<?php
/*
Version:1.0
Data:2019-04-15
Author:Sudem

获取时间差(自动换算成秒，分钟，小时，天，年)
@$timeold 需要计算的时间(可以为时间戳，或"Y-m-d H:i:s"格式的时间字符串)
返回 以秒，分钟，小时，天，年为单位四舍五入后的时间
*/
function get_timeago($timeold)
{
	$timenow=time();
	if(!is_numeric($timeold))$timeold=strtotime($timeold);
	$timeago=$timenow-$timeold;
	if($timeago<60) $timeago=$timeago."&nbsp;秒";
	else if($timeago>=60&&$timeago<3600)
	$timeago=round($timeago/60)."&nbsp;分钟";
	else if($timeago>=3600&&$timeago<86400)
	$timeago=round($timeago/3600)."&nbsp;小时";
	else if($timeago>=86400&&$timeago<31536000)
	$timeago=round($timeago/86400)."&nbsp;天";
	else if($timeago>=31536000) 
	$timeago=round($timeago/31536000)."&nbsp;年";
	return $timeago;
	
	
}
?>