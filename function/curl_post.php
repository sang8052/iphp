<?php
function curl_post($url,$post,$time=5)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    // 最大执行时间
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT , $time);
    curl_setopt($curl, CURLOPT_TIMEOUT, $time);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}