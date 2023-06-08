<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
        <h1>Ejercicio9</h1>
    
        <a href="procesar.php?nombre=Diego&apellido=Forlan">Enlace con parámetros</a>
    
        <form method="POST" action="procesar.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <input type="hidden" name="secreto" value="valor_secreto">

            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <p>Género:</p>
            <input type="radio" id="genero1" name="genero" value="masculino" checked>
            <label for="genero1">Masculino</label>
            <input type="radio" id="genero2" name="genero" value="femenino">
            <label for="genero2">Femenino</label>
    
            <p>Preferencias:</p>
            <input type="checkbox" id="preferencia1" name="preferencias[]" value="opcion1">
            <label for="preferencia1">Opción 1</label>
            <input type="checkbox" id="preferencia2" name="preferencias[]" value="opcion2">
            <label for="preferencia2">Opción 2</label>
    
            <p>Comentarios:</p>
            <textarea id="comentarios" name="comentarios"></textarea>
    
            <label for="pais">País:</label>
            <select id="pais" name="pais">
                <option value="Uruguay">Uruguay</option>
                <option value="Holanda">Holanda</option>
                <option value="Italia">Italia</option>
            </select>
    
            <input type="submit" value="Enviar">
        </form>
    </body>
</body>
</html>