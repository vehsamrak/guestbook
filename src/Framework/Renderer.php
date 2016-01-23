<?php
/**
 * Author: Vehsamrak
 * Date Created: 23.01.16 17:56
 */

namespace Framework;

class Renderer
{

    /**
     * Отрисовка шаблона
     * @param string $template
     * @param array  $parameters
     */
    public function render($template, array $parameters = [])
    {
        if (is_array($template)) {
            $parameters = $template;
            $template = 'index';
        }

        $templateFileName = $template . '.php';

        // распаковка переменных из массива для использования в шаблоне
        extract($parameters);

        require_once(__DIR__ . '/../View/' . $templateFileName);
    }
}
