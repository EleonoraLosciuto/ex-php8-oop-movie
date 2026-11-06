<?php

    class Movie {
        public $title;
        public $year;
        public $director;
        public $imglink;
        public $genre;


        function __construct($_title, $_year, $_director, $_imglink, Genre $_genre) {
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
            $this->imglink = $_imglink;
            $this->genre = $_genre;
        }

        function getMovieTitle() {
            return 
                $this->title;
        }
    };

?>