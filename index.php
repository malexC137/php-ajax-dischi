<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <title>Php discs</title>
</head>

<body>
    <div id="app">
        <header>
            <div class="container header-container">
                <div class="logo-container">
                    <img src="imgs/IMG_1232 2.PNG" alt="">
                </div>
                <div class="distancer"></div>
                <form @submit.prevent="onGenreSubmit">
                    <input type="text" v-model="filters.fGenre" placeholder="Cerca genere">
                    <input type="text" v-model="filters.fAuthor" placeholder="Cerca artista">
                    <input type="text" v-model="filters.fTitle" placeholder="Cerca titolo">
                    <button type="submit">Cerca</button>
                </form>
            </div>
        </header>
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