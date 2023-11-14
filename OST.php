
<?php
//header, was für ein Dateityp rauskommen soll
//json serializable
//json encode
class OST implements JsonSerializable {

    private $ID;
    private $name;
    private $videoGameName;
    private $releaseYear;
    private $trackList;

    /**
     * @param $ID
     * @param $name
     * @param $videoGameName
     * @param $releaseYear
     * @param $trackList
     */
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
        return $this->ID;
        return $this->name;
        return $this->releaseYear;
        return $this->trackList;
        return $this->videoGameName;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getVideoGameName()
    {
        return $this->videoGameName;
    }

    /**
     * @return mixed
     */
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    /**
     * @return mixed
     */
    public function getTrackList()
    {
        return $this->trackList;
    }

}





