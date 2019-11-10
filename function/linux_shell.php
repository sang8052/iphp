<?php
/*
Version:1.0
Data:2019-04-15
Author:Sudem

linux 系统下执行shell 命令
执行shell命令时的权限为www
此函数需要php 开放exec 函数

@$cmd 需要执行的命令
@response (可选) 指定是否需要返回数据，如果为true,则线程会被阻断支持返回数据
*/
function linux_shell($cmd,$response=false)
{
	
    
	if(!$response) $dev=" >/dev/null";  //此命令试图将进程挂到一个空的流中，从而不返回数据
	else $dev="";
	if($response)
    {
    		exec($cmd.$dev,$data);
    		return $data;
    }
    else
    {
    		exec($cmd.$dev);
    }
    
   
}
?>