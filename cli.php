#!/home/app/php/bin/php -q
<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
header("Content-type: text/html; charset=utf-8");
//define('APP_PATH','../Application/');
define( 'APP_PATH', dirname(__FILE__).'/../Application/' ); 
define('APP_ROOT_PATH', dirname(__FILE__));
define('APP_DEBUG',true);
define('APP_STATUS','prod');
//目录生成index
define('DIR_SECURE_FILENAME', false);
//require '../ThinkPHP/ThinkPHP.php';
require dirname(dirname( __FILE__)).'/vendor/autoload.php';
require dirname(dirname( __FILE__)).'/ThinkPHP/ThinkPHP.php';
define('APP_MODE','cli');