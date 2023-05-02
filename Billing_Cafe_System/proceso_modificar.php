<?php

    include("db_connect.php");

    $id= $_REQUEST['id'];

    $nombre = $_POST['nombre'];
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    $newId = $_POST['newId'];

    $query ="UPDATE tabla_imagen SET nombre='$nombre', imagen='$Imagen', id='$newId' WHERE id= '$id'";
    $resultado = $conn->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }
    else{
        echo "no se modifico";
    }

?>