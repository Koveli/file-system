<?php

namespace Hilafothi\FileSystem;

use Hilafothi\FileSystem\Exceptions\FileNotFoundException;
use Hilafothi\FileSystem\Publication;

class FileSystem
{
    protected $path;

    public function __construct($path = __DIR__)
    {
        $this->path  =  $path;
    }
    
    /**
     * create
     *
     * @param  Publication $publication
     * @return string
     */
    public function create(Publication $publication): string
    {

        $filename = $publication->getPublishedDate() . ".json";

        file_put_contents($this->path . "/" . $filename, json_encode($publication), LOCK_EX);

        return $filename;
    }
    
    /**
     * find
     *
     * @param  mixed $filename
     * @return Publication
     */
    public function find(string $filename): Publication
    {
        $file  = $this->path . "/" . $filename;

        if (!$this->exists($filename)) {
            throw new FileNotFoundException();
        }

        $data = json_decode(file_get_contents($file), true);

        $publication = new Publication();
        $publication->setTitle($data["title"])
            ->setAuthor($data["author"])
            ->setPublishedDate($data["date"])
            ->setContent($data["content"]);

        return $publication;
    }
    
    /**
     * exists
     *
     * @param  mixed $filename
     * @return bool
     */
    public function exists(string $filename): bool
    {
        $file  = $this->path . "/" . $filename;
        return file_exists($file);
    }
}
