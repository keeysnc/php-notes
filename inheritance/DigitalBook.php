<?php

class DigitalBook extends Book
{
    public $filesize;

    public function __construct(
        int $filesize = 0)
    {
        $this->filesize = $filesize;
    }

    public function getFilesize(): int
    {
        return $this->filesize;
    }

    public function print(): string
    {
        return "{$this->title}, {$this->author}, filesize: {$this->filesize}";
    }


}
