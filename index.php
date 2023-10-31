<?php
require_once '../functions/functions-structure.php';
require_once '../functions/functions.php';
require_once '../functions/user.php';

session_start(); // Inicia la sesión si no está iniciada
$inputs = [];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Llamar a la función de login para verificar las credenciales
    $loginResult = login($_POST['name'], $_POST['password']);
        if ($loginResult === 1) {
            
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['password']= $_POST['password'] ;
            header('Location: home.php'); // Redirige al usuario a la página de inicio
        
        }
    } else {
        $errors['password'] = 'Nombre de usuario o contraseña incorrectos';
    }


?>
<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <header>
                        <h1>Login</h1>
                    </header>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $inputs['name'] ?? '' ?>" class="<?php echo isset($errors['name']) ? 'error' : '' ?>">
                    </div>
                    <small><?php echo $errors['name'] ?? '' ?></small>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="********" value="<?php echo $inputs['password'] ?? '' ?>" class="<?php echo isset($errors['password']) ? 'error' : '' ?>">
                    </div>
                    <small><?php echo $errors['password'] ?? '' ?></small>
                    <br>
                    <button class="btn btn-outline-danger" type="submit">Log in</button>
                </form>
            </center>
        </div>
    </div>
</div>