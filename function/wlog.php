<?php
/*
Version:1.0
Data:2019-04-15
Author:Sudem

写传参日志
@Debug_PATH (全局) 开发日志文件存放地址
记录请求的时间，IP地址，GET,POST,COOKIE数据
*/
if($Debug_Status) wlog();
function wlog()
{
    global $Debug_PATH;
    if(!is_dir($Debug_PATH)) mkdir($Debug_PATH);
    $file=fopen($Debug_PATH."Log_".time().".log","w+");
    $time=date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    fwrite($file,"Time:".$time." IP:".$ip."\n");
    fwrite($file,"GET:\n");
    fwrite($file,print_r($_GET,true));
    fwrite($file,"POST:\n");
    fwrite($file,print_r($_POST,true));
	fwrite($file,"COOKIE:\n");
    fwrite($file,print_r($_COOKIE,true));
    fwrite($file,"SESSION:\n");
    fwrite($file,print_r($_SESSION,true));
    fclose($file);
}
?>