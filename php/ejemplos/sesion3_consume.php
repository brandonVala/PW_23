<?php
include 'sesion3.php';

$persona =new Persona();
$persona ->setNombre('Juan');
$persona ->setApellido('Perez');
$persona ->setEdad(30);

echo json_encode($persona -> mostrar());

echo '<br/>';
echo '<br/>';
echo '<br> Cora González Ramírez <br/>';