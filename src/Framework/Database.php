<?php
/**
 * Author: Vehsamrak
 * Date Created: 23.01.16 16:23
 */

namespace Framework;

class Database
{
    private $connection;

    public function __construct()
    {
        $dsn = sprintf(
            '%s:host=%s;dbname=%s',
            Config::get('database_type'),
            Config::get('database_host'),
            Config::get('database_name')
        );

        $this->connection = new \PDO(
            $dsn,
            Config::get('database_user'),
            Config::get('database_password')
        );
    }

    /**
     * @return \PDO
     */
    public function getConnection(): \PDO
    {
        return $this->connection;
    }
}
