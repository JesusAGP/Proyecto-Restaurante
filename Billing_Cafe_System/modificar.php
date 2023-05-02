<!DOCTYPE html>
<html>
<head>
    <title>Index de imagenes</title>
</head>
<body>

    <?php
        include("db_connect.php");

        $id= $_REQUEST['id'];
        $query = "SELECT * FROM tabla_imagen WHERE id ='$id'";
        $resultado = $conn->query($query);
        $row = $resultado->fetch_assoc()
    ?>

    <center><br/><br/><br/>
        <form action="proceso_modificar.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
            <label class="control-label">Nombre de la imagen:</label><br/><br/>
            <input type="text" REQUIRED name="nombre" placeholder "Nombre..." value="<?php echo $row['nombre']; ?>"/><br/><br/>
            <label class="control-label">Archivo:</label><br/><br/>
            <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td><br/><br/>
            <input type="file" REQUIRED name="Imagen"/><br/><br/>
            <label class="control-label">Id de la imagen:</label><br/><br/>
            <input type="text" REQUIRED name="newId" placeholder "Id..." value="<?php echo $row['id']; ?>"/><br/><br/>
            <input type="submit" name="Aceptar"/>
        </form>

        <br/><br/><a href="mostrar.php">Lista de imagenes</a><br/><br/>
        <a href="index.php?page=home">Regresar al administrador</a>
    </center>
</body>
</html>