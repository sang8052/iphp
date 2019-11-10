<?php
# @Time :     2019/10/27 17:21 21
# @File :     pre_print.php
# @Software:  PhpStorm
# @Descript:  html print_r 输出
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  


function pre_print($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

