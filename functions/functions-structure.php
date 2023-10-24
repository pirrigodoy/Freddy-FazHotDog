<?php
    function myHeader(){
        $head = <<<CABECERA
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
                    
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Impresiones de Arrays</title>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="./css/styles.css">
        </head>
        CABECERA;
        echo $head;
    }

    function myMenu(){
        $menu=<<<HERE
            <nav class="navbar navbar-warning bg-warning">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src=./img/logo.png height="75" width="75"></img> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Pedido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        HERE;
        echo $menu;
        echo '<br>';
    }

    // Print Line. Appends an return at the end
    //------------------------------------------------------------------------------------------------------------
    function println($something): void {
        echo $something . '<br>';
    }
?>