<?php
echo "Hola Malparidos";
echo '<br>';
echo "Hola Mundo!";

$nombre = 'pepe';
$apellido = "Gomez";
echo '<br> Hola '.$nombre.' '.$apellido;
echo "<br> Hola $nombre $apellido";
$edad = 25;
$estatura = 1.69;
$mayorEdad = true; //false
/**
 * Bloque de comentarios perros hptas, acuerdate de mi, de aquel que quiso darte el universo
 */
$prueba = null;
$prueba = array(1,2,3,4,5,6);
$prueba = [1, 2, 3, true, 5, "a"];
//$prueba = "pepe";
echo '<br>'. $prueba[2];

$persona =[
    "nombre" => "Pepe",
    "apellido" => "Gomez",
    "edad" => 30,
    "numerosSuerte" => [20, 12, 6],
];
echo "<br> $numeroSuerte";
?>