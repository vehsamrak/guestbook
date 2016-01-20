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
     * @param string|null $actionName
     * @return mixed
     * @throws ActionNotExist
     */
    public final function processAction($actionName)
    {
        $actionName = ($actionName ?? 'index') . 'Action';

        if (method_exists(static::class, $actionName) && is_callable([static::class, $actionName])) {
            return static::$actionName();
        } else {
            throw new ActionNotExist();
        }
    }
}
