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

$sql = "SELECT id, nombre FROM usuarios";
$result = $conn->query($sql);

$users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}
echo json_encode($users);
$conn->close();
?>
