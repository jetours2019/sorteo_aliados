<?php

require_once "../db/conexion.php";

$info_asesores = "<option selected value=''>Seleccionar...</option>";
$query = "SELECT * FROM asesores ORDER BY id DESC";
$consulta = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
while ($registro = mysqli_fetch_array($consulta)) {
    $id = $registro['id'];
    $fullname = $registro['fullname'];
    $info_asesores .= "<option value='$id'>$fullname</option>";
}