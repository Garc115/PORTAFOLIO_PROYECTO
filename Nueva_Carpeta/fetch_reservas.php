<?php
// Obtener los datos de la solicitud POST
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capadoccia";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Consulta para obtener las reservas entre las fechas
$sql = "SELECT nombre, cantidad, correo, material, fecha FROM reservas WHERE fecha >= ? AND fecha <= ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Failed to prepare statement"]));
}

$stmt->bind_param("ss", $fecha_inicio, $fecha_fin);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
