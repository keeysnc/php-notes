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



}
