
<?php


class OST implements JsonSerializable {

    private int $ID;
    private string $name;
    private string $videoGameName;
    private int $releaseYear;
    private array $trackList;


    public function __construct($ID, $name, $videoGameName, $releaseYear, $trackList)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }


    public function jsonSerialize(): mixed
    {
        return array(
            'ID' =>$this->getID(),
            'name' => $this->getName(),
            'videoGameName' => $this->getVideoGameName(),
            'releaseYear' => $this->getReleaseYear(),
            'trackList' => $this->getTrackList()
        );
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getVideoGameName()
    {
        return $this->videoGameName;
    }

    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    public function getTrackList()
    {
        return $this->trackList;
    }

}
