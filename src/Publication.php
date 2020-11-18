<?php

namespace Hilafothi\FileSystem;

use JsonSerializable;

class Publication implements JsonSerializable
{
    protected $title;
    protected $author;
    protected $published_date;
    protected $content;


    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
        return $this;
    }

    public function setPublishedDate(int $date)
    {
        $this->date = $date;
        return $this;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPublishedDate()
    {
        return $this->date;
    }

    public function getContent()
    {
        return $this->content;
    }

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
