
<?php
    require_once('./db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<body>    

    <main>
        <div class="app-container">
            <h1>I miei film preferiti</h1>

            <div class="cards-container">
            
            <div class="movie-card">
                <h3><?php echo $movies[0]->getMovieTitle();?></h3>
                <img class="movie-poster" src=<?php echo $movies[0]->imglink?> alt=<?php echo $movies[0]->title?> />
                <p><?php echo $movies[0]->director?></p>
                <p><?php echo $movies[0]->year?></p>
            </div>

            <div class="movie-card">
                <h3>Titolo Film</h3>
                <div>Immagine film</div>
                <p>Director</p>
                <p>Anno</p>
            </div>

            <div class="movie-card">
                <h3>Titolo Film</h3>
                <div>Immagine film</div>
                <p>Director</p>
                <p>Anno</p>
            </div>

            <div class="movie-card">
                <h3>Titolo Film</h3>
                <div>Immagine film</div>
                <p>Director</p>
                <p>Anno</p>
            </div>

            </div>

        </div>
    </main>
    
</body>
</html>