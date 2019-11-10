<?php
# @Time :     2019/10/27 18:11 11
# @File :     iptonum.php
# @Software:  PhpStorm
# @Descript:  将ip 地址转成数字
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  

function iptonum($ip)
{
    $ipstr="";
    $ip_arr=explode('.',$ip);
    foreach ($ip_arr as $value)
    {
        $iphex=dechex($value);
        if(strlen($iphex)<2)
        {
            $iphex='0'.$iphex;
        }
        $ipstr.=$iphex;
    }
    return hexdec($ipstr);
}

