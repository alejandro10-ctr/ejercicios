<?php


class persona{

    public $nombre; // propiedades
    private $edad;  // private => necesita un metodo o funcion para poder alterarse
    protected $altura;

    public function asignarNombre($nuvoNombre){  // acciones o métodos  (funciones)

        $this->nombre=$nuvoNombre;

    }

    public function imprimirNombre(){
        
        echo "Hola soy ".$this->nombre;

    }

    public function mostrarEdad(){
        $this->edad = 20;
        return $this->edad;
    }

}

$objetoAlumno = new persona();  // instancia o creación de un objeto
$objetoAlumno->asignarNombre("Alejandro"); // llamndo un método

$objetoAlumno2 = new persona();
$objetoAlumno2->asignarNombre("Oscar");
$objetoAlumno2->imprimirNombre();

echo $objetoAlumno->nombre."<br/>"; // imprimir una propiedad
echo $objetoAlumno2->nombre."<br/>"; 
echo $objetoAlumno2->mostrarEdad();



?>