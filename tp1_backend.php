<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>TRABAJO PRÁCTICO N°1</h1>

<h3>Ejercicio 2</h3>
    
    <?php
    $mensaje= "Hola Mundo";
    echo $mensaje
    ?>
<br>
<hr>

<h3>Ejercicio 3</h3>

    <?php

    $numero=45;
    $numero1=22;

    $totalsuma= $numero + $numero1;
    echo $totalsuma
   ?>
<br>
<hr>
  
  <?php
    $numero=45;
    $numero1=22;

    $totalresta= $numero - $numero1;
    echo $totalresta
  ?>
<br>
<hr>

  <?php
   $numero=45;
   $numero1=22;

   $totalmultiplicacion= $numero * $numero1;
   echo $totalmultiplicacion
  ?>
<br>
<hr>

  <?php
   $numero=45;
   $numero1=22;

   $totaldivision= $numero / $numero1;
   echo $totaldivision
  ?>
<br>
<hr>

  <?php
   $decimalcociente= 0.046;
   $divisor= 22;

   $restodivision= $decimalcociente * $divisor;
   echo $restodivision
  ?>
<br>
<hr>
  <h3>Ejercicio 4</h3>

  <?php
    $farenheit= 68;
    echo $farenheit
  ?>
<br>
<hr>

<h3>Ejercicio 5</h3>

<h5>a)</h5>

  <?php
    $base= 18;
    $altura= 12;

    $perimetro= $base + $base + $altura + $altura;
    echo $perimetro
  ?>

  <?php
    $base= 18;
    $altura= 12;
   
    $area= $base * $altura;
    echo $area
  ?>
 
<h5>b)</h5>

  <?php
    $radio= 30;
    $pi= 3.14;
    $numero2= 2;

    $perimetrocirculo= $numero2 * $pi * $radio;
    echo $perimetro
  ?>

  <?php
    $radio= 30;
    $pi= 3.14;

    $areacirculo= $radio * $radio * $pi;
    echo $areacirculo
  ?>

</body>
</html>