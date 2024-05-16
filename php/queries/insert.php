<?php
require '../connection/conect_db.php';

$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO correos (asunto, correo, mensaje)
VALUES ('Asunto del correo', 'correo@example.com', 'Este es el mensaje del correo')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo registro creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
