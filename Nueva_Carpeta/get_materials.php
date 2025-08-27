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

$sql = "SELECT id, nombre, cantidad, uso, fecha FROM materiales";
$result = $conn->query($sql);

$materials = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $materials[] = [
            'id' => $row['id'],
            'name' => $row['nombre'],
            'quantity' => $row['cantidad'],
            'usage' => $row['uso'],
            'date' => $row['fecha']
        ];
    }
}

echo json_encode($materials);

$conn->close();
?>
