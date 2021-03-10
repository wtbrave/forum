<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 20/02/2021
 * Time: 9:13 PM
 */


use App\Lib\View;

if(!function_exists('get_view')) {
    function get_view($fileName)
    {
        View::instance()->includeView($fileName);
    }
}
