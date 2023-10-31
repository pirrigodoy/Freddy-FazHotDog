<?php

function exportFile($ticket,string $fileLocation,string $title){
    $total =0;
    require('../resources/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, $title);
    
    $pdf->Ln();
    
    $pdf->SetFont('Arial', '', 12);
    foreach($ticket as $key =>$value){
        $pdf->MultiCell(0, 10, $value." - ".$key);
        $total+=$value;
    }

    $pdf->MultiCell(0, 10, $total." - TOTAL");
    $contenidoPDF = $pdf->Output('', 'S');
    
    file_put_contents($fileLocation, $contenidoPDF);
}
function showPedido(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Procesa el formulario aquí y guarda los resultados en variables
        $nombre = $_POST['name'] ?? '';
        $apellido = $_POST['apellido'] ?? '';
        $curso = $_POST['curso'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $email = $_POST['email'] ?? '';
        $dni = $_POST['dni'] ?? '';
        $cantidad = $_POST['cantidad'] ?? '';
        $tamanyo = $_POST['tamanyo'] ?? '';
        $salchicha = $_POST['salchicha'] ?? '';
        $pan = $_POST['pan'] ?? '';
        $topping = $_POST['topping'] ?? '';
        $patatas = $_POST['patatas'] ?? [];
        $bebidas = $_POST['bebidas'] ?? '';

        // Imprime los resultados debajo del formulario
        echo '<div class="container mt-4">';
        echo '<h2 class="text-primary">Resultados del pedido:</h2>';
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Curso: $curso</p>";
        echo "<p>Teléfono: $telefono</p>";
        echo "<p>Email: $email</p>";
        echo "<p>DNI: $dni</p>";
        echo "<p>Cantidad: $cantidad</p>";
        echo "<p>Tamaño: $tamanyo</p>";
        echo "<p>Salchicha: $salchicha</p>";
        echo "<p>Pan: $pan</p>";
        echo "<p>Topping: $topping</p>";

        if (!empty($patatas)) {
            echo '<p>Patatas:</p>';
            echo '<ul>';
            foreach ($patatas as $patata) {
                echo "<li>$patata</li>";
            }
            echo '</ul>';
        }
        echo "<p>Bebidas: $bebidas</p>";
        
        echo '</div>';
    }
}

/**
 * Metodo que comprueba que hay datos en la variable de sesion usuario y contrasenya.
 * Tambien comprueba qu elos datos de login son correctos
 */

 function checkLogin(){
    if(isset($_SESSION["name"]) && isset($_SESSION["password"])){
        $user=$_SESSION["name"];
        $password= $_SESSION["password"];
        if(login($user,$password)){
            return true;
        }
    }
    return false;
 }
?>