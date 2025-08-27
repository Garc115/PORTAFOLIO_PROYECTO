
<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia esto si usas un host diferente
$username = "root"; // Tu usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$dbname = "capadoccia"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capturar los datos del formulario
    $id = $_POST['materialId'];
    $nombre = $_POST['name'];
    $cantidad = $_POST['quantity'];
    $uso = $_POST['usage'];
    $fecha = $_POST['acquisitionDate'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO materiales (id, nombre, cantidad, uso, fecha) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $id, $nombre, $cantidad, $uso, $fecha);
    
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<script>alert('Material registrado exitosamente.'); window.location.href = 'altaMaterial.html';</script>";
        } else {
            echo "<script>alert('Error al registrar el material: " . $stmt->error . "');</script>";
        }

        // Cerrar la declaración preparada
        $stmt->close();
    
}

// Cerrar conexión
$conn->close();
?>
