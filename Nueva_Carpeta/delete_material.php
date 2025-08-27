<?php
header('Content-Type: application/json');

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'capadoccia';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos']));
}

$id = $_GET['id'] ?? null;

if (!$id) {
    echo json_encode(['success' => false, 'message' => 'ID de material no proporcionado']);
    exit;
}

$sql = "DELETE FROM materiales WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Material eliminado correctamente']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al eliminar el material']);
}

$stmt->close();
$conn->close();
?>
