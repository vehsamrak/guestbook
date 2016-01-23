<?php
/**
 * Author: Vehsamrak
 * Date Created: 21.01.16 0:19
 */

namespace Framework;

class Config
{

    public static function get($key)
    {
        $config = require('../../config.php');

        return $config[$key];
    }
}
