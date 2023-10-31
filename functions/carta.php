<?php
$ingredientes=[
    "Salchicha Deluxe" =>["precio"=>2,"tipo"=>"salchicha", "source"=>"SalchichaDeluxe.png"],//0
    "Salchicha Vegetariana" =>["precio"=>1.5,"tipo"=>"salchicha", "source"=>"SalchichaVegetariana.png"],//1
    "Salchicha Picante" =>["precio"=>1.5,"tipo"=>"salchicha", "source"=>"SalchichaPicante.png"],//2
    "Salchicha Classic" =>["precio"=>1,"tipo"=>"salchicha", "source"=>"SalchichaClassic.png"],//3
    "Pan Brioche" =>["precio"=>1,"tipo"=>"pan", "source"=>"PanBrioche.png"],//4
    "Pan Classic" =>["precio"=>0.5,"tipo"=>"pan", "source"=>"PanClassic.png"],//5
    "Topping Deluxe" =>["precio"=>0.5,"tipo"=>"topping", "source"=>"Topping1.png"],//6
    "Topping Vegetariano" =>["precio"=>0.5,"tipo"=>"topping", "source"=>"Topping2.png"],//7
    "Topping Picante" =>["precio"=>0.5,"tipo"=>"topping", "source"=>"Topping3.png"],//8
    "Topping Classic" =>["precio"=>0.5,"tipo"=>"topping", "source"=>"Topping4.png"],//9
];
$bebidas = [
    "Agua" =>["precio"=>0.5, "source"=>"agua.png"],
    "Coca Cola" => ["precio"=>1.5, "source"=>"cocaCola.png"],
    "Nestea" => ["precio"=>1.5, "source"=>"Nestea.png"],
    "Sprite" => ["precio"=>1.5, "source"=>"sprite.png"],
];
$patatas = [
    "Patatas Fritas Classic" =>["precio"=>1, "source"=>"atatas.png"],
    "Patatas Fritas Deluxe" =>["precio"=>1.5, "source"=>"patatasFritasDeluxe.png"],
    "Patatas Fritas Rústicas" =>["precio"=>1, "source"=>"patatasFritasRusticas.png"],
];
$hotDogs = [
    "Hot Dog Picante"=>["ingredientes"=>[$ingredientes["Salchicha Picante"],$ingredientes["Pan Classic"],$ingredientes["Topping Picante"]], "source"=>"hotDogPicante.png"],
    "Hot Dog Vegetariano"=>["ingredientes"=>[$ingredientes["Salchicha Vegetariana"],$ingredientes["Pan Classic"],$ingredientes["Topping Vegetariano"]], "source"=>"hotDogVegetariano.png"],
    "Hot Dog Classic"=>["ingredientes"=>[$ingredientes["Salchicha Classic"],$ingredientes["Pan Classic"],$ingredientes["Topping Classic"]], "source"=>"hotDog.png"],
    "Hot Dog Deluxe"=>["ingredientes"=>[$ingredientes["Salchicha Deluxe"],$ingredientes["Pan Brioche"],$ingredientes["Topping Deluxe"]], "source"=>"CheeseDog.png"]
];
$tamanyos = ["Grande"=>["precio"=>3], "Mediano"=>["precio"=>2],"Mini"=>["precio"=>1]];
$carta = [
    "hotdogs" => $hotDogs,
    "bebidas" => $bebidas,
    "patatas" => $patatas
];
function getAllTamanyos(){
    global $tamanyos;
    return $tamanyos;
}
function getAllIngredients(){
    global $ingredientes;
    return  $ingredientes;
}
function getAllHotDogs(){
    global $hotDogs;
    return  $hotDogs;
}
function getAllBebidas(){
    global $bebidas;
    return  $bebidas;
}
function getAllPatatas(){
    global $patatas;
    return  $patatas;
}

function getAllCarta(){
    global $carta;
    return  $carta; 
}

/**
 * Function that returns the price of a hot dog given
 * Param $hotDog the hot dog of which we want to know it's price.
 */
function getHotDogPrice($hotDog):float{
    $price =0;
    foreach ($hotDog as $key => $value) {
        if ($key == "ingredientes") {
            foreach ($value as $ingredientes=>$ingrediente) {
                $price += getIngredientPrice($ingrediente);
            }
        }
    }
    return $price;
}

/**
 * Function that returns the price of the fries given
 * Param $patata the fries of which we want to know it's price.
 */
function getPatataPrice($patata):float{
    $price =0;
    foreach ($patata as $key => $value) {
        if ($key == "precio") {
            $price = $value;
        }
    }
    return $price;
}

/**
 * Function that returns the price of a drink given
 * Param $hotDog the drink of which we want to know it's price.
 */
function getBebidaPrice($bebida):float{
    $price =0;
    foreach ($bebida as $key => $value) {
        if ($key == "precio") {
            $price = $value;
        }
    }
    return $price;
}

/**
 * Function that returns the price of an ingredient given.
 * Parm $ingredient the ingredient of which we want to know it's price.
 */
function getIngredientPrice($ingredient){
    return $ingredient["precio"];
}

function getOrderPrice($order):array{
    $ticket = [];
    foreach($order as $key=>$value){
            if($key==="hotdogs"){
                foreach($value as $nombre =>$alimento){
                    $ticket[$nombre]=getHotDogPrice($alimento);
            }
            }else if($key==="bebidas"){
                foreach($value as $nombre =>$alimento){
                    $ticket[$nombre]=getBebidaPrice($alimento);
            }
            }else if($key==="patatas"){         
                foreach($value as $nombre =>$alimento){
                    $ticket[$nombre]=getPatataPrice($alimento);}
            }
        }
    return $ticket;
}

function getIngredientsByType($type):array{
    $ingredients = [];
    foreach (getAllIngredients() as $nombre => $ingrediente) {
        if ($ingrediente['tipo'] == $type) {
            $ingredients[$nombre] = $ingrediente;
        }
    }
    return $ingredients;
}

?>