<?php
/**
 * Author: Vehsamrak
 * Date Created: 20.01.16 23:56
 */

namespace Entity;

class Entry
{

    /** @var \DateTime */
    private $createdAt;

    /** @var string */
    private $author;

    /** @var string */
    private $text;

    /**
     * @param $author
     * @param $text
     */
    public function __construct(string $author, string $text)
    {
        $this->createdAt = new \DateTime();
        $this->author = $author;
        $this->text = $text;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt->format('Y-m-d H:i:s');
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
