<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 03/02/2021
 * Time: 8:16 PM
 */
namespace App\Controller\User;

use App\Lib\Response;
use App\Models\UserModel;

/**
 * Class Login
 * @package App\Controller\User
 *
 * 用户登录接口
 */
class Login
{
    public function main()
    {
        setcookie('aaaa', '11111', time()+3600, '/', 'phooer.com');

        Response::outputJson([
            'code' => 200,
            'msg'  => '登录成功',
            'data' => (object)[]
        ]);
    }
}