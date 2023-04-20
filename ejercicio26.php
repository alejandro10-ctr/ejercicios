<?php


class persona{

    public $nombre; // propiedades
    private $edad;  // private => necesita un metodo o funcion para poder alterarse
    protected $altura;


    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }


    public function asignarNombre($nuevoNombre){  // acciones o métodos  (funciones)

        $this->nombre=$nuevoNombre;

    }

    public function imprimirNombre(){
        
        echo "Hola soy ".$this->nombre;

    }

    public function mostrarEdad(){
        $this->edad = 20;
        return $this->edad;
    }

}

$objetoAlumno = new persona("Pedro");  // instancia o creación de un objeto
//$objetoAlumno->asignarNombre("Alejandro"); 
$objetoAlumno->imprimirNombre();



?>