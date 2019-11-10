<?php 
function getiplocal($ip )
{
    global $mysqli;

    // 检查ip 地址是否在数据库中
    $sql = "select ip,local,Hlocal,isp from ip where ip='$ip'";
    $mysqli->sql_query($sql);
    $data = $mysqli->res_array("assoc");
    if($data["ip"]!=$ip)
    {
        $url ="http://v2.api.iw3c.top/?api=ip&ip=".$ip;
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
        $insert = $data;
        unset($insert["asn"]);
        $insert["iplong"] = iptonum($ip);
        $mysqli->sql_insert("ip",$insert);
     }
    if ($data['Hlocal']!=""){$iplocal=$data["Hlocal"]." ".$data['isp'];}
    else {$iplocal=$data["local"]." ".$data['isp'];}
    return $iplocal;
}