<?php

require_once "../db/conexion.php";

$info_hoteles = "<option selected value=''>Seleccionar...</option>";
$query = "SELECT * FROM hoteles ORDER BY id DESC";
$consulta = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

$url_banner = "";
while ($registro = mysqli_fetch_array($consulta)) {
    $id = $registro['id'];
    $fullname = $registro['fullname'];
    $destacado = $registro['destacado']; 
    if($destacado == 1){
        $url_banner = strtolower(explode(" ", $fullname)[0]);
    }
    $info_hoteles .= "<option data-destacado='$destacado' value='$id'>$fullname</option>";
}
