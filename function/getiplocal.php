<?php 
function getiplocal($ip,$array=false,$source="ipip")
{
    if($_SESSION["Request"]["IP"]==$ip && $source=="ipip") $data = $_SESSION["Request"]["IpLocal"];
    else
    {
        $url ="https://v2.api.iw3c.top/?api=ip&source=$source&ip=".$ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($curl, CURLOPT_HEADER, true);
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        $res=curl_exec($curl);
        $data=json_decode($res,true)['data'];
        $_SESSION["Request"]["IP"] = $ip;
        $_SESSION["Request"]["IpLocal"] =  $data;
    }
    if($array) return $data;
    if ($data['Hlocal']!=""){$iplocal=$data["Hlocal"]." ".$data['isp'];}
    else $iplocal=$data["local"]." ".$data["isp"];
    return $iplocal;
}