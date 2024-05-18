<?php
require '../connection/conect_db.php';

$asunto = $_POST['affair'];
$correo = $_POST['main'];
$mensaje = $_POST['Message'];

$stmt = $conn->prepare("INSERT INTO correos (asunto, correo, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $asunto, $correo, $mensaje);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();

header('Location: ../views/correos.php');
die();
?>
