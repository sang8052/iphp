<?php
# @Time :     2019/11/6 6:06 06
# @File :     sql_msearch.php
# @Software:  PhpStorm
# @Descript:  Tell how this file work
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  


function sql_msearch($name,$data)
{
    $sql = " and $name like '%$data%' or $name like '%$data' or $name like '$data%' or $name = '$data'";
    return $sql;
}