<?php

class Movie{

    use Image;

    private $id;
    private $title;
    private $genre;

    public function __construct($id, $title, $genre)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getUpperTitle(){
        return strtoupper($this->title);
    }
}

?>