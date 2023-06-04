<?php

if(!isset($_REQUEST['nombre'])){
    //echo'Hola desde PHP utilizando AJAX';
    $objeto2 = array(
        'nombre' => 'Juan','materias'=>
        array('mat1' =>'Matemáticas','mat2'=>'Fisica','mat3'
        =>'Quimica')
    );
    echo json_encode($objeto2);
    return;
}

//si no se uiliza peticion ajax, nombre y ap deben ser cajas de texto con la propiedad name igual a nombre y ap.

$nombre=$_REQUEST['nombre'];
$ap=$_REQUEST['ap'];
echo "informacion recibida desde una peticion AJAX <br/>";
echo "nombre: $nombre, apellido: $ap";