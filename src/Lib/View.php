<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 04/02/2021
 * Time: 6:35 PM
 */
namespace App\Lib;

/**
 * 模版渲染引擎
 *
 * Class View
 * @package App\Lib
 */
class View
{
    private $params = [];
    private static $view;
    private $file;
    private function __construct (){}
    private function __clone(){}
    public static function instance()
    {
        if(!self::$view) {
            self::$view = new self;
        }

        return self::$view;
    }

    public function assign($k, $value)
    {
        $this->params[$k] = $value;
        return $this;
    }

    public function view($file)
    {
        $this->file = $file;
        return $this;
    }

    public function render()
    {
        extract($this->params);
        require ROOT_DIR.'/src/Views/'.$this->file.'.php';
    }

    public function includeView($file)
    {
        extract($this->params);
        require ROOT_DIR.'/src/Views/'.$file.'.php';
    }
}