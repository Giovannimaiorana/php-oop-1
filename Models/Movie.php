<?php
//creazione classe con istanze 
class Movie{
    public $title;
    public $vote;
    public $genres;


//creazione funzione 
    public function __construct(string $title,string $vote,array $genres){
        $this->title = $title;
        $this->vote = $vote;
        $this->genres = $genres;
    }
//funzione per visualizzare info 
    public function getInfo(){
        return $this->title . '</br>' . $this->vote . '</br>' . $this->genres;
    }
//funzione per generi
    public function getGenres(){
        $generi='';
        foreach($this->genres as $genre){
            $generi .=$genre;
        }
        return $generi;
    }    

}


?>