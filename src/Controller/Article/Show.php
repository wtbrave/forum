<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 26/02/2021
 * Time: 11:23 AM
 */

namespace App\Controller\Article;


use App\Controller\BaseController;

class Show extends BaseController
{

    protected $isRequireLogin = false;

    public function main ()
    {
        $article = [];
        $articleHits = [];
        $replyList   = [];


        $this->view->view('show')
            ->assign('article', $article)
            ->assign('article_summary', $articleHits)
            ->assign('replyList', $replyList)
            ->assign('uid', $this->uid)
            ->render();
    }
}