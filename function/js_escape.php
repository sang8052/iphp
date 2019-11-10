<?php
# @Time :     2019/10/27 22:11 11
# @File :     js_escape.php
# @Software:  PhpStorm
# @Descript:  Tell how this file work
# @Author :   Sudem
# @Contact :  mail@szhcloud.cn 
# @license :  Copyright(C) 2019, szhcloud.cn iw3c.top  

function js_escape($string, $in_encoding = 'UTF-8',$out_encoding = 'UCS-2')
{
    $return = '';
    if (function_exists('mb_get_info')) {
        for($x = 0; $x < mb_strlen ( $string, $in_encoding ); $x ++) {
            $str = mb_substr ( $string, $x, 1, $in_encoding );
            if (strlen ( $str ) > 1) {
                $return .= '%u' . strtoupper ( bin2hex ( mb_convert_encoding ( $str, $out_encoding, $in_encoding ) ) );
            } else {
                $return .= '%' . strtoupper ( bin2hex ( $str ) );
            }
        }
    }
    return $return;
}
