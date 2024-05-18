<?php

	include("../connection/conect_db.php");

  $result = mysqli_query($conn, "SELECT * FROM correos");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/correos.css">
    <title>SuperJuarez</title>
</head>

<body>
    <header>
        <nav>
            <div class="left-hd">
                <a href="../../html/index.html"><img class="logo" src="../../multimedia/img/logo.png" alt="Logo"></a>
                <a href="../../html/index.html">
                    <h1>Turi Juarez</h1>
                </a>
            </div>


            <a href="../../html/login.html">
                <h2 id="nombreUsuario">Iniciar Sesion</h2>
            </a>
        </nav>
    </header>
    <div class="video-primary">
        <video src="../../multimedia/video/juarez.mp4" autoplay loop muted></video>
    </div>
    <main>
        <section class="areas">
            <h1>Correos enviados a Turi Juarez</h1>
              <table>
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Asunto</th>
                    <th>Correo</th>
                    <th>Mensaje</th>
                  </tr>
                </thead>
                <tbody style="font-weight: bolder;">

                  <?php
                    if (is_array($result) || is_object($result)) {
                      foreach ($result as $data) {
                      ?>
                        <tr>
                          <td><?= $data['id'];?></td>
                          <td><?= $data['asunto'];?></td>
                          <td><?= $data['correo'];?></td>
                          <td><?= $data['mensaje'];?></td>
                        </tr>              
                      <?php 
                      }
                    }
                  ?>
                </tbody>
              </table>
        </section>
    </main>
    <footer>
        <span>
            <a href="../../html/contactanos.html">
                <p><strong>Contactanos</strong></p>
            </a>
            <a href="../../html/acercade.html">
                <p>Acerca de la pagina</p>
            </a>
            <a href="correos.php">
                <p>Correos</p>
            </a>
        </span>
        <span>
            <p><strong>Nombre Equipo</strong></p>
            <p>Brandon Venegas Cervantes - 214858</p>
            <p>Jaime David Andujo Paredes - 216284</p>
        </span>
    </footer>
</body>
<script src="../../js/localStorage/sesion.js"></script>

</html>