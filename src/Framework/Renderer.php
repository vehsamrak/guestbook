<?php
/**
 * Author: Vehsamrak
 * Date Created: 23.01.16 17:56
 */

namespace Framework;

class Renderer
{

    /**
     * @param string $template
     * @param array  $parameters
     */
    public function render($template, array $parameters = [])
    {
        extract($parameters);
        require_once(__DIR__ . '/../View/' . $template);
    }
}
