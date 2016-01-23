<?php
/**
 * Author: Vehsamrak
 * Date Created: 21.01.16 0:15
 */

namespace Framework;

use Framework\Exception\DatabaseError;

abstract class AbstractRepository
{

    protected $connection;

    public final function __construct(\mysqli $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @throws DatabaseError
     */
    public function query(string $query)
    {
        $queryResult = $this->connection->query($query);

        if (!($queryResult)) {
            throw new DatabaseError($this->connection->errno, $this->connection->error);
        }

        return $queryResult->fetch_all(MYSQLI_ASSOC);
    }

    public function createTables()
    {
        $this->connection->query("
            CREATE TABLE IF NOT EXISTS `entries` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `author` VARCHAR(64) NOT NULL,
                `text` TEXT NOT NULL,
                PRIMARY KEY (`id`)
            )
            COLLATE='utf8_general_ci'
            ENGINE=InnoDB;
        ");
    }
}
