<?php

class ost implements JsonSerializable
{
    protected int $ID;
    protected string $name;
    protected string $artist;
    protected string $track;
    protected int $number;
    protected int $duration;
    public function __construct($ID, $name, $artist, $track, $number, $duration)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->artist = $artist;
        $this->track = $track;
        $this->number = $number;
        $this->duration = $duration;
    }

    public function getID(): int
    {
        return $this->ID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function getTrack(): string
    {
        return $this->track;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function jsonSerialize(): mixed
    {
        return array(
            "name" => $this->name,
            );


    }
}
