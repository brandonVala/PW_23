<?php
echo "Hola mundo <br>"; #mostrar cadena de texto al usuario
echo 'PHP!'; // mostrar otra cadena de texto al usuario

//comentario forma 1, fin de linea
# comentario forma 2, fin de linea

/*
comentario multilinea
*/

$miVariable  = 'variable'; # tipo string
$mi_contador = 10; #tipo entero

//forma de concatenar 
//echo "<br/>" . $miVariable . ' ' . $mi_contador;
echo "<br/>$miVariable $mi_contador";
echo '<br/>$miVariable $mi_contador';

#declarar un array indexado
$miArray = array('uno', 'dos', 'tres');
echo "<br/>$miArray[0]";
//array asociativo
$miArray2 = array('uno' => '1', 'dos' => '2', 'tres' => '3');
echo "<br/>", $miArray2['uno'];

print_r($miArray);
echo '<br/>';
print_r($miArray2);
//leer sobre json
echo '<br/>';
echo 'tratar el array asociativo como json';
echo json_encode($miArray2);
echo '<br/>';

# crear objetos y tratarlos como json
$objeto = array('nombre'=> 'Juan', 'materia'=> 'Quimica');
echo json_encode($objeto);
echo '<br/>';
echo '<br/>';
$objeto2 = array(
    'nombre' => 'Juan','materias'=>
    array('mat1' =>'Matematicas','mat2'=>'Fisica','mat3'
    =>'Quimica')
);
echo json_encode($objeto2);
echo '<br/>';
echo '<br/>';
echo '<br> Cora González Ramírez <br/>';