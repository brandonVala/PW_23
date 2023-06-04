<?php
//user_db_controller.php
require '../models/user.php';
require '../db/ConnectDB.php';

$db = new ConnectDB();
$user = new user('0596012','Juan Perez');

$db->connect();
//Recuperar el método que trae la peticion
$metodo = $_SERVER['REQUEST_METHOD'];

//echo $metodo;
switch($metodo) {
    case 'GET';
           $sql=$user->selectusersSql();
           //print_r($_REQUEST);
           if(isset($_REQUEST['ncontrol'])){
               $user->setncontrol($_REQUEST['ncontrol']);
               $sql = $user->selectusersSql();
           }
           echo json_encode($db->select($sql));
           break;
       case 'PUT':
           //parse_str(file_get_contents('php://input'), $post_vars);
        $post_vars = json_decode(file_get_contents('php://input'));
        // echo json_encode($post_vars);
        // return;
        //echo 'put';
        $ncontrol = $post_vars->ncontrol;
        $name = $post_vars->name;
        $user = new User($ncontrol, $name);

        $result =  $db->update($user->updateUserSql());
        if ($result)
            echo 'Registro actualizado con exito';
        else
            echo 'Error al actualizar';

           break;
       case 'DELETE':
        $post_vars = json_decode(file_get_contents('php://input'));
        //echo json_encode($post_vars);
        $ncontrol = $post_vars->ncontrol;
        //echo"ncontrol es:" . ncontrol;
        //return;
        $user = new user($ncontrol);
        $result = $db->delete( $user->deleteuserSql());
        if ($result)
           echo 'Registro eliminado con exito';
        else
           echo 'Error al eliminar';
           break;
       case 'POST':
        $post_vars = json_decode(file_get_contents('php://input'));
        $ncontrol = $post_vars->ncontrol;
        $name = $post_vars->name;
        $user = new user($ncontrol,$name);
        $result = $db->Insert( $user->insertuserSql());
        if ($result)
           echo 'Registro agregado con exito';
        else
           echo 'Error al agregar';
           break;
}
//http://localhost/pw_23/php/reportes/spa/controllers/user_db_controller.php?ncontrol=20940019
//http://localhost/pw_23/php/reportes/spa/controllers/user_db_controller.php?

$db->close();
