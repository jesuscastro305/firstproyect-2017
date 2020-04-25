<?php
include('cn.php');
$cn = Conectarse();

$correo = $_POST['correo'];

$exi = mysqli_query($cn, "SELECT `email` FROM `cuentas` WHERE `email` LIKE '$correo'");

$n = mysqli_num_rows($exi);
 session_start();
date_default_timezone_set('America/Chihuahua'); 
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mactiv = $meses[date('n')-1];
$userid = $_SESSION['usuario'];
$horaact = date("H:i");
$fechaact =date('d-Y');



if($n == 0){
    $acti = "Se intento relacionar reportes con un correo que no existe: $correo";


  $actividad = mysqli_query($cn, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
    
    
    echo "<script>alert('el correo $correo no existe');</script>";
        echo"<script>window.history.back()</script>";
    
}


else{
$usuario = mysqli_query($cn, "SELECT `usuario` FROM `cuentas` WHERE `email` LIKE '$correo'");
while($name = mysqli_fetch_row($usuario)){$us = $name[0];}


if($_POST['1'] ?? ""){
    $rep1 = $_POST['1'];
    $similar1 = mysqli_query($cn, "SELECT `reporte` FROM `reportes` WHERE `reporte` LIKE '$rep1' AND `username` LIKE '$us'");
    $cant1 = mysqli_num_rows($similar1);
    if($cant1 == 0){
        $insertar1 = mysqli_query($cn, "INSERT INTO `reportes` (`username`, `correo`, `reporte`) VALUES ('$us','$correo','$_POST[1]')"); 
        
        $acti2 = "Se configuro el sistema para enviar el reporte de -$rep1- al usuario $us con el correo: $correo.";


  $actividad = mysqli_query($cn, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti2', '$userid', '$mactiv-$fechaact', '$horaact')");
        
        
    }else{}
   
}
if($_POST['2'] ?? ""){
    $rep2 = $_POST['2'];
    $similar2 = mysqli_query($cn, "SELECT `reporte` FROM `reportes` WHERE `reporte` LIKE '$rep2' AND `username` LIKE '$us'");
    $cant2 = mysqli_num_rows($similar2);
    if($cant2 == 0){
      $insertar2 = mysqli_query($cn, "INSERT INTO `reportes` (`username`, `correo`, `reporte`) VALUES ('$us','$correo','$_POST[2]')");  
        
        $acti3 = "Se configuro el sistema para enviar el reporte de -$rep2- al usuario $us con el correo: $correo.";


  $actividad = mysqli_query($cn, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti3', '$userid', '$mactiv-$fechaact', '$horaact')");
        
        
    }else{}
      
}
if($_POST['3'] ?? ""){
    $rep3 = $_POST['3'];
    $similar3 = mysqli_query($cn, "SELECT `reporte` FROM `reportes` WHERE `reporte` LIKE '$rep3' AND `username` LIKE '$us'");
    $cant3 = mysqli_num_rows($similar3);
    if($cant3 == 0){
      $insertar3 = mysqli_query($cn, "INSERT INTO `reportes` (`username`, `correo`, `reporte`) VALUES ('$us','$correo','$_POST[3]')");  
        
        $acti4 = "Se configuro el sistema para enviar el reporte de -$rep3- al usuario $us con el correo: $correo.";

  $actividad = mysqli_query($cn, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti4', '$userid', '$mactiv-$fechaact', '$horaact')");
        
        
    }else{}
      
}
if($_POST['4'] ?? ""){
    $rep4 = $_POST['4'];
    $similar4 = mysqli_query($cn, "SELECT `reporte` FROM `reportes` WHERE `reporte` LIKE '$rep4' AND `username` LIKE '$us'");
    $cant4 = mysqli_num_rows($similar4);
    if($cant4 == 0){
        $insertar4 = mysqli_query($cn, "INSERT INTO `reportes` (`username`, `correo`, `reporte`) VALUES ('$us','$correo','$_POST[4]')"); 
        
        $acti4 = "Se configuro el sistema para enviar el reporte de -$rep4- al usuario $us con el correo: $correo.";


  $actividad = mysqli_query($cn, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti4', '$userid', '$mactiv-$fechaact', '$horaact')");
        
        
    }else{}
     
}
    header('location: ../correos.php');
mysqli_close($cn); 
}

?>