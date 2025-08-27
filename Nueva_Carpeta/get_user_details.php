<?php
header('Content-Type: application/json');
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'capadoccia';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT id, nombre, fecha_nacimiento, correo, telefono, usuario FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo json_encode($user);
} else {
    echo json_encode([]);
}
$stmt->close();
$conn->close();
?>
