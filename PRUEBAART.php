<?php
include('php/cn.php');
$conexion = Conectarse();

 session_start();
date_default_timezone_set('America/Chihuahua'); 
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mactiv = $meses[date('n')-1];
$userid = $_SESSION['usuario'];
$horaact = date("H:i");
$fechaact =date('d-Y');

$actividad = "";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$actividad', '$userid', '$mactiv-$fechaact', '$horaact')");
?>