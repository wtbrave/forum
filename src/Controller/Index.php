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

    public function main()
    {
        $page = $this->request->getParams('page');
        if (!$page) {
            $page = 1;
        }
        $limit = $this->request->getParams('limit');
        if(!$limit) {
            $limit = 20;
        }

        $list = [];


        $this->view->view('index')
            ->assign('list', $list)
            ->assign('data', [])
            ->assign('page', $page)
            ->assign('limit', $limit)
            ->render();
    }
}