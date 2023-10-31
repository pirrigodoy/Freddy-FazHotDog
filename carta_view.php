<?php
require_once './functions/carta.php';
require_once './functions/functions.php';
require_once './functions/user.php';
$user_name = $_SESSION['user_name'] ?? ''; // Obtiene el nombre de usuario de la sesión
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    // Destruir la sesión
    session_destroy();

    // Redirigir a index.php
    header("Location: index.php");
    exit;
}
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

<body>
    <nav class="navbar navbar-dark custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="./img/logo.png" height="75" width="75"></img> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li>
                        <a>Bienvenido <?php echo $user_name; ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/functions/pedido.php">Pedido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../carta_view.php">Carta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?logout=1">Log out</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-4">Carta de productos</h1>

        <h2 class="mt-4">Hot Dogs</h2>

        <div class="row">
            <?php
            $hotDogs = getAllHotDogs();
            foreach ($hotDogs as $nombre => $hotDog) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="img/' . $hotDog['source'] . '" class="card-img-top" alt="Imagen del Hot Dog">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $nombre . '</h5>';
                echo '<p class="card-text">Precio: $' . getHotDogPrice($hotDog) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '<h2 class="mt-4">Bebidas</h2>';
            echo "<br>";
            $hotDogs = getAllBebidas();
            foreach ($bebidas as $nombre => $bebida) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="img/' . $bebida['source'] . '" class="card-img-top" alt="Imagen de la bebida">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $nombre . '</h5>';
                echo '<p class="card-text">Precio: $' . getHotDogPrice($bebida) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '<h2 class="mt-4">Patatas</h2>';
            echo "<br>";
            $hotDogs = getAllPatatas();
            foreach ($patatas as $nombre => $patata) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="img/' . $patata['source'] . '" class="card-img-top" alt="Imagen de las patatas">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $nombre . '</h5>';
                echo '<p class="card-text">Precio: $' . getHotDogPrice($patata) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Repite el mismo patrón para las secciones de Bebidas y Patatas -->

    </div>
</body>

</html>