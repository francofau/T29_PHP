<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T29 - Ejercicio 6</title>
</head>
<body>
<?php
class Persona {
    protected $nombre;
    protected $edad;

    function definir($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function muestra(){
        echo 'Nombre: '.$this->nombre.'<br> Edad: '.$this->edad.'<br>';
    }
}

class Empleado extends Persona{
    protected $sueldo;

    function cargarSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    function imprimir(){
        echo 'Nombre: '.$this->nombre.'<br> Edad: '.$this->edad.'<br>';
        echo 'Sueldo: '.$this->sueldo.' €';
    }
}

$p1 = new Persona;
$p1->definir('Franco',250);
$p1->imprimir();
echo '<br>';
$e1 = new Empleado;
$e1->definir('María',320);
$e1->cargarSueldo(3000);
$e1->imprimir();

?> 
</body>
</html>