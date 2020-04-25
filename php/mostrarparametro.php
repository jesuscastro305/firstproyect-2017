<?php


    include('cn.php');
    $conexion = Conectarse();

$parametros = mysqli_query($conexion, "SELECT DISTINCT `articulo` FROM `1111` ORDER BY `id_parametro` ASC");

?>