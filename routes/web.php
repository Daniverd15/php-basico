<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return view('DANIEL ENRIQUE VILLAMIZAR');
});
Route::get('/contactanos', function () {
    return view('form');
});

Route::get('/php-basico', function () {
    $name="Daniel Villamizar"; 
    $height = 1.86;
    $isLogin=true;
    $age=26;


    echo "<h1 style= 'color:red;'>Aprendiendo php</h1>";
    echo "<h2>". $name ."</h2>";
     echo "<p>". $name ."</p>";

    echo "<br><br><br>##########ESTRUCTURAS DE CONTROL##########<br><br>";

    $message="Soy $name, tengo $age años.". valadateAge($age);
    $message .=$isLogin ? "<br><br>Estoy logueado" : "No estoy logueado";
    echo $message;
    
    echo "<br><br><br>##########ESTRUCTURAS DE DATOS##########<br><br>";

    $pc = [
        "name" => "Pc Gamer core9",
        "price" => 6000,
        "marca" => "Lenovo"
    ];

    $teclado=[
        "name" => "Teclado",
        "price" => 200,
        "marca" => "ASUS"
    ];

    $listaProductos = [$pc,$teclado];

    foreach ($listaProductos as $item){
        echo $item['name'] . "<br>";
    }
   
});

function valadateAge($age) {
    if($age >=18){
     return"Soy mayor de edad";
    }else{
        return"Soy menor de edad";
    }
   
}

