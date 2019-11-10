<?php
/*
Version:1.0
Data:2019-04-15
Author:Sudem

对给定的字符串进行随机大小写转换
@$str (可选),如果为空,会随机一个32位的字符串
*/
function randupdown($str="")
{
   if($str="") return randstr(32);
   $string="";
   $arr=str_split(strtolower($str));
   foreach($arr as $key=>$val)
   {
	  $rand=rand(0,100);
	  if(0<=$rand&&$rand<50)  $string.=$val;
      else if(50<=$rand&&$rand<=100) $string.=strtoupper($val);	  
   }
   return $string;
  
}
?>