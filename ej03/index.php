<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T29 - Ejercicio 3</title>
</head>
<body>
<?php
  class Persona {
    protected $nombre;
    protected $edad;

    public function cargar($nom,$ed){
      $this->nombre=$nom;
      $this->edad=$ed;
    }
    public function imprimirDatosPersonales(){
      echo 'Nombre y Apellido: '.$this->nombre.'<br>';
      echo 'Edad: '.$this->edad.'<br>';
    }
  }

  /* clase empleado hereda de persona */
  class Empleado extends Persona{
    protected $sueldo;
    public function cargarSueldo($su){
      $this->sueldo=$su;
    }
    public function imprimirSueldo(){
      echo 'Sueldo: '.$this->sueldo.'<br>';
    }
  }

  $persona1=new Persona();
  $persona1->cargar('Franco Fauda',29);
  echo 'Datos personales:<br>';
  $persona1->imprimirDatosPersonales();
  $empleado1=New Empleado();
  $empleado1->cargar('Omar Garcia',52);
  $empleado1->cargarSueldo(1234);
  echo 'Datos personales y sueldo del empleado:<br>';
  $empleado1->imprimirDatosPersonales();
  $empleado1->imprimirSueldo();
?>
</body>
</html>