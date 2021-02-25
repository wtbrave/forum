<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 18/02/2021
 * Time: 8:51 PM
 */

namespace App\Lib;

/**
 * 数据库链接池(单例模式)
 * -todo 后期要改成桥接模式
 * Class Orm
 * @package App\Lib
 */
class Orm
{
    private static $db;

    private $connector;

    private function __construct ()
    {
        try{
            //todo 链接参数调整
            $this->connector = new \PDO(
                'mysql:dbname=forum;host=127.0.0.1',
                'root',
                'a123456'
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();die;
        }

    }

    private function __clone ()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (!self::$db) {
            self::$db = new self();
        }

        return self::$db;
    }

    public function connector()
    {
        return $this->connector;
    }

    public function getOne()
    {

    }







}