<?php

class Persona 
{

    public $nombreCompleto;
    public $edad;
    private $password;

    public static $asignatura = "Programación Web";
    const MI_CONSTANTE = 3.1416;

    public function __construct($nombreCompleto, $edad)
    {
        $this->nombreCompleto = $nombreCompleto;
        $this->edad = $edad;
        $this->password = "Esta propiedad sólo se puede asignar aquí.";
    }

    // public function __destruct()
    // {
    //     echo "<p>Objeto destruido</p>";
    // }

    public function saludar(){
        echo "Este es mi método 1";
    }

}

trait Programador {
    public function programar()
    {
        echo "Estoy programando!";
    }
}

class Estudiante extends Persona {
    use Programador;
    public function hacerTarea()
    {
        echo "Estoy haciendo mi tarea; es mucha!!";
    }
}

$persona1 = new Persona("Víctor", "21");

// Asignación de propiedades
$persona1->nombreCompleto = "Víctor Hugo Vázquez Gómez";
$persona1->edad = "21";

// Obtención de propiedades
echo $persona1->nombreCompleto;
echo "<br />";
echo $persona1->edad;
echo "<br />";
echo Persona::$asignatura;
echo "<hr />";

$estudiante = new Estudiante("Víctor Hugo", "21");
echo $estudiante->nombreCompleto;
echo "<br />";
$estudiante->hacerTarea();
echo "<br />";
$estudiante->programar();