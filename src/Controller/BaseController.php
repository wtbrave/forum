<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 03/02/2021
 * Time: 8:12 PM
 */
namespace App\Controller;


use App\Lib\Request;
use App\Lib\View;

class BaseController
{
    protected $isRequireLogin = true;
    protected $view;

    public  function __construct (Request $request)
    {

        if ($this->isRequireLogin) {

        }

        //初始化模版引擎
        $this->view = View::instance();
    }

    //处理器核心实现方法
    abstract public function main();
}