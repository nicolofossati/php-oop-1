<?php
class Movie
{
    public $title;
    public $original_language;
    public $release_date;
    public $genres;
    public $runtime;
    public $procution_house;
    public $cover;
    public $casts;

    public function __construct($title, $original_language, $release_date, $genres, $runtime, $procution_house, $casts, $cover)
    {
        $this->title = $title;
        $this->original_language = $original_language;
        $this->release_date = $release_date;
        $this->genres = $genres;
        $this->runtime = $runtime;
        $this->procution_house = $procution_house;
        $this->casts = $casts;
        $this->cover = $cover;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getOriginal_language()
    {
        return $this->original_language;
    }

    public function getRelease_date()
    {
        return $this->release_date;
    }
    public function getGenres()
    {
        $genres = '';
        foreach ($this->genres as $index => $genre) {
            $genres .= $genre;
            if ($index != count($this->genres) - 1) {
                $genres .= ", ";
            }
        }
        return $genres;
    }

    public function getCast()
    {
        $result = '';
        foreach ($this->casts as $index => $cast) {
            $result .= $cast;
            if ($index != count($this->casts) - 1) {
                $result .= ", ";
            }
        }
        return $result;
    }
    public function getRuntime()
    {
        return $this->runtime;
    }
    public function getProcution_house()
    {
        return $this->procution_house;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setOriginal_language($original_language)
    {
        $this->original_language = $original_language;
    }

    public function setRelease_date($release_date)
    {
        $this->release_date = $release_date;
    }
    public function setGenres($genres)
    {
        $this->genres = $genres;
    }
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }
    public function setProcution_house($procution_house)
    {
        $this->procution_house = $procution_house;
    }

    public function printMovie()
    {
        echo "Title: " . $this->title . "</br>";
        echo "Original language: " . $this->original_language . "</br>";
        echo "Release date: " . $this->release_date . "</br>";
        echo "Genres: " . $this->getGenres() . "</br>";
        echo "Runtime: " . $this->runtime . "</br>";
        echo "Procution house: " . $this->procution_house . "</br>";
    }
}
?>