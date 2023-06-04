<?php
#investigar
#require
#require_once
#include
#include_once
class Persona {
    private $nombre;
    private $apellido;
    private $edad;
    
    function __construct($nombre=null,$apellido=null,$edad=0)
    //cuando se iguala algo son parametros opcionales
    {
        $this->nombre= $nombre;
        $this->apellido= $apellido;
        $this->edad= $edad;
    }
    public function mostrar()
    {
        return get_object_vars($this);
    }
    public function setNombre($nombre)
    {
        $this ->nombre =$nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getEdad()
    {
        return $this->edad;
    }
}

echo '<br/>';
echo '<br/>';
echo '<br> Cora González Ramírez <br/>';