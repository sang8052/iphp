<?php

$filelist=glob(__DIR__."/*.php");
include_once __DIR__."/Debug_conf.php";
foreach($filelist as $file )
{
	if($file!=__DIR__."autoload.php")
	{
		if(isset($Debug_ShowLoad)&&$Debug_ShowLoad) 
		   echo "Load  ".$file."\n";
	    include_once $file;
	}
	
}
	
		