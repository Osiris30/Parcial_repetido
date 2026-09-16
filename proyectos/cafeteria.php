<?php
session_start ();


$CATEGORIAS=[
    "BEBIDAS",
    "POSTRES",
    "ALIMENTOS"

];

$BEBIDAS=[
    ["nombre"=>"COCA COLA",
    "precio"=>1.35

    ],

    ["nombre"=> "Jugo de Naranja",
    "precio"=>2.50
    ],
    ["nombre"=> "Limonada",
    "precio"=>3.00
    ],
    ["nombre"=> "Jugo de ciruela",
    "precio"=>2.80
    ],

];

$POSTRES=[
    ["nombre"=> "TRES LECHES",
    "precio"=>1.75],

     ["nombre"=> "CUPCAKES",
    "precio"=>2.0],

     ["nombre"=> "PASTEL ",
    "precio"=>1.75],

     ["nombre"=> "BROWNIES",
    "precio"=>3.5],
];

$ALIMENTOS=[
     ["nombre"=> "CARNE ASADA",
    "precio"=>3.5],
     ["nombre"=> "POLLO A LA PLANCHA",
    "precio"=>4.5],
     ["nombre"=> "PESCADO",
    "precio"=>10.00],

];
if ($_SERVER["REQUEST_METHOD"]){

}

$categotiaSeleccionada=$GET["categoria"] ?? "TODOS";

$error=[];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFETERIA UES</title>
    <link href="" stylesheet="style.css">
</head>
<body>
    <form action="" method="post">
        <label>Nombre:</label>
        <input type="text">
        <label>Categoria</label>
        <input type="text">

        <label></label>
        <button type="submit">ENVIAR</button>

    </form>
    
</body>
</html>