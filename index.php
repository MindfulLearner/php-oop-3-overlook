<?php

    include_once __DIR__ . '/traits/image.php';

    include_once __DIR__ . "/models/movie.php" ;

    $path = __DIR__ .'/database/movies.json';
    $jsonString = file_get_contents($path);
    $jsonData = json_decode($jsonString, true);

    //var_dump($jsonData);

    $movies = [];

    foreach($jsonData as $movie){
        $new_movie = new Movie($movie['id'], $movie['title'], '');

        $new_movie->setImage($movie['poster_path']);

        $movies[] = $new_movie;
    }

    var_dump($movies);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <div class="row">
            <?php foreach($movies as $movie) :?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">

                            <img src="<?= $movie->getImage() ?>" alt="">
                            <h5 class="card-title"> <?= $movie->getUpperTitle() ?> </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>