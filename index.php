<?php
// require_once './models/Product.php';
require_once './models/Food.php';
// require_once __DIR__ . './models/Category.php';
require_once "./models/Game.php";
// require_once __DIR__ . './models/Kennel.php';


$foods = [
    new Food(false, "morbida", 10, "CIBO", 14.99, "Mix di verdure in gelatina per il tuo cucciolo. Ricche di vitamine e sali minerali", "./img/palla1.jpg"),
    new Food(true, "dura", 7, "CIBO", 24.99, "Croccantini di carne da utilizzare da soli o accompagnati a delle verdure. Un pasto completo per il tuo animale", "./img/palla1.jpg"),

];
$games = [
    new Game("Plastica Dura", "Palla", 9.99, 12, "GIOCO", "Pallina in plastica dura ideale per il tuo cucciolo.Lavabile e adatta sia in casa che in giardino", "./img/palla1.jpg"),
    new Game("Plastica Morbida", "Palla", 7.99, 5, "GIOCO", "Pallina in plastica morbida ideale per il tuo cucciolo.Lavabile e adatta sia in casa che in giardino", "./img/palla1.jpg")

];

// $kennel1 = new Kennel();
?>
<style>
    .card>img {
        width: 200px;
        aspect-ratio: 1;
        object-fit: cover;
    }
</style>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>PHP-OOP-2</title>
</head>

<body>
    <section>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <?php foreach ($games as $gioco) : ?>
                        <div class="card">
                            <img src="<?php echo $gioco->img ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $gioco->title ?></h5>
                                <p class="card-text"><?php echo $gioco->description ?></p>
                                <p class="card-text"><?php echo $gioco->price ?> euro</p>
                                <p class="card-text"><?php echo $gioco->form ?></p>
                                <p class="card-text"> Pezzi disponibili: <?php echo $gioco->quantity ?></p>
                            </div>
                        </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <?php foreach ($foods as $food) : ?>
                        <div class="card">
                            <img src="<?php echo $food->img ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $food->title ?></h5>
                                <p class="card-text"><?php echo $food->description ?></p>
                                <p class="card-text"><?php echo $food->price ?> euro</p>
                                <p class="card-text">Tipo di consistenza: <?php echo $food->consistency ?></p>
                                <p class="card-text"> Pezzi disponibili: <?php echo $food->quantity ?></p>

                            </div>
                        </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </section>

</body>

</html>