<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <title>Formulario 2021</title>
</head>
<body>
    <form action="correos.php" method="post" id="form">
        <div class="form">
            <h1>Contactanos</h1>
            <div class="grupo">
                <input type="text" name="name" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>

            <div class="grupo">
                <input type="email" name="email" id="" required><span class="barra"></span>
                <label>E-Mail</label>
            </div>

            <div class="grupo">
                <input type="text" name="asunto" id="name" required><span class="barra"></span>
                <label>Asunto</label>
            </div>

            <div class="grupo">
                <input type="text" name="mensaje" id="correo" required><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            
            <input class="enviar" type="submit" value="Suscrbirse" name="enviar"></input>
        </div>
    </form>
<?php
    include("correos.php");
?>
</body>
</html>