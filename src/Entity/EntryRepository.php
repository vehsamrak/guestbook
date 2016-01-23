<?php
/**
 * Author: Vehsamrak
 * Date Created: 21.01.16 0:15
 */

namespace Entity;

use Framework\AbstractRepository;

class EntryRepository extends AbstractRepository
{

    public function findAll(): array
    {
        $queryResults = $this->query('SELECT * FROM entries');

        $entryCollection = [];

        if ($queryResults) {
            foreach ($queryResults as $result) {
                $entryCollection[] = new Entry($result['author'], $result['text']);
            }
        }

        return $entryCollection;
    }
}
