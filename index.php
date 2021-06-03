<?php

include "./src/partials/template/main.php";
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
    <title>Php discs</title>
</head>

<body>
    <header></header>
    <main>
        <div class="container">
            <ul>
                <?php
                foreach ($discs_list as $disc_key => $disc_arr) {
                ?>
                    <li class="album-card">
                        <img src=" <?php echo $disc_arr["poster"] ?> " alt="">
                        <h4> <?php echo $disc_arr["title"] ?> </h4>
                        <h3> <?php echo $disc_arr["author"] ?> </h3>
                        <p> <?php echo $disc_arr["genre"] ?> </p>
                        <h6> <?php echo $disc_arr["year"] ?> </h6>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </main>
    <footer></footer>
</body>

</html>