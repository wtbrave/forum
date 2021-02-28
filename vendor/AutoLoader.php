<?php
/**
 * Author: johnny<wtbrave@gmail.com>
 * Date: 03/02/2021
 * Time: 9:21 PM
 */

namespace BBS\vendor;


class AutoLoader
{
    public function main()
    {
        spl_autoload($this);
    }
}