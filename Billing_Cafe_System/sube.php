<?php
 $directorio ="imagenes/productos/";
 $aleatorio = mt_rand(100, 999);
 $ruta = "imagenes/productos/".$aleatorio.".png";


$nombre=$_FILES['imgProd']['name'];

$guardado=$_FILES['imgProd']['tmp_name'];



if(!file_exists($directorio )){
	mkdir($directorio ,0777,true);
	if(file_exists($directorio )){

		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
		if(move_uploaded_file($guardado, $directorio.$aleatorio.".png")){
		echo "Archivo guardado con exito";

	}elseif(move_uploaded_file($guardado, $directorio.$aleatorio.".pdf")){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}

	var_dump($ruta);

}



?>