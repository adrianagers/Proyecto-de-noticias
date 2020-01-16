<?php
// teoria
// Que es php?
/* 
php: Hypertext Preprocessor
*/
// ARRAYS
$colores = array("Rojo", "Verde", "Azul", "Amarillo");

foreach($colores as $valores){
 echo " $valores <br> ";
}
echo count($colores); // longitud del arreglo
echo" <hr> ";
 
$autos= array("Ferrari", "Lamborghini", "Audi", "Toyota");
$longArreglo = count ($autos);

for( $i = 0 ; $i < $longArreglo; $i++){
    echo $autos[$i] . "<br>" ;
}
// Arreglos Asociativos

$persona =array("luna"=>"18", "Natalia"=>"26", "Andrés"=>"23");
// accedemos al arreglo atravez de la clave 
echo "Luna tiene " . $persona ['luna'] . " años";
echo "<hr>";
// como recorrer un arreglo asociativo
foreach($persona as $nombre => $nombre_edad){
    echo "Clave : " . $nombre .", Valor: " . $nombre_edad . "<br>";
}

// Arreglos multidimencionales 

$productos = [
    [
        'nombre' => 'Empanada',
        'precio'=>1000,
        'cantidad'=>12
    ],
    [
        'nombre'=>'pedazo de Pizza',
        'precio'=> 5000,
        'cantidad'=>5
    ]
];

$total = 0;
foreach($productos as $producto){
    $total += $producto ['precio'] * $producto ['cantidad'];
    echo $producto['nombre'] 
    ." :$" . $producto['precio'] 
    . " x " . $producto['cantidad']
    ."<br>";
}
echo "Total : ". $total;

// otra forma
$productos =array
(
    array("lechocha", 50000, 2),
    array("Galletas", 600, 12),
    array("Mentas", 1000, 22),
    array("Gaseosas", 2000, 7)
);
echo $productos [0][0] . "   Precios: " . $productos[0][1] . " Cantidad: " . $productos[0][2] . " <hr>";

// ejercicio


$peliculas = [
    [
        'Nombre' => '3 metros sobre el cielo',
        'Director'=>'Fernando González Molina',
        'Año'=>"2010",
        'Personaje principal'=>'Mario casas'
    ],
    [
        'Nombre' => 'espías a escondidas',
        'Director'=>'Troy Quane  ',
        'Año'=>"2019",
        'Personaje principal'=>'Lance Sterling'
    ],
    [
        'Nombre' => 'En busca de la felicidad',
        'Director'=>'Gabriele Muccino',
        'Año'=>"2007",
        'Personaje principal'=>' Will Smith,'
    ],
    [
        'Nombre' => 'creador de los muñecos',
        'Director'=>' Al Lougher',
        'Año'=>"2017",
        'Personaje principal'=>'Federico Tamburini II'
    ],
    [
        'Nombre' => 'Siete almas',
        'Director'=>'Gabriele Muccino',
        'Año'=>"2008",
        'Personaje principal'=>'Emily Posa'
    ],
];


foreach($peliculas as $pelicula){
    echo "<h1 style= 'color:green; text-align:center;' >". $pelicula['Nombre'] ."</h1>"
    ." Dirigida por el director: " . "<b  style= 'color:red;'>" . $pelicula['Director'] ."<br>" ."</b >"
    . " del <u> " . $pelicula['Año'] ."<br>" . "</u>"
    ." con el personaje '<i> " . $pelicula['Personaje principal'] . "</i>";
}


?>