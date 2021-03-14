<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 15/03/2021
 * Time: 12:27 AM
 */

namespace App\Controller\User;


use App\Controller\BaseController;

class Info extends BaseController
{
    public function main()
    {
        $this->view->assign('uid', $this->uid)
            ->view('info')
            ->render();
    }
}