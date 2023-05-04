<?php
class Movie
{
    public $title;
    public $original_language;
    public $release_date;
    public $genres;
    public $runtime;
    public $procution_house;

    public function __construct($title, $original_language, $release_date, $genres, $runtime, $procution_house)
    {
        $this->title = $title;
        $this->original_language = $original_language;
        $this->release_date = $release_date;
        $this->genres = $genres;
        $this->runtime = $runtime;
        $this->procution_house = $procution_house;
    }
}

$ciao = new Movie('ciao', 'english', 2015, 'horror', 125, 'WB');


?>