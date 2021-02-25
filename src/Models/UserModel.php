<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 19/02/2021
 * Time: 10:00 AM
 */

namespace App\Models;


use App\Lib\Orm;

class UserModel
{
    public function insertUser()
    {
        var_dump(Orm::getInstance()->connector());
    }
}