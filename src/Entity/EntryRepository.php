<?php
/**
 * Author: Vehsamrak
 * Date Created: 21.01.16 0:15
 */

namespace Entity;

use Framework\AbstractRepository;

class EntryRepository extends AbstractRepository
{

    /**
     * @return Entry[]
     */
    public function findAllSortedByDate(): array
    {
        $connection = $this->connection;
        $queryResults = $connection->query('SELECT * FROM entries ORDER BY created_at DESC');

        $queryResults = $queryResults->fetchAll(\PDO::FETCH_ASSOC);

        $entryCollection = [];

        if ($queryResults) {
            foreach ($queryResults as $result) {
                $entryCollection[] = new Entry($result['author'], $result['text']);
            }
        }

        return $entryCollection;
    }

    public function save(Entry $entry): bool
    {
        $statement = $this->connection->prepare('
          INSERT INTO entries (author, text, created_at)
          VALUES (:author, :text, :createdAt)
        ');

        $author = $entry->getAuthor();
        $text = $entry->getText();
        $createdAt = $entry->getCreatedAt();

        $statement->bindParam(':author', $author);
        $statement->bindParam(':text', $text);
        $statement->bindParam(':createdAt', $createdAt);

        return $statement->execute();
    }
}
