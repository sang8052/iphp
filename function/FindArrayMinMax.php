<?php
# @Time :     2019/9/16 1:00 00
# @File :     FindArrayMinMax.php
# @Software:  PhpStorm
# @Descript:  寻找有序数组中的最小最大值
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top
function FindArrayMinMax(Array $arr) {
    $count = count($arr);
    $biggest=$smallest = $arr[$count - 1];

    for($i = 1; $i < $count - 1; $i += 2)
    {

        if($arr[$i] > $arr[$i + 1]) {
            $bigger = $arr[$i];
            $smaller = $arr[$i + 1];
        } else {
            $bigger = $arr[$i + 1];
            $smaller = $arr[$i];
        }
        if($bigger > $biggest) {
            $biggest = $bigger;
        }
        if($smaller < $smallest) {
            $smallest = $smaller;
        }
    }
    $Result["Min"] = $smallest;
    $Result["Max"] = $biggest;
    return $Result;


}


