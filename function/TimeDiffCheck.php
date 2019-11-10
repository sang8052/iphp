<?php
# @Time :     2019/11/2 12:54 54
# @File :     TimeDiffCheck.php
# @Software:  PhpStorm
# @Descript:  Tell how this file work
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  


function TimeDiffCheck($time,$diff=3)
{
    $_time = time();
    if(abs($_time-$time)<=$diff) return true;
    else return false;
}