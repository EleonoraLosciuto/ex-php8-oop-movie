<?php

    class Movie {
        public $title;
        public $year;
        public $director;
        public $imglink;
        public $genres;


        function __construct($_title, $_year, $_director, $_imglink, array $_genres) {
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
            $this->imglink = $_imglink;
            
            // check that genres are all instances of Genre class

            foreach ($_genres as $genre) {
                if (!($genre instanceof Genre)) {
                    throw new InvalidArgumentException("Tutti gli elementi devono essere istanze della classe Genre");
                }
            }

            $this->genres = $_genres;
        }

        function getMovieTitle() {
            return 
                $this->title;
        }
    };

?>