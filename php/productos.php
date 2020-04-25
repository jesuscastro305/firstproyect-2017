<?php
include('cn.php');
$conexion = Conectarse();

$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$unidadmedida = $_POST['unidadmedida'];
$vida = $_POST['vida'];

$Bduplicados = mysqli_query($conexion, "SELECT * FROM `tipoprod` WHERE `producto` LIKE '$producto' ORDER BY `id` ASC");

$cant = mysqli_num_rows($Bduplicados);
echo $cant;
if($cant > 0){
    
        echo"<script>alert('Este producto ya esta registrado')</script>";
        
      echo"<script>window.history.back()</script>";
        mysqli_close($conexion);
}
else{
    
     session_start();
date_default_timezone_set('America/Chihuahua'); 
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mactiv = $meses[date('n')-1];
$userid = $_SESSION['usuario'];
$horaact = date("H:i");
$fechaact =date('d-Y');

$acti = "Se registro un nuevo producto, sus caracteristicas son: $producto, $descripcion, unidad de medida: $unidadmedida y una vida de $vida dias.";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
    
    $insertar = mysqli_query($conexion, "INSERT INTO `tipoprod`( `producto`, `descripcion`, `unidadmedida`, `vida`) VALUES ('$producto', '$descripcion', '$unidadmedida', '$vida')");
    if(!$insertar){
        
        echo"<script>alert('Ocurrio un error al agregar el producto')</script>";
        
        echo"<script>window.history.back()</script>";
        mysqli_close($conexion);
    }
    else{
        header('location: ../AEproductos.php');
        mysqli_close($conexion);
    }
}


?>