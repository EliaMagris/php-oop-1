<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $rating;


    //constructor
    function __construct($_x, $_y, $_z, $_k)
    {
        $this->title = $_x;
        $this->genre = $_y;
        $this->year = $_z;
        $this->rating = $_k;
    }

    public function isOK()
    {
        if ($this->year > 2000 && $this->rating > 5) {
            return "<h1>$this->title  è davvero un bel film</h1>";
        } else if ($this->year <= 2000 && $this->rating <= 5) {
            return "<h1>$this->title è vecchio e brutto</h1> ";
        } else if ($this->year <= 2000 && $this->rating > 5) {
            return "<h1>$this->title è vecchio tuttavia si difende bene</h1>";
        } else if ($this->year > 2000 && $this->rating <= 5) {
            return "<h1>$this->title è nuovo ma peccato sia monnezza</h1>";
        }

    }

}

?>