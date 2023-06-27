<?php

require_once("conn.php");

$desk = $_POST['desk'];
$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "img/" . $_FILES['imagen']['name'];
$destino = "upload/img/".$nombrer;
$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
$arr = get_defined_vars();
//print_r($arr);

if (!empty($resultado)){
    @mysqli_query($conexion,"INSERT INTO fotos (Name, Folder,Desk) VALUES ('". $nombre."','" . $destino . "','" . $desk . "')"); 
    echo "Acta recibida exitosamente";
}else{
    echo "Error al subir el archivo";

}
?>
