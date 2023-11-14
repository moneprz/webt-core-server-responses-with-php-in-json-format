<?php

class songs implements JsonSerializable
{

    private int $id;
    private string $name;
    private string $gameName;
    private int $releaseYea;
    private array $tracklist;
    public function __construct($id, $name, $gameName, $releaseYear, $tracklist){
        $this->id = $id;
        $this->name = $name;
        $this->gameName = $gameName;
        $this->releaseYea = $releaseYear;
        $this->tracklist = $tracklist;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGameName(): string
    {
        return $this->gameName;
    }

    public function getReleaseYea(): int
    {
        return $this->releaseYea;
    }

    public function getTracklist(): array
    {
        return $this->tracklist;
    }


    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
    }
}
