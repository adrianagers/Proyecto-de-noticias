<?php
/*FUNCIONES :
con funciones puedo llamar  la variable o metodo dentro de las comillas ya que, lo unico que concateno 
con en (puntico ) es cuando tengo que recorrer un arreglo */
function edadPersona($edadMinima = 18){
    if($edadMinima >= 18){
        echo " la edad es : $edadMinima <br> ";
    }else{
        echo "Eres menor de edad, lo sentimos :( :( <br>";
    }
}
edadPersona(35);
edadPersona();
edadPersona(15);
edadPersona(75);
edadPersona(10);
echo "<hr>";

// FUNCIONES CON RETURN
// en este caso podemos definir en tipo de variable que puede registrar el usuario
// siendo int / Inter =entero
function sumar(int $x, int $y){
    $z = $x + $y;
    return $z;
}
echo "5 + 10 =".sumar(5,10)."<br>"
."3 + 60=".sumar(3,60)."<br>".
"2 + 8=".sumar(2,8)."<br>";

// EJERCICIO

function numeros($numeroCien){
   if($numeroCien == "imprimir hasta cien"){
    for ( $i = 1; $i <= 100; $i++) {
        echo  $i ."<br>";
}
   }else{
    for ( $x = 101; $x <= 200; $x++) {
     echo  $x ."<br>";
     }
   }
}
 numeros("imprimir hasta cien");
 numeros('x');
 echo "<hr>";


//  TABLAS DE MULTIPLICAR

function tablas(){
    for($i = 1; $i <=10; $i++){
        for ( $y= 1; $y <=10 ; $y++) { 
        $rta = $i * $y;
    echo $i. " x " . $y . " = " . $rta ."<br>";
	  }
    }
}
 tablas ();

//  multiplos de 8

function multiplos($mul){
    for($i = $mul; $i <=500; $i+=$mul){
        echo $i . "<br>";
	  
    }
}
 multiplos (8);

 
 


?>
