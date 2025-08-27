<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'capadoccia';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Leer los datos enviados por el cliente
    $data = json_decode(file_get_contents('php://input'), true);

    $name = $data['name'];
    $quantity = $data['quantity'];
    $email = $data['email'];
    $material = $data['material']; // Solo el nombre del material
    $reservationDate = $data['reservationDate']; // Obtener la fecha

    // Consulta para insertar en la tabla "reservas"
    $stmt = $pdo->prepare("INSERT INTO reservas (nombre, cantidad, correo, material, fecha) VALUES (:name, :quantity, :email, :material, :reservationDate)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':material', $material);
    $stmt->bindParam(':reservationDate', $reservationDate); // Vincular la fecha

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al insertar en la base de datos']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error de conexión: ' . $e->getMessage()]);
}
?>
