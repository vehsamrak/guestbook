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

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
