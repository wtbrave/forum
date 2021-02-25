<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 03/02/2021
 * Time: 8:13 PM
 */

use App\Lib\App;


if(!defined('ROOT_DIR')) {
    define('ROOT_DIR', __DIR__.'/../');
}

//自动加载包管理文件
require '../vendor/autoload.php';

//公共方法
require '../src/Lib/Functions.php';


$app = new App();
$app->run();
