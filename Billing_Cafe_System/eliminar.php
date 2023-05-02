<?php

    include("db_connect.php");

    $id= $_REQUEST['id'];

    $query ="DELETE FROM tabla_imagen WHERE id= '$id'";
    $resultado = $conn->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }
    else{
        echo "no se elimino";
    }

?>