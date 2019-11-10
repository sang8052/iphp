<?php
session_start();

//$_PATH 变量载入的是 当前站点的根目录的相对路径地址
$_PATH = dirname(__FILE__)."/../";

//加载配置文件
include_once $_PATH."conf/autoload.php";
//加载全局函数
include_once $_PATH."function/autoload.php";
//加载类文件 
include_once $_PATH."class/autoload.php";

// 实例化数据库连接类
$mysqli = new class_mysqli($Mysql_Conf);


// 请在这里开始载入你的主路由函数

