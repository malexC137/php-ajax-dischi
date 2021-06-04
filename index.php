<?php
// include "./main.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="dist/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <title>Php discs</title>
</head>

<body>
    <div id="app">
        <header></header>
        <main>
            <div class="container">
                <ul>
                    <li v-for="album in albumList" class="album-card">
                        <img :src="album.poster" alt="">
                        <h4> {{ album.title }} </h4>
                        <h3> {{ album.author }} </h3>
                        <p> {{ album.genre }} </p>
                        <h6> {{ album.year }} </h6>
                    </li>
                </ul>
            </div>
        </main>
        <footer></footer>
    </div>
    <script src="script.js"></script>
</body>

</html>