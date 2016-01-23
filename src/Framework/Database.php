<?php
/**
 * Author: Vehsamrak
 * Date Created: 23.01.16 16:23
 */

namespace Framework\Exception;

use Framework\Config;

class Database
{
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(
            Config::get('database_host'),
            Config::get('database_user'),
            Config::get('database_password'),
            Config::get('database_name')
        );

        if (mysqli_connect_errno()) {
            echo 'Не удалось подключиться к MySQL: ' . mysqli_connect_error();
        }
    }

    /**
     * @return \mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
