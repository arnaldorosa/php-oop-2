<?php
    include './product.php';
    include './food.php';
    include './toy.php';
    include './bed.php';
    include './category.php';

    
    $product1 = new Product("Guinzaglio per cani", 5, "Accessori");
    $product2 = new Product("Cappottino per cani", 20, "Abbigliamento");

    
    $food1 = new Food("Crocchette", 15, "Cibo per cani", 2, "Secco", "Adulto");
    $food2 = new Food("Umido per gatti", 10, "Cibo per gatti", 1, "Umido", "Puppy");

    
    $toy1 = new Toy("Pallina per cani", 7, "Giochi", "Plastica", "Adulto");
    $toy2 = new Toy("Topolino", 16, "Giochi", "Peluche", "Puppy");

    
    $bed1 = new Bed("Cuscino per cani", 30, "Cuccia per animali", "50x70");
    $bed2 = new Bed("Casetta per gatti", 40, "Cuccia per animali", "70x90");

    
    $products = [
        $product1, 
        $product2, 
        $food1, 
        $food2, 
        $toy1, 
        $toy2, 
        $bed1, 
        $bed2
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <title>E-commers di accessori per animali</title>
</head>
<body class="bg-success">
    <div class="container py-5">
        <h1 class="text-center text-white">
            Accessori e cibo per il tuo amico a quattro zampe!
        </h1>
        <div class="row py-5">

            <?php foreach ($products as $product) { ?>

            <div class="col-6 mb-4">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $product->getName(); ?></h5>
                        <p class="card-text"><?php echo $product->getDescription(); ?></p>
                        <p class="card-text"><?php echo "Prezzo: " . $product->getPrice(); ?></p>
                        <p class="card-text"><?php echo "Categoria: " . $product->getCategory(); ?></p>

                        <?php if ($product instanceof Food) { ?>
                        <p class="card-text"><?php echo "Peso: " . $product->getWeight(); ?></p>
                        <p class="card-text"><?php echo "Formato: " . $product->getFormat(); ?></p>
                        <p class="card-text"><?php echo "Età: " . $product->getAge(); ?></p>
                        <?php } ?>

                        <?php if ($product instanceof Toy) { ?>
                        <p class="card-text"><?php echo "Materiale del giocattolo: " . $product->getMaterial(); ?></p>
                        <p class="card-text"><?php echo "Anni: " . $product->getYear(); ?></p>
                        <?php } ?>

                        <?php if ($product instanceof Bed) { ?>
                        <p class="card-text"><?php echo "Dimensioni della cuccia: " . $product->getSize(); ?></p>
                        <?php } ?>

                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</body>
</html>