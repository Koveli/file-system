<?php
namespace Hilafothi\FileSystem\Exceptions;

use Exception;

class FileNotFoundException extends Exception
{
    protected $message = "publication file not found.";
}