<?php
/**
 * Author: Vehsamrak
 * Date Created: 19.01.16 23:04
 */

namespace Framework;

use Framework\Exception\ActionNotExist;

abstract class AbstractController
{

    /**
     * @param $actionName
     * @return mixed
     * @throws ActionNotExist
     */
    public function processAction($actionName)
    {
        if (method_exists(self::class, $actionName) && is_callable([self::class, $actionName])) {
            return static::$actionName();
        } else {
            throw new ActionNotExist();
        }
    }
}
