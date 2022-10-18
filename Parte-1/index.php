<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- 
        Prima Milestone:
        Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
     -->
    <?php 
    require __DIR__ . "/partials/database.php";
    ?>

    <header>
        <img src="img/logo-small.svg" alt="Logo Spotify" />
    </header>
    <main>
        <div class="container">
            <?php
            foreach ($database as $element) {
            ?>
            <div class="card">
                <img src="<?php echo $element["poster"] ?>" alt="<?php echo $element["title"] ?>" />
                <h3><?php echo $element["title"] ?></h3>
                <p><?php echo $element["author"] ?></p>
                <small><?php echo $element["year"] ?></small>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>