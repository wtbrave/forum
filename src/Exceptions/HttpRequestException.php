<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 18/02/2021
 * Time: 7:23 PM
 */

namespace App\Exceptions;


use Throwable;

class HttpRequestException extends \Exception
{
    public function __construct ($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}