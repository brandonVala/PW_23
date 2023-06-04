<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['usuario']) == false){
       header('location:login.html');
    }
    ?>
    <h1>Bienvenido(a) Usuario registrado</h1>
    <?php echo $_SESSION['usuario'] ?>
    <p>
        <a href="cierre.php">Cerrar sesion</a>
    </p>
    <p>Esta información es solo para usuarios registrados</p>

    <table>
        <tr>
            <td colspan="3">Zona de usuario registrado</td>
    </tr>
    <tr>
          <td><a href="registrados2.php">Pagina1</a></td>
          <td><a href="registrados3.php">Pagina2</a></td>
          <td><a href="registrados4.php">Pagina3</a></td>
      </tr>
  </table>
</body>
</html>
<h2>
    <b>Cora González Ramírez</b>
</h2>