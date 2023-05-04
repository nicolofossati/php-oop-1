<?php
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/db.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Movies</title>
</head>

<body>

    <div class="container">
        <?php
        foreach ($movie_db as $key => $movie) { ?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $movie->cover ?>" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">
                                <?php echo $movie->title ?>
                            </h2>
                            <p class="card-text">Genres:
                                <?php echo $movie->getGenres(); ?>
                            </p>

                            <p class="card-text">Cast:
                                <?php echo $movie->getCast(); ?>
                            </p>

                            <p class="card-text">
                                Prodution house:
                                <?php echo $movie->procution_house ?>
                            </p>
                            <p class="card-text"><small class="text-body-secondary">Original language:
                                    <?php echo $movie->original_language ?>, Duration:
                                    <?php echo $movie->runtime ?>m
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        ?>


    </div>


    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>