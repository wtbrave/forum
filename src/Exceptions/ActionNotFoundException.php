<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 16/02/2021
 * Time: 3:34 PM
 */
namespace App\Exceptions;

use Throwable;

class ActionNotFoundException extends \Exception
{
    public function __construct ($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}