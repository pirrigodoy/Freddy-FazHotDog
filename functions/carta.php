<?php
$carta = [
    "Hot Dog Picante"=>["precio"=>2.5,"tipo"=>"comida", "source"=>"HotDogPicante.png"],
    "Hot Dog Vegetariano"=>["precio"=>3.5,"tipo"=>"comida","source"=>"HotDogVegetariano.png"],
    "Hot Dog Simple"=>["precio"=>2.5,"tipo"=>"comida","source"=>"HotDog.png"],
    "Cheese Dog "=>["precio"=>4.5,"tipo"=>"comida","source"=>"CheeseDog.png"],
    "Chocolate Dog"=>["precio"=>1.5,"tipo"=>"comida","source"=>"ChocolateDog.png"],
    "Patatas Fritas"=>["precio"=>1,"tipo"=>"comida","source"=>"Patatas.png"],
    "Agua"=>["precio"=>0.8,"tipo"=>"bebida","source"=>"Agua.png"],
    "Cocacola"=>["precio"=>1.35,"tipo"=>"bebida","source"=>"cocaCola.png"],
    "Nestea"=>["precio"=>1.25,"tipo"=>"bebida","source"=>"Nestea.png"],
];

$hotDogs = [
    "Hot Dog Picante"=>["ingredientes"=>[$ingredientes[2],$ingredientes[5],$ingredientes[8]], "source"=>"hotDogPicante.png"],
    "Hot Dog Vegetariano"=>["ingredientes"=>[$ingredientes[1],$ingredientes[5],$ingredientes[7]], "source"=>"hotDogPicante.png"],
    "Hot Dog Classic"=>["ingredientes"=>[$ingredientes[3],$ingredientes[5],$ingredientes[9]], "source"=>"hotDogPicante.png"],
    "Hot Dog Deluxe"=>["ingredientes"=>[$ingredientes[0],$ingredientes[4],$ingredientes[6]], "source"=>"otDogPicante.png"]
];

$bebidas = [
    "Agua" =>["precio"=>0.5, "source"=>"agua.png"],
    "Coca Cola" => ["precio"=>1.5, "source"=>"cocaCola.png"],
    "Fanta" => ["precio"=>1.5, "source"=>"fanta.png"],
    "Sprite" => ["precio"=>1.5, "source"=>"sprite.png"],
];
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

function getAllIngredients(){
    global $ingredientes;
    return  $ingredientes;
}
function getAllHotDogs(){
    global $hotdogs;
    return  $hotdogs;
}
function getAllBebidas(){
    global $bebidas;
    return  $bebidas;
}
//"Hot Dog Picante"=>["ingredientes"=>[$ingredientes[2],$ingredientes[5],$ingredientes[8]], "source"=>"hotDogPicante.png"],
function getHotDogPrice($hotDog):int{
    $price =0;
    foreach($hotDog as $key => $value){
        foreach($value as $key => $value){
            if($key=="ingredientes"){

            }
        }
    }
    return $price;
}

//"Topping Classic" =>["precio"=>0.5,"tipo"=>"topping", "source"=>"Topping4.png"],//9
function getIngredientPrice($ingredient){
    $price = $ingredient["precio"];
}
echo "Precio salchicha Deluxe".getIngredientPrice($ingredientes[0]);
?>