<?php

    include("db_connect.php");

    $nombre = $_POST['nombre'];
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $query ="INSERT INTO tabla_imagen(nombre,imagen) VALUES ('$nombre','$Imagen')";
    $resultado = $conn->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }
    else{
        echo "no se inserto";
    }

?>