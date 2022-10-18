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
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
    <!-- 
        Seconda Milestone:
        Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
     -->
    <div id="root">
        <header>
            <img src="img/logo-small.svg" alt="Logo Spotify" />
        </header>
        <main>
            <div class="container">
                <div class="card" v-for="album in albums">
                    <img :src="album.poster" :alt="album.title" />
                    <h3>{{album.title}}</h3>
                    <p>{{album.author}}</p>
                    <small>{{album.year}}</small>
                </div>
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>