<?php
/*
Version:1.0
Data:2019-04-15
Author:Sudem

cli模式等待界面
@time 等待时间 单位 ms 10的倍数
*/
function cli_wait($time)
 
{
   $time=$time/10;
   $mictime=explode(" ",microtime());
   $mic_old=$mictime[0];$num=0;
   while($num<=$time)
   {
      $mictime=explode(" ",microtime());
      if($mictime[0]<$mic_old) $mictime[0]=1+$mictime[0];
      if($mictime[0]-$mic_old>=0.01)
      {
         if($mictime[0]>1)$mictime[0]=$mictime[0]-1;
         $mic_old=$mictime[0];$num++;
         echo "=";
       }
    }
  echo "\n";
}