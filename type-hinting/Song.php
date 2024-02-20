<?php

class Song
{

    /** THE OLD WAY OF TYPE LABELING (DOESNT REALLY CHECK TYPES)
     * 
     * @param string $name
     * @param int $numberOfPlays
     */
    public $name;
    public $numberOfPlays;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;

    }
}

