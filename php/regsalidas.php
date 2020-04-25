<?php
session_start();
include('cn.php');

$conexion = Conectarse() ;

//-----------------------------------NOTA DE SALIDA-----------------------------------
$fecha = $_POST['fecha'];
$folio = $_POST['folio'];
$carguese = $_POST['carguese'];
$entregado = $_POST['entregado'];
$salida = $_POST['salida'];

//------------------------------------Tr-1--------------------------------------------


$cantidad1 = $_POST['cantidad1'];
$s__pres1 = $_POST['s_pres1'];
$s__prod1 = $_POST['s_prod1'];
$precio1 = $_POST['precio1'] ?? "";

//------------------------------------Tr-2--------------------------------------------


$cantidad2 = $_POST['cantidad2'] ?? "" ;
$s__pres2 = $_POST['s_pres2'] ?? "" ;
$s__prod2 = $_POST['s_prod2'] ?? "" ;
$precio2 = $_POST['precio2'] ?? "";

//------------------------------------Tr-3--------------------------------------------


$cantidad3 = $_POST['cantidad3'] ?? "" ;
$s__pres3 = $_POST['s_pres3'] ?? "" ;
$s__prod3 = $_POST['s_prod3'] ?? "" ;
$precio3 = $_POST['precio3'] ?? "";

//------------------------------------Tr-4--------------------------------------------


$cantidad4 = $_POST['cantidad4'] ?? "" ;
$s__pres4 = $_POST['s_pres4'] ?? "" ;
$s__prod4 = $_POST['s_prod4'] ?? "" ;
$precio4 = $_POST['precio4'] ?? "";


//---------------------------QUIEN AUTORIZO Y QUIEN ENTREGO---------------------------

$autorizo = $_POST['autorizo'];
$entrego = $_POST['entrego'];

//------------------------------------------------------------------------------------
date_default_timezone_set('America/Chihuahua'); 
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mactiv = $meses[date('n')-1];
$userid = $_SESSION['usuario'];
$horaact = date("H:i");
$fechaact =date('d-Y');





//------------------------------INSERTAR NOTA DE SALIDA------------------------------
$insertarNS = mysqli_query($conexion, "INSERT INTO `10010` (`folio`, `fecha`, `carguese_a`, `entregado_a`, `concepto_sal`, `entrego`, `autorizo`) VALUES ('$folio', '$fecha', '$carguese', '$entregado', '$salida', '$entrego', '$autorizo')");

$acti = "Se Registro una nota de salida con el folio: $folio, para: $entregado, con el concepto de salida: $salida. entrego: $entrego y autorizo: $autorizo";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");

if(!$insertarNS){
    echo"<script>alert('No se insertaron los datos de la nota de salida')</script>";
        $acti = "No se inserto la informacion de la nota de salida con el folio: $folio.";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
        echo"<script>window.history.back()</script>";
}

//--------------------------------INFORMACION DE SALIDA--------------------------------
//---------------------DEPENDIENDO SI EL CHECKBOX ESTA SELECCIONADO---------------------



if($_POST['s_prod1'] ?? "" && $_POST['s_pres1']){
    $insertarIS1 = mysqli_query($conexion, "INSERT INTO `111110010` (`cantidad`, `presentacion`, `producto`, `precio`, `ps_folio`) VALUES ('$cantidad1', '$s__pres1', '$s__prod1', '$precio1', '$folio')");
    
 //------------------------------------------------FOR PARA DESCONTAR PRODUCTOS------------------------------------------------      
for($l1=0; $l1<$cantidad1; $l1++){
$masviejo1 = mysqli_query($conexion, "SELECT MIN(`id_productos`) FROM `productos` WHERE `cantidad` != 0 AND `producto` LIKE '$s__prod1' AND `presentacion` LIKE '$s__pres1' AND `fecha` LIKE (SELECT MIN(`fecha`) FROM `productos` WHERE `producto` LIKE '$s__prod1' AND `presentacion` LIKE '$s__pres1' AND `cantidad` != 0)");

while($row1 = mysqli_fetch_row($masviejo1)){$ID1= $row1[0];}

 $modf1 = mysqli_query($conexion, "UPDATE `productos` SET `cantidad` = `cantidad` - '1' WHERE `id_productos` LIKE '$ID1'");
}
    
//==============================================================================================================================
   
    
    $acti = "Se registro este producto: $s__prod1 con la presentacion: $s__pres1 en una nota de salida con el folio: $folio.";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
    
}
if($_POST['s_prod2'] ?? "" && $_POST['s_pres2']){
    $insertarIS2 = mysqli_query($conexion, "INSERT INTO `111110010` (`cantidad`, `presentacion`, `producto`, `precio`, `ps_folio`) VALUES ('$cantidad2', '$s__pres2', '$s__prod2', '$precio2', '$folio')");
        
 //------------------------------------------------FOR PARA DESCONTAR PRODUCTOS------------------------------------------------      
for($l2=0; $l2<$cantidad2; $l2++){
$masviejo2 = mysqli_query($conexion, "SELECT MIN(`id_productos`) FROM `productos` WHERE `cantidad` != 0 AND `producto` LIKE '$s__prod2' AND `presentacion` LIKE '$s__pres2' AND `fecha` LIKE (SELECT MIN(`fecha`) FROM `productos` WHERE `producto` LIKE '$s__prod2' AND `presentacion` LIKE '$s__pres2' AND `cantidad` != 0)");

while($row2 = mysqli_fetch_row($masviejo2)){$ID2= $row2[0];}

 $modf2 = mysqli_query($conexion, "UPDATE `productos` SET `cantidad` = `cantidad` - '1' WHERE `id_productos` LIKE '$ID2'");
}
    
//==============================================================================================================================
   
    $acti = "Se registro este producto: $s__prod2 con la presentacion: $s__pres2 en una nota de salida con el folio: $folio.";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
    
}
if($_POST['s_prod3'] ?? "" && $_POST['s_pres3']){
    $insertarIS3 = mysqli_query($conexion, "INSERT INTO `111110010` (`cantidad`, `presentacion`, `producto`, `precio`, `ps_folio`) VALUES ('$cantidad3', '$s__pres3', '$s__prod3', '$precio3', '$folio')");
            
 //------------------------------------------------FOR PARA DESCONTAR PRODUCTOS------------------------------------------------      
for($l3=0; $l3<$cantidad3; $l3++){
$masviejo3 = mysqli_query($conexion, "SELECT MIN(`id_productos`) FROM `productos` WHERE `cantidad` != 0 AND `producto` LIKE '$s__prod3' AND `presentacion` LIKE '$s__pres3' AND `fecha` LIKE (SELECT MIN(`fecha`) FROM `productos` WHERE `producto` LIKE '$s__prod3' AND `presentacion` LIKE '$s__pres3' AND `cantidad` != 0)");

while($row3 = mysqli_fetch_row($masviejo3)){$ID3= $row3[0];}

 $modf3 = mysqli_query($conexion, "UPDATE `productos` SET `cantidad` = `cantidad` - '1' WHERE `id_productos` LIKE '$ID3'");
}
    
//==============================================================================================================================
   
    $acti = "Se registro este producto: $s__prod3 con la presentacion: $s__pres3 en una nota de salida con el folio: $folio.";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
    
}
if($_POST['s_prod4'] ?? "" && $_POST['s_pres4']){
    $insertarIS4 = mysqli_query($conexion, "INSERT INTO `111110010` (`cantidad`, `presentacion`, `producto`, `precio`, `ps_folio`) VALUES ('$cantidad4', '$s__pres4', '$s__prod4', '$precio4', '$folio')");
            
 //------------------------------------------------FOR PARA DESCONTAR PRODUCTOS------------------------------------------------      
for($l4=0; $l4<$cantidad4; $l4++){
$masviejo4 = mysqli_query($conexion, "SELECT MIN(`id_productos`) FROM `productos` WHERE `cantidad` != 0 AND `producto` LIKE '$s__prod4' AND `presentacion` LIKE '$s__pres4' AND `fecha` LIKE (SELECT MIN(`fecha`) FROM `productos` WHERE `producto` LIKE '$s__prod4' AND `presentacion` LIKE '$s__pres4' AND `cantidad` != 0)");

while($row4 = mysqli_fetch_row($masviejo4)){$ID4= $row4[0];}

 $modf4 = mysqli_query($conexion, "UPDATE `productos` SET `cantidad` = `cantidad` - '1' WHERE `id_productos` LIKE '$ID4'");
}
    
//==============================================================================================================================
   
    $acti = "Se registro este producto: $s__prod4 con la presentacion: $s__pres4 en una nota de salida con el folio: $folio.";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
    
}

    //echo"<script>alert('Todo se agrego correctamente')</script>";
        
      //  echo"<script>window.history.back()</script>";


     echo "<script>alert('TODO EN ORDEN');</script>";
     echo"<script>window.history.back()</script>";
 


mysqli_close($conexion);

?>