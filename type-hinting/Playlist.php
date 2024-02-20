<?php
class Playlist
{

    public $songs = [];

    // class declaration to make sure only 'Song' class is passed in
    // void means nothing is being returned from in this function
    public function addSong(Song $song):void
    {
        //adds to song array
        $this->songs[] = $song;
    }

    // only returns int
    public function getPlaylistLength(): int
    {
        return count($this->songs);
    }
}