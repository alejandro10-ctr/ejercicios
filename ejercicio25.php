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

class trabajador extends persona{
   public $puesto;
   public function presentarseComoTrabajador(){
    echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;  
   }

}



$objetoTrabajador = new trabajador();  // instancia o creación de un objeto
$objetoTrabajador->asignarNombre("Alejandro D"); // llamndo un método
$objetoTrabajador->puesto="Programador";

$objetoTrabajador->presentarseComoTrabajador();


?>