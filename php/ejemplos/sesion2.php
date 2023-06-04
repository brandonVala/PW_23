<?php
//funciones
function saludo()
{
    echo 'Hola mundo';
}
function suma($a, $b)
{
    return $a + $b;
}
function producto($a, $b)
{
    return $a * $b;
}
$a = $_REQUEST['num1'];
$b = $_REQUEST['num2'];
$op = $_REQUEST['op'];
switch ($op) {
    case 's':
        echo 'La suma es: ' . suma($a, $b);
        break;
    case 'p':
        echo 'El producto es: ' . producto($a, $b);
        break;
    default:
        echo 'Operacion no valida';
}
//http://localhost/PW_23/php/ejemplos/sesion2.php?num1=3&num2=3&op=s
//http://localhost/PW_23/php/ejemplos/sesion2.php?num1=3&num2=3&op=p
echo '<br/>';
echo '<br/>';
echo '<br> Cora González Ramírez <br/>';