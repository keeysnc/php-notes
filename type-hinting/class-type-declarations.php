<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Blackbird', 100);
$song2 = 'Yesterday';

$playlist->addSong($song1);

// this will error out
// $playlist->addSong($song2);

//print count($playlist->songs);

foreach( $playlist->songs as $song)
{
    print($song->name . PHP_EOL);
}