<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 03/02/2021
 * Time: 8:12 PM
 */
namespace App\Controller;


use App\Lib\Request;
use App\Lib\Response;
use App\Lib\View;

abstract class BaseController
{
    protected $isRequireLogin = true;
    protected $view;
    protected $request;

    //处理器核心实现方法
    abstract public function main();

    public  function __construct (Request $request)
    {
        //初始化请求实例
        $this->request = $request;
        //初始化模版引擎
        $this->view = View::instance();

        //默认，用户是非登录状态
        $this->view->assign('is_login', false);
        if ($this->isRequireLogin) {
            if($this->_checkLogin()) {
                $this->view->assign('is_login', true);
            } else {
                Response::redirect('/user/login');
            }
        }
    }

    private function _checkLogin()
    {
        $accessToke = $this->request->getCookies('access_token');
        return false;
    }
}