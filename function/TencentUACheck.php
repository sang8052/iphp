<?php
# @Time :     2019/11/7 12:31 31
# @File :     TencentUACheck.php
# @Software:  PhpStorm
# @Descript:  腾讯UA 检测工具
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  

function TencentUACheck()
{
   if (SystemCheck()=="Android" && AppCheck()=="Wechat") return 1 ;
   else if(AppCheck()!="Unknow") return -1;
   else return 0;
}



// 检查 系统的类型是 IOS 还是 Android 还是未知 UA
function SystemCheck()
{
    if(preg_match("/iPhone/",$_SERVER['HTTP_USER_AGENT'])||preg_match("/iPad/",$_SERVER['HTTP_USER_AGENT'])) return "IOS";
    if(preg_match("/Android/",$_SERVER['HTTP_USER_AGENT']))  return "Android";
    else return "Unknow" ;
}

// 检查浏览器架构是 QQ Wechat

function AppCheck()
{
    if (preg_match("/\sQQ/",$_SERVER['HTTP_USER_AGENT']))            return "QQ";
    if (preg_match("/MicroMessenger/",$_SERVER["HTTP_USER_AGENT"]))  return "Wechat";
    return "Unknow";

}