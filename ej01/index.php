<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T29 - Ejercicio 1</title>
</head>
<body>
<?php
abstract class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function cargar1($v)
  {
    $this->valor1=$v;
  }
  public function cargar2($v)
  {
    $this->valor2=$v;
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
  public abstract function operar();
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2;
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar1(85);
$suma->cargar2(12);
echo 'Valor 1: 85'.'<br>'.'Valor2: 12'.'<br>';
$suma->operar();
echo 'El resultado de la suma es: ';
$suma->imprimirResultado();
echo '<br>';
$resta=new Resta();
$resta->cargar1(43);
$resta->cargar2(21);
echo 'Valor 1: 43'.'<br>'.'Valor2: 21'.'<br>';
$resta->operar();
echo 'El resultado de la diferencia es: ';
$resta->imprimirResultado();

?>
</body>
</html>