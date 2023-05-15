<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Usuario{
    private static $obtenerUsuario = "<b>Datos del usuario de la Biblioteca</b>";
    public $nombres;
    protected $email;
    public $cantidad;

    public function __construct($nombres, $email, $cantidad){
        $this->nombres = $nombres;
        $this->email = $email;
        $this->cantidad = $cantidad;
    }

    final public static function obtenerUsuario(){
        echo self::$obtenerUsuario;
    }

    public function nombre(): void{
        echo " El nombre del Usuario es: $this->nombres";
    }

    # metodo getter para el email protegido
    public function getEmail() : void{
        echo " El email es: $this->email";
    }
    # metodo setter para el email protegido
    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getCantidad(): void{
        echo "La cantidad de libros a utilizar es: $this->cantidad";
    }
}

class Catedratico extends Usuario{
    public $materia;

    public function __construct($nombres = " ", $email = " ", $cantidad = " ", $materia = " ") {
        parent::__construct($nombres, $email, $cantidad);
        $this->materia = $materia;
    }

    public function getmateria() : void{
        echo"La materia que imparte es: $this->materia";
    }

    public function nombre(): void{
        echo " El nombre del Catedratico es: $this->nombres";
    }
    
}


class Estudiante extends Usuario{
    public $carnet;

    public function __construct($nombres = " ", $email = " ", $cantidad = " ", $carnet = " ") {
        parent::__construct($nombres, $email, $cantidad);
        $this->carnet = $carnet;
    }

    public function getCarnet() : void{
        echo"El numero de carnet es: $this->carnet";
    }

    public function nombre(): void{
        echo " El nombre del Estudiante es: $this->nombres";
    }
 
}


$Usuario1 = new Catedratico('Jose Ramos Perez', 'jose@gmail.com', 2,'Literatura 3');
$Usuario1->obtenerUsuario();
echo "<br>";
$Usuario1->nombre();
echo "<br>";
$Usuario1->getEmail();
echo "<br>";
$Usuario1->getCantidad();
echo "<br>";
$Usuario1->getmateria();

echo"<hr>";

$Usuario2 = new Estudiante('Juan Carlos', 'juan@gmail.com', 5, '658054');
$Usuario2->obtenerUsuario();
echo "<br>";
$Usuario2->nombre();
echo "<br>";
$Usuario2->getEmail();
echo "<br>";
$Usuario2->getCantidad();
echo "<br>";
$Usuario2->getCarnet();
