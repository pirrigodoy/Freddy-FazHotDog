<?php
include './functions/carta.php';
session_start(); // Inicia la sesión si no está iniciada
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    // Destruir la sesión
    session_destroy();

    // Redirigir a index.php
    header("Location: index.php");
    exit;
}
$user_name = $_SESSION['user_name'] ?? ''; // Obtiene el nombre de usuario de la sesión


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freddy FazHotDog</title>
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
    <div class="container">
        <br>
        <h1 class="text-center">Freddy FazHotDog</h1>
        <br>
        <div class="row">
            <center>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/1.png" class="d-block w-40" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/2.png" class="d-block w-40" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </center>
            <br>
            <h2 class="text-center">Nuestros productos mas vendidos</h2>
            <?php
            $hotDog1 = $hotDogs["Hot Dog Picante"];
            $hotDog2 = $hotDogs["Hot Dog Classic"];
            $bebida = $bebidas["Coca Cola"];
            ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $carta["Hot Dog Picante"]["source"]; ?>" class="card-img-top" alt="Hot Dog Picante">
                        <div class="card-body">
                            <h5 class="card-title">Hot Dog Picante</h5>
                            <p class="card-text">Precio: $<?php echo $carta["Hot Dog Picante"]["precio"]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $carta["Hot Dog Classic"]["source"]; ?>" class="card-img-top" alt="Hot Dog Classic">
                        <div class="card-body">
                            <h5 class="card-title">Hot Dog Classic</h5>
                            <p class="card-text">Precio: $<?php echo $carta["Hot Dog Classic"]["precio"]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $bebida["source"]; ?>" class="card-img-top" alt="Coca Cola">
                        <div class="card-body">
                            <h5 class="card-title">Coca Cola</h5>
                            <p class="card-text">Precio: $<?php echo $bebida["precio"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <a href="./functions/pedido.php" class="linkPedido">
                <h3 class=" text-center">¡Haz tu pedido ya!</h3>
            </a>
        </div>
    </div>

</body>

</html>