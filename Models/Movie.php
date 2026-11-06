<?php

    class Movie {
        public $title;
        public $year;
        public $director;
        public $imglink;


        function __construct($_title, $_year, $_director, $_imglink) {
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
            $this->imglink = $_imglink;
        }
    };

?>