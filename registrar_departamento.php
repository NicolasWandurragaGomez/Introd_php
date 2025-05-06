<?php
  error_reporting(E_ALL);
  ini_set('display errors', '1');
?>

<?php
  require 'modelo/conexion.php';

  session_start();

  if(isset($_SESSION['username']))
  {
    $nombre_usuario = $_SESSION['username'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar departamento</title>
</head>
<body>
    <h1>Registrar departamento</h1>
    <?php
       echo 'Usuario: '.$nombre_usuario;
    ?>
    <!--Formulario de inicio de sesion -->

    <form action="modelo/reg_departamento.php" method = "post">
        <h2>Departamento</h2>
        <label for="">Codigo:</label>
        <input type="text" name="id_departamento" id="" required>
        <br><br>
        <label for="">Nombre:</label>
        <input type="text" name="nombre_departamento" id="" required>
        <br><br>
        <label for="">Presupuesto:</label>
        <input type="text" name="presupuesto_departamento" id="" required>
        <br><br>        

        <button type="submit">Registrar</button>
    </form>

</body>
</html>
