<?php
# @Time :     2019/9/16 4:32 32
# @File :     SimpleStrEn_DeCode.php
# @Software:  PhpStorm
# @Descript:  简单字符串加密解密函数
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  





function SimpleStrEncode($data)
{
    $key = "We5hXvEdQMwKcpIU";
    $data = openssl_encrypt($data, 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
    $data =  strtolower(bin2hex(base64_encode($data)));
    return $data;

}

function SimpleStrDecode($data)
{

    $key = "We5hXvEdQMwKcpIU";
    $data = openssl_decrypt(base64_decode(hex2bin($data)), 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
    return $data;
}
