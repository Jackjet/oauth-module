<?php
/**
 * @Author: pizepei
 * @Date:   2018-07-26 14:34:25
 * @Last Modified by:   pizepei
 * @Last Modified time: 2018-07-26 14:35:10
 */
/**
 * 系统初始化内存
 */
define('__INIT_MEMORY_GET_USAGE__',memory_get_usage()/1024);
/**
 * 系统初始化时间
 */
define('__INIT_MICROTIME__',microtime(true));

$init_microtime = microtime(true);
/**
 * 定义应用目录
 */
define('__APP__','app');

require('../vendor/autoload.php');

$Start = new pizepei\staging\Start;
$Start->start();

