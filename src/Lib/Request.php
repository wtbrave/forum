<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 04/02/2021
 * Time: 6:35 PM
 */
namespace App\Lib;


use App\Exceptions\ActionNotFoundException;

class Request
{
    /**
     * 请求参数
     * @var array
     */
    public $params = [];
    public $actionClass = '';


    /**
     * 处理请求；
     *  -提取参数
     *  -确定处理器
     *
     * @return $this
     * @throws ActionNotFoundException
     *
     * @author: johnny
     * @time: 2021-02-16 3:38 PM
     */
    public function disposeRequest()
    {
        //从环境变量($_SERVER)中取出请求信息
        $queryInfo = parse_url($_SERVER['REQUEST_URI']);

        $path = (isset($queryInfo['path']) && !empty($queryInfo['path'])) ? $queryInfo['path'] : '';
        if ($path == '/') {
            $path = '/index';
        }
        $path = explode('/', $path);
        $class = 'App\Controller'.implode('\\',$path);
        if (!class_exists($class)) {
            throw new ActionNotFoundException('未找到相关操作', 404);
        } else {
            $this->actionClass = $class;
        }

        //处理请求参数
        $query = (isset($queryInfo['query'])) && !empty($queryInfo['query']) ? $queryInfo['query']:'';
        if (!empty($query)){
            $query = explode('&', $query);
            if (!empty($query)) {
                foreach ($query as $v) {
                    $v = explode('=', $v);
                    $this->params[$v[0]] = $v[1];
                }
            }
        }

        return $this;
    }
}