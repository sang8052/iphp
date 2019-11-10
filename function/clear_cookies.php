<?php
# @Time :     2019/10/28 3:05 05
# @File :     clear_cookies.php
# @Software:  PhpStorm
# @Descript:  清除所有cookies
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  


function clear_cookies()
{
    setcookie(session_name(),'',time()-1,'/');
    foreach ($_COOKIE as $key=>$value)
        setcookie($key,"",time()-1);
}

