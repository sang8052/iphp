<?php
/*
Version:1.0
Data:2019-04-15
Author:Sudem

磁盘空间大小转换函数
磁盘容量转换函数 转换M 到G 
*/
 function disksizechange($size)
  
  {
  	 if(preg_match("/G/",$size))return $size;
  	 else
  	 {
  	 	$size=intval(trim($size,"M"))/1024;
  	 	return $size;
  	 }
  }
  
?>