<!DOCTYPE html>
<html>
<head>
    <title>Mostrar imagenes</title>
</head>
<body>
    <center><br/>
        <table border="2">
            <thead>
            <tr>
                <br/><br/><th colspan="5"><a href="imagenes.php">Añadir imagen</a></th>
            </tr>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include("db_connect.php");

                $query = "SELECT * FROM tabla_imagen";
                $resultado = $conn->query($query);
                while($row = $resultado->fetch_assoc()){
            ?>

                <tr>
                    <td> <?php echo $row['id'];?> </td>
                    <td> <?php echo $row['nombre'];?> </td>
                    <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                    <th><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></th>
                    <th><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></th>

                </tr>

            <?php
                }
            ?>
            </tbody>

        </table>
        <br/><br/><br/><br/><br/><br/><a href="javascript: history.go(-1)">Volver a la pagina anterior</a><br/><br/>
        <a href="index.php?page=home">Regresar al administrador</a>
    </center>
</body>
</html>