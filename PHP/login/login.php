<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?PHP
include('../registro/conexionBD.php');

$usuario = $_POST['usuario'];

$consultaLogin = "SELECT * FROM persona WHERE usuario = '$usuario'";



?>

<body>

    <form action="../registro/paginaInicio.php" method="POST">
        <label for="usuario">Usuario : </label>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contrasena">Contraseña : </label>
        <input type="password" id="contrasena" name="contrasena"><br>
        <input type="submit" value="Ingresar">
        <a href="../registro/registroUser.php">No estoy registrado </a>
    </form>


</body>

</html>