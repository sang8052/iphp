<?php
/*
Version:1.0
Data:2019-04-15
Author:Sudem

cli模式加载系统信息
*/
function cli_load()
{
if(!is_cli()) exit("此脚本限制 只允许在cli模式下运行!");
echo "This System Is Build Under PHP_".PHP_VERSION." IN ".php_sapi_name()." MODE\n";  //输出下当前PHP的版本以及运行模式(CLI 模式)
echo "Build:".date("YmdHis")."_".php_uname()."\n\n";   //输出当前时间和系统信息
echo "系统正在初始化中...\n";
}