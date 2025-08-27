<?php
// Iniciar sesión
session_start();

// Conectar a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto si tu base de datos tiene otro usuario
$password = ""; // Cambia esto si tu base de datos tiene otra contraseña
$dbname = "capadoccia"; // Reemplaza con el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recoger datos del formulario
    $email = $_POST['email']; // Correo electrónico
    $password = $_POST['password']; // Contraseña

    // Consulta SQL para obtener los datos del usuario por correo
    $sql = "SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontraron los datos del usuario
    if ($result->num_rows > 0) {
        // Obtener los datos del usuario
        $user = $result->fetch_assoc();

        // Iniciar sesión y almacenar solo el tipo de usuario en la variable de sesión
        $_SESSION['usuario'] = $user['usuario']; // tipo de usuario (usuario o Administrador)

        // Redirigir según el tipo de usuario
        if ($user['usuario'] == 'Administrador') {
            header("Location: admin.html"); // Redirigir al admin
        } else {
            header("Location: usuario.html"); // Redirigir al usuario
        }
        exit(); // Terminar el script después de redirigir
    } else {
        // Si no se encuentra el correo o la contraseña no coincide
        echo "<script>alert('Correo o contraseña incorrectos.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
