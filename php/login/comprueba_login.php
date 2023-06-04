<?php
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['password'];
try {
    $conexion = new mysqli('localhost', 'root', '', 'test');
    //verificar si hay algun error al conectarse
    if (mysqli_connect_error()) {
        echo 'Error al conectar';
        exit();
    }
    $conexion->set_charset('utf8');
    $sql="SELECT * FROM usuarios_pass WHERE
    usuario='$usuario'";//buscaral usuario en la tabla
    $resultado = $conexion->query($sql);//ejecutar sql
    //verificar que el usuario esta registrado
    if ($resultado->num_rows > 0){
        $pass_correcta = false;
        while($fila =$resultado->fetch_assoc()){
        //["id"=>1,"usuario"=>"pedro","password"=>"kl43iosd"];
        if(password_verify($pass,$fila['password'])){
            $pass_correcta = true;
        }
    } //Leer sobre sesiones en php
    if($pass_correcta){
        echo "Sesion iniciada correctamente";
        echo "Bienvenido(a): $usuario";
        //utilizar una sesion para guardar el usuario loguea
        session_start();//oblogatorio para sesiones
        $_SESSION['usuario'] = $usuario;
        header('location:registrados1.php');
    } else {//password incorrecta
        header('location:login.html');
    }
} else {//no existe el usuario
    header('location:login.html');
}
} catch (Exception $e) {
    echo "Error: $e->getMessage()";
} finally {
    $conexion->close(); //liberar recursos
}
echo '<br/>';
echo '<br/>';
echo '<br> Cora González Ramírez <br/>';