<?php

    require_once('./Models/Genre.php');
    require_once('./Models/Movie.php');
    

    $movies = [];

    $movies[] = new Movie("Amélie", 2001, "Jean-Pierre Jeunet", "https://upload.wikimedia.org/wikipedia/en/5/53/Amelie_poster.jpg", [new Genre("Romantico"), new Genre ("Commedia")]);
    $movies[] = new Movie("Cinema Paradiso", 1988, "Giuseppe Tornatore", "https://upload.wikimedia.org/wikipedia/en/8/86/CinemaParadiso.jpg", [new Genre ("Dramma")]);
    $movies[] = new Movie("Pulp Fiction", 1994, "Quentin Tarantino", "https://upload.wikimedia.org/wikipedia/en/3/3b/Pulp_Fiction_%281994%29_poster.jpg", [new Genre("Crime"), new Genre("Thriller")]);
    $movies[] = new Movie("Interstellar", 2014, "Christopher Nolan", "https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg", [new Genre("Fiction")]);


    var_dump($movies[2]->genres);

?>