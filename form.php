<?php include('includes/db.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="procesar_login.php" method="POST">
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required><br><br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrena" name="contrena"
    required><br><br>
    <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>


<?php
// Obtener los datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrena'];
// Consultar la base de datos para ver si hay un usuario con ese correo
// electrónico y contraseña
$query = "SELECT * FROM usuarios WHERE correo = '$correo' AND
contrena = '$contrasena'";
$resultado = mysqli_query($conn, $query);
if (mysqli_num_rows($resultado) == 1) {
// Iniciar sesión y redirigir al usuario a la página de bienvenida
$_SESSION['correo'] = $correo;
header("Location: form.php");
} else {
// Mostrar un mensaje de error si no se encuentra un usuario con esas
// credenciales
echo "Correo electrónico o contraseña incorrecto";
}
?>






