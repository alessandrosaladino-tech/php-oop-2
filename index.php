<!--

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

-L'e-commerce vende prodotti per animali.
-I prodotti sono categorizzati, le categorie sono Cani o Gatti.
-I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

Bonus (non opzionale):
-organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.



-->

<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require __DIR__ . "/Traits/info.php";

require __DIR__ . "/models/product.php";
require __DIR__ . "/models/toys.php";
require __DIR__ . "/models/food.php";
require __DIR__ . "/models/kennel.php";
//require __DIR__ . "/models/category.php"; non funziona 
require __DIR__ ."/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Animal Products</title>
</head>

<body>

    <?php

    include "./partials/head.php";

    include "./partials/main.php";

    include "./partials/footer.php";


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>