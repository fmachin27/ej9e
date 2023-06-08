<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asd</title>
</head>
<body>
<h1>Procesamiento de datos</h1>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nombre = $_POST["nombre"];
        $secreto = $_POST["secreto"];
        $apellido = $_POST["apellido"];
        $genero = $_POST["genero"];
        $preferencias = $_POST["preferencias"];
        $comentarios = $_POST["comentarios"];
        $pais = $_POST["pais"];

        
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Secreto: $secreto</p>";
        echo "<p>Apellido: $apellido</p";
        echo "<p>Género: $genero</p>";
        echo "<p>Preferencias:</p>";
        foreach ($preferencias as $preferencia) {
            echo "<p>- $preferencia</p>";
        }
        echo "<p>Comentarios: $comentarios</p>";
        echo "<p>País: $pais</p>";
    } else {
        echo "<p>No se han recibido datos por POST.</p>";
    }
    ?>
</body>
</html>