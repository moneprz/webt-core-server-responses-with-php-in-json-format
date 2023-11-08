<?php

class songs
{

    private int $id;
    private string $name;
    private string $gameName;
    private int $releaseYea;
    public function __construct($id, $name, $gameName, $releaseYear, $tracklist){
        $this->id = $id;
        $this->name = $name;

    }
}
