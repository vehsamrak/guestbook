<?php
/**
 * Author: Vehsamrak
 * Date Created: 21.01.16 0:15
 */

namespace Entity;

use Framework\AbstractRepository;
use Framework\Exception\DatabaseError;

class EntryRepository extends AbstractRepository
{

    public function findAll()
    {
        $query = "SELECT * FROM entries";
        $result = $this->connection->query($query);

        if (!($result)) {
            throw new DatabaseError($this->connection->errno, $this->connection->error);
        }

        $result->fetch_assoc();
    }
}
