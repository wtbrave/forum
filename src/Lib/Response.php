<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 09/03/2021
 * Time: 6:33 PM
 */

namespace App\Lib;


class Response
{
    public static function redirect($url, $callback = '')
    {
        if ($callback == '') {
            $callback = $_SERVER['HTTP_REFERER'];
        }

        header('Location:'.$url.'?callback='.urlencode($callback));
        exit;
    }
}