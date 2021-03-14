<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 03/02/2021
 * Time: 8:17 PM
 */
namespace App\Lib;


use App\Exceptions\ActionNotFoundException;
use App\Exceptions\HttpRequestException;

class App
{
    /**
     * 启动整个项目
     *
     * @author: johnny
     * @time: 2021-02-04 6:34 PM
     */
    public function run()
    {
        $request = new Request();

        try {
            $request = $request->disposeRequest();
        } catch (ActionNotFoundException $e) {
            $view = View::instance();
            $view->assign('message', $e->getMessage());
            $view->assign('code', $e->getCode());
            return $view->view('error')->render();
        }

        try {

            call_user_func_array([new $request->actionClass($request), 'main'], $request->params);
        } catch (HttpRequestException $e) {
            $view = View::instance();
            $view->assign('message', $e->getMessage());
            $view->assign('code', $e->getCode());
            return $view->render('error');
        } catch (\Exception $e) {
            $view = View::instance();
            $view->assign('message', $e->getMessage());
            $view->assign('code', $e->getCode());
            return $view->view('error')->render();
        }
    }
}