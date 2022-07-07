<?php

class movie
{
    public $title;
    public $lang;
    public $year;
    public $decr = '';
    public $movieId;

    static public $number_of_movies = 0;
    static public $id_gen = 0;

    public function __construct(string $title, string $lang, int $year)
    {
        $this->title = $title;
        $this->lang = $lang;    
        $this->year = $year;    
        self::$number_of_movies++;
        self::$id_gen++;
        $this->movieId = self::$id_gen;
    }

    public function __destruct()
    {
        self::$number_of_movies--;
    }

    // public function addReview($title)
}