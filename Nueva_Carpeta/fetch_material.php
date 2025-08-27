<?php
// Conexión a la base de datos (ajusta tus credenciales)
$host = 'localhost';
$dbname = 'capadoccia';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Consulta SQL
$stmt = $pdo->query("SELECT id, nombre, cantidad, uso, fecha FROM materiales");

// Obtener todos los resultados como un array asociativo
$materiales = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver los datos como JSON
echo json_encode($materiales);
?>
