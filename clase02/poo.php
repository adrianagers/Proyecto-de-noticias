<!-- BASE DE PROGRAMACION ORIENTASA A OBJETOS-->
<?php
 class Persona{
    //  Declarar las variables que utilizará la clase 
public $nombre;
public $apellido;
public $edad;
    // utilizar el constructor
    // inicia las variables (atributos de lal clase)
    // para que puedan ser distanciadas en el momento de realizar una instancia 
     public function __construct( $nombre, $apellido, $edad){
$this->nombre=$nombre;
$this->apellido=$apellido;
$this->edad=$edad;
     }  
     public function saludar (){
         echo "Hola, soy $this->nombre $this->apellido y tengo $this->edad años";
        }
     }
    //  se realiza la instancia con el nombre de la clase en minuscula 
$persona = new Persona('Geraldine ',' Romero', 18);
$persona-> saludar();
echo "<hr>";

// EJERCICIO

class RecetaDesayuno{
public $mocaccino;
public $azucar;
public $chocolate;
public $leche;
public $cafe;

// public $pancakes;
// public $huevo;
// public $fruta;

public function __construct( $mocaccino, $azucar, $chocolate, $leche, $cafe){
    
    $this->mocaccino=$mocaccino;
    $this->azucar=$azucar;
    $this->chocolate=$chocolate;
    $this->leche=$leche;
    $this->cafe=$cafe;
    
    // $this->pancakes=$pancakes;
    // $this->huevo=$huevo;
    // $this->fruta=$fruta;
    
}
public function bebida() {
    echo " <h1 style='color:green;'>INGREDIENTES  PARA HACER $this->mocaccino</h1> <h2 style ='margin-left:30px;'> 
    * 2 cucharadas de $this->leche <br> * 1 taza de $this->azucar <br>  * 1  cucharadas de  $this->chocolate <br> * 1 taza de $this->cafe </h2> ";
    
    echo "<p style='margin-left:50px;'> 1. En un cuenco mezclamos el $this->chocolate con el cacao puro y reservamos. Por otro lado, preparamos un $this->cafe  expreso bien cargado.<img src= 'img/'/> <br></p>";
    echo "<p style='margin-left:50px;'> 2. En un cazo mezclamos la $this->azucar con el  $this->leche a fuego muy bajo y sin que llegue a hervir. 
    Retiramos del fuego y con ayuda de un batidor o robot de cocina licuamos hasta que haga bastante espuma la mezcla. <br></p> ";
    echo " <p style='margin-left:50px;'> 3. En dos tazas, vertemos el $this->cafe a partes iguales. Agregamos poco a poco la $this->azucar $this->azucar con cuidado de no verter espuma.<br></p>";
    echo "<p style='margin-left:50px;'> 4. Con una cuchara cubrimos la mezcla de $this->cafe y $this->azucar con la espuma que nos ha quedado en el recipiente.<br></p>";
    echo "<p style='margin-left:50px;'> 5. Presentamos espolvoreando por encima de la espuma la mezcla que preparamos de $this->chocolate y cacao puro.</p>";
    }
}
//  se realiza la instancia con el nombre de la clase en minuscula 
$receta = new RecetaDesayuno( 'MOCACCINO ','  leche ', ' Azucar',' Chocolate en polvo', ' Café');
$receta-> bebida();





?>
