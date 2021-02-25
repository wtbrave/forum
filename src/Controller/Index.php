<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 17/02/2021
 * Time: 3:26 PM
 */

namespace App\Controller;



class Index extends BaseController
{
    protected $isRequireLogin = false;

    public function main($a)
    {

        $list = [];

        $this->view->view('index')
            ->assign('list', $list)
            ->assign('data', [])
            ->render();
    }
}