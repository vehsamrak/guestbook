<?php
/**
 * Author: Vehsamrak
 * Date Created: 21.01.16 0:19
 */

namespace Framework;

use Framework\Exception\ConfigParameterNotFound;

class Config
{

    public static function get($key)
    {
        $config = require(__DIR__ . '/../../config.php');

        if (!isset($config[$key])) {
        	throw new ConfigParameterNotFound;
        }

        return $config[$key] ;
    }
}
