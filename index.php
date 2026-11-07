
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
            
                <?php
                    foreach ($movies as $movie) {
                ?>
                    <div class="movie-card">
                        <h3><?php echo $movie->getMovieTitle();?></h3>
                        <img class="movie-poster" src=<?php echo $movie->imglink?> alt=<?php echo $movie->title?> />
                        <p><b>Genere:</b> <?php echo $movie->genre->genre ?> </p>
                        <p><?php echo $movie->director?></p>
                        <p><?php echo $movie->year?></p>
                    </div>
                <?php
                }
                ?>

            </div>

        </div>
    </main>
    
</body>
</html>