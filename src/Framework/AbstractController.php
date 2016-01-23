<?php
/**
 * Author: Vehsamrak
 * Date Created: 19.01.16 23:04
 */

namespace Framework;

use Framework\Exception\ActionNotExist;

abstract class AbstractController
{

    /** @var Renderer */
    private $renderer;

    public function __construct()
    {
        $this->renderer = new Renderer();
    }


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

    /**
     * Отрисовка шаблона
     * @param string $template
     * @param array  $parameters
     */
    public function render($template = 'index', array $parameters = [])
    {
        $this->renderer->render($template, $parameters);
    }

    public function getPost(): array
    {
        return $_POST;
    }
}
