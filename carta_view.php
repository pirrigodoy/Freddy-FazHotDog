<?php
require_once './functions/carta.php';
require_once './functions/functions.php';
require_once './functions/user.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<nav class="navbar navbar-dark custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src=./img/logo.png height="75" width="75"></img> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a>Bienvenido <?php echo $user_name; ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./functions/pedido.php">Pedido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carta_view.php">Carta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?logout=1">Log out</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<body>
    <h1>Carta de productos</h1>

    <h2>Hot Dogs</h2>
    <ul>
        <?php
        $hotDogs = getAllHotDogs();
        foreach ($hotDogs as $nombre => $hotDog) {
            echo '<li>' . $nombre . ' - Precio: $' . getHotDogPrice($hotDog) . '</li>';
        }
        ?>
    </ul>

    <h2>Bebidas</h2>
    <ul>
        <?php
        $bebidas = getAllBebidas();
        foreach ($bebidas as $nombre => $bebida) {
            echo '<li>' . $nombre . ' - Precio: $' . getBebidaPrice($bebida) . '</li>';
        }
        ?>
    </ul>

    <h2>Patatas</h2>
    <ul>
        <?php
        $patatas = getAllPatatas();
        foreach ($patatas as $nombre => $patata) {
            echo '<li>' . $nombre . ' - Precio: $' . getPatataPrice($patata) . '</li>';
        }
        ?>
    </ul>
</body>

</html>