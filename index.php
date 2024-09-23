<?php
session_start();
$msg = "";

if (!empty($_POST)) {
    $msg = $_POST["msg"];
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSS Attack</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1>Welcome to My Website</h1>
        <form action="" method="POST">
            <label for="msg">Escribe un mensaje :)</label>
            <input type="text" name="msg" id="msg" />
            <input type="submit" value="Enviar" />
        </form>

        <p><?= "<b>El mensaje recibido es: </b>" . $msg ?></p>
    </main>
  </body>
</html>
