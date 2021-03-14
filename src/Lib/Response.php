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


    public static function outputJson($data)
    {
        ob_clean();
        header('Content-type:application/json;charset=utf-8');
        echo json_encode($data, JSON_PARTIAL_OUTPUT_ON_ERROR);
        exit;
    }
}