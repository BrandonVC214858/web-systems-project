<?php
require '../connection/conect_db.php';

$sql = "SELECT id, asunto, correo, mensaje FROM correos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Imprimir datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Asunto: " . $row["asunto"]. " - Correo: " . $row["correo"]. " - Mensaje: " . $row["mensaje"]. "<br>";
  }
} else {
  echo "0 resultados";
}
$conn->close();
?>
