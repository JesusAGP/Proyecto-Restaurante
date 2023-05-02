<!DOCTYPE html>
<html>
<head>
    <title>Index de imagenes</title>
</head>
<body>
    <center><br/><br/><br/><br/><br/><br/><br/>
        <form action="proceso_guardar.php" method="post" enctype="multipart/form-data">
            <label class="control-label">Nombre de la imagen:</label><br/><br/>
            <input type="text" REQUIRED name="nombre" placeholder "Nombre..." value=""/><br/><br/><br/>
            <label class="control-label">Archivo:</label><br/><br/>
            <input type="file" REQUIRED name="Imagen"/><br/><br/><br/><br/>
            <input type="submit" name="Aceptar"/><br/><br/><br/><br/>
        </form>
        <a href="mostrar.php">Lista de imagenes</a><br/><br/>
        <a href="index.php?page=home">Regresar al administrador</a>
    </center>
</body>
</html>
