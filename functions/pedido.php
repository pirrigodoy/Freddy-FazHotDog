<?php require_once "carta.php";require_once "functions.php";
//$user_name = $_SESSION['user_name'] ?? ''; // Obtiene el nombre de usuario de la sesión
if(checkLogin()){
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    // Destruir la sesión
    //session_destroy();

    // Redirigir a index.php
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<nav class="navbar navbar-dark custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src=../img/logo.png height="75" width="75"></img> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a>Bienvenido <?php echo $user_name; ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./">Pedido</a>
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

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <header>
                        <h1 class="text-primary">Haz tu pedido!!!</h1>
                        <h3 class="text-primary">Cliente</h3>
                    </header>
                    <div class="form-group">
                        <label class="form-label" for="name">Nombre:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $inputs['name'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="apellido">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" value="<?php echo $inputs['apellido'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="curso">Curso:</label>
                        <input type="text" class="form-control" name="curso" id="curso" placeholder="Curso" value="<?php echo $inputs['curso'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telefono">Telefono:</label>
                        <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" value="<?php echo $inputs['telefono'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $inputs['email'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="dni">DNI:</label>
                        <input type="number" class="form-control" name="dni" id="dni" placeholder="DNI" value="<?php echo $inputs['dni'] ?? '' ?>">
                    </div>
                    <br>
                    <h3 class="text-primary">Pedido</h3>
                    <div class="form-group">
                        <label class="form-label" for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad" value="<?php echo $inputs['cantidad'] ?? '' ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Tamaños:</label>
                        <?php
                        $tamanyos = getAllTamanyos();
                        foreach ($tamanyos as $tamanyo=>$tamanyoData) {
                            echo '<div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tamanyo" id="' . $tamanyo . '" value="' . $tamanyo . '">
                                        <label class="form-check-label" for="' . $tamanyo . '">' . $tamanyo ." (+". $tamanyoData["precio"]."€)".'</label>
                                    </div>';
                        }
                        ?>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="form-label" for="salchicha">Salchicha:</label>
                        <select class="form-select" name="salchicha" id="salchicha" value="<?php echo $inputs['salchicha'] ?? '' ?>">
                            <option value="">Selecciona una salchicha</option>
                            <?php
                            $ingredients = getIngredientsByType("salchicha");
                            foreach ($ingredients as $ingredientName => $ingredientData) {
                                echo '<option value="' . $ingredientName . '">' . $ingredientName ." - ". $ingredientData["precio"]."€".'</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pan">Pan:</label>
                        <select class="form-select" name="pan" id="pan" value="<?php echo $inputs['pan'] ?? '' ?>">
                            <option value="">Selecciona un tipo de pan</option>
                            <?php
                            $ingredients = getIngredientsByType("pan");
                            foreach ($ingredients as $ingredientName => $ingredientData) {
                                echo '<option value="' . $ingredientName . '">' . $ingredientName ." - ". $ingredientData["precio"]."€". '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="topping">Topping:</label>
                        <select class="form-select" name="topping" id="topping" value="<?php echo $inputs['topping'] ?? '' ?>">
                            <option value="">Selecciona un topping</option>
                            <?php
                            $ingredients = getIngredientsByType("topping");
                            foreach ($ingredients as $ingredientName => $ingredientData) {
                                echo '<option value="' . $ingredientName . '">' . $ingredientName ." - ". $ingredientData["precio"]."€". '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Patatas:</label>
                        <?php
                        $ingredients = getAllPatatas();
                        foreach ($ingredients as $ingredientName => $ingredientData) {
                            echo '<div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="patatas[]" id="' . $ingredientName . '" value="' . $ingredientName . '">
                                        <label class="form-check-label" for="' . $ingredientName . '">' . $ingredientName ." - ". $ingredientData["precio"]."€". '</label>
                                    </div>';
                        }
                        ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Bebidas:</label>
                        <?php
                        $allIngredients = getAllBebidas();
                        foreach ($allIngredients as $ingredientName => $ingredientData) {
                            echo '<div class="form-check">
                                        <input class="form-check-input" type="radio" name="bebidas" id="' . $ingredientName . '" value="' .  $ingredientName . '">
                                        <label class="form-check-label" for="' . $ingredientName . '">' . $ingredientName ." - ". $ingredientData["precio"]."€". '</label>
                                    </div>';
                        }
                        ?>
                    </div>


                    <br>
                    <button class="btn btn-success" type="submit">Hacer pedido</button>
                    <button class="btn btn-danger" type="submit">Generar PDF</button>
                </form>
                <?php
                
                        showPedido();
                ?>

            </div>
        </div>
    </div>
    </div>
</body>

</html><?php
}else{
    echo "Acceso denegado";
    var_dump($_SESSION["name"]);
    var_dump($_SESSION["password"]);
}?>