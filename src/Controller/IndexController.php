<?php
/**
 * Author: Vehsamrak
 * Date Created: 19.01.16 22:14
 */

namespace Controller;

use Framework\AbstractController;

class IndexController extends AbstractController
{

    public function indexAction()
    {
        echo '<html><b>hello!</b></html>';
    }
}
