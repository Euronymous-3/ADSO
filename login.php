<?php
$servername = "127.0.0.1";
$username = "admin";
$password = "123456";
$dbname = "login";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales
$sql = "select * from Usuarios where Usuarios.ingresoUsuario = 'admin' and Usuarios.ingresoContrasenia='123456'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}

// Cerrar conexión
$conn->close();
?>
