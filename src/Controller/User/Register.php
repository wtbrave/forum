<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 03/02/2021
 * Time: 8:16 PM
 */
namespace App\Controller\User;


use App\Models\UserModel;

/**
 * Class Register
 * @package App\Controller\User
 *
 * 用户注册接口
 */
class Register
{
    public function main()
    {
        $user = new UserModel();
        $user->insertUser();
    }
}