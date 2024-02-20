<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Blackbird', 100);
$song2 = new Song('Blackbird', 100);

$playlist->addSong($song1);
$playlist->addSong($song2);

if($playlist->getPlaylistLength() < 10){
    print 'Short Playlist...' . PHP_EOL;
}