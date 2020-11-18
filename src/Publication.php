<?php

namespace Hilafothi\FileSystem;

use JsonSerializable;

class Publication implements JsonSerializable
{
    protected $title;
    protected $author;
    protected $published_date;
    protected $content;


    /**
     * setTitle
     *
     * @param  mixed $title
     * @return Publication
     */
    public function setTitle(string $title): Publication
    {
        $this->title = $title;
        return $this;
    }

    /**
     * setAuthor
     *
     * @param  mixed $author
     * @return Publication
     */
    public function setAuthor(string $author): Publication
    {
        $this->author = $author;
        return $this;
    }

    /**
     * setPublishedDate
     *
     * @param  mixed $date
     * @return Publication
     */
    public function setPublishedDate(int $date): Publication
    {
        $this->date = $date;
        return $this;
    }

    /**
     * setContent
     *
     * @param  mixed $content
     * @return Publication
     */
    public function setContent(string $content): Publication
    {
        $this->content = $content;
        return $this;
    }

    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * getAuthor
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * getPublishedDate
     *
     * @return int
     */
    public function getPublishedDate(): int
    {
        return $this->date;
    }

    /**
     * getContent
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * jsonSerialize
     *
     * @return void
     */
    public function jsonSerialize()
    {
        return
            [
                "title"   => $this->title,
                "author" => $this->author,
                "date" => $this->date,
                "content" => $this->content
            ];
    }
}
