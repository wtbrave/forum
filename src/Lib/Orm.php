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
    //对象
    private  $db;

    //唯一的链接池
    private static $connector;

    public function __construct ()
    {
        try{
            //todo 链接参数调整
            self::$connector = new \PDO(
                'mysql:dbname=forum;host=127.0.0.1',
                'root',
                'a123456'
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();die;
        }
    }

    public function connector()
    {
        return self::$connector;
    }

    public function getOne()
    {

    }

    public function insert($data)
    {
        $sql = 'INSERT INTO ';

        $this->connector->query();
    }


    public function close()
    {

    }







}