<?php
include('cn.php');
$cn = Conectarse();

$rel = $_POST['rel'];
$bus = mysqli_query($cn, "SELECT `relacion` FROM `relaciones` WHERE `producto` LIKE '$rel'");
$cant = mysqli_num_rows($bus);
$l = 0;
$ms="";
while($y = mysqli_fetch_row($bus)){
    $ms.=$y[0];
    $l++;
    if($l==($cant-1)){
        $ms.=" y ";
    }
    elseif($l<$cant){
        $ms.=", ";
    }
    elseif($l==$cant){
        $ms.=".";
    }
}
 session_start();
date_default_timezone_set('America/Chihuahua'); 
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mactiv = $meses[date('n')-1];
$userid = $_SESSION['usuario'];
$horaact = date("H:i");
$fechaact =date('d-Y');

$acti = "Una relacion entre productos y presentacion fue eliminada. La relacion correspondia al producto $rel con las presentaciones: $ms";


  $actividad = mysqli_query($cn, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");

$accion = mysqli_query($cn, "DELETE FROM `relaciones` WHERE `producto` LIKE '$rel'");

      if(!$accion){
        echo "<script>alert('Ocurrio un error al eliminar la relacion.')</script>";
        
        echo "<script>window.history.back()</script>";
    }else{
          header('location: ../AEproductos.php');
    }
mysqli_close($cn);

?>