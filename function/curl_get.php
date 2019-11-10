<?php
# @Time :     2019/10/28 5:48 48
# @File :     curl_get.php
# @Software:  PhpStorm
# @Descript:  Tell how this file work
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  


function curl_get($url,$time=5)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // 最大执行时间
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT , $time);
    curl_setopt($curl, CURLOPT_TIMEOUT, $time);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}