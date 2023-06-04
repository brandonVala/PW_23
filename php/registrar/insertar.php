<?php
$usuario = $_REQUEST['usu'];
$pass = $_REQUEST['contra'];
//para cifrar el password
$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);
//echo "USUARIO:$usuario password:$pass_cifrado";
//empieza insercion de datos a la bd
try {
    $conexion = new mysqli('localhost', 'root', '', 'test');
    //verificar si hay algun error al conectarse
    if (mysqli_connect_error()) {
        echo 'Error al conectar';
        exit();
    }
    //no hay error, entonces se puede hacer la sentencia SQL
    $conexion->set_charset('utf8'); //trabajar acentos
    $sql = "INSERT INTO usuarios_pass(usuario,password) VALUES('$usuario','$pass_cifrado')";
    //ejecutar la consulta sql
    $resultado = $conexion->query($sql);
    echo $resultado ? "Registro exitoso" : "Error: " . $conexion->error;
} catch (Exception $e) {
    echo "Error: $e->getMessage()";
} finally {
    $conexion->close(); //liberar recursos
}
echo '<br/>';
echo '<br/>';
echo '<br> Cora González Ramírez <br/>';
