<?php

/**
 * Entry point script:
 *
 * @category YupeScript
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 **/

/**
 * @link    http://www.yiiframework.ru/doc/guide/ru/basics.entry
 */

 if( $_SERVER['REQUEST_URI']=='/index.php')
{
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /');
    exit();
}

 if( $_SERVER['REQUEST_URI']=='/index')
{
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /');
    exit();
}

if(isset($_GET['route'])&&strlen($_GET['route'])>2) {
    header("HTTP/1.1 301 Moved Permanently"); 
    header('Location: /');
    exit(); 
}
if(isset($_GET['id'])&&strlen($_GET['id'])>0){
    header("HTTP/1.1 301 Moved Permanently"); 
    header('Location: /');
    exit(); 
}

if(isset($_GET['C'])&&strlen($_GET['C'])>0){
    header("HTTP/1.1 301 Moved Permanently"); 
    header('Location: /');
    exit(); 
}

if (!ini_get('date.timezone')) {
    date_default_timezone_set('Europe/Moscow');
}

// Setting internal encoding to UTF-8.
if (!ini_get('mbstring.internal_encoding')) {
    @ini_set("mbstring.internal_encoding", 'UTF-8');
    mb_internal_encoding('UTF-8');
}

// Comment next two lines on production
//define('YII_DEBUG', true);
//defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require __DIR__ . '/engine/vendor/yiisoft/yii/framework/yii.php';

$base = require __DIR__ . '/engine/protected/config/main.php';

$confManager = new yupe\components\ConfigManager();
$confManager->sentEnv(\yupe\components\ConfigManager::ENV_WEB);

require __DIR__ . '/engine/vendor/autoload.php';

Yii::createWebApplication($confManager->merge($base))->run();