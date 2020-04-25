<?php
include("cn.php");  
                        $conexion = Conectarse();
                        $consulta = mysqli_query($conexion, "SELECT * FROM productos ORDER BY producto ASC"); 
      $pres = array("Tambo", "Galon industrial", "Porron industrial", "Galon", "Porron", "100mili", "500mili", "900mili", "1000mili", "Galon con atomizaador", "Cubeta-4", "Cubeta-20", "Bote");


//----------------------------------------------------------------QBD-08----------------------------------------------------------------
    for($i=3; $i < 9; $i++){
        $consulta08 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-08' AND `presentacion` LIKE '$pres[$i]';");
        $res08[$i] = mysqli_num_rows($consulta08);
    }
//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res08[5] < 10){
             $bgc5p08 = "#E74C3C";
         }
         else{
             $bgc5p08 = "#2ECC71";
         }
         if($res08[6] < 10){
             $bgc6p08 = "#E74C3C";
         }
         else{
             $bgc6p08 = "#2ECC71";
         }
         if($res08[7] < 10){
             $bgc7p08 = "#E74C3C";
         }
         else{
             $bgc7p08 = "#2ECC71";
         }
         if($res08[8] < 10){
             $bgc8p08 = "#E74C3C";
         }
         else{
             $bgc8p08 = "#2ECC71";
         }
         if($res08[3] < 10){
             $bgc3p08 = "#E74C3C";
         }
         else{
             $bgc3p08 = "#2ECC71";
         }
         if($res08[4] < 10){
             $bgc4p08 = "#E74C3C";
         }
         else{
             $bgc4p08 = "#2ECC71";
         }
  
//---------------------------------------------------------------QBD-09---------------------------------------------------------------
for($i=3; $i < 9; $i++){
        $consulta09 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-09' AND `presentacion` LIKE '$pres[$i]';");
        $res09[$i] = mysqli_num_rows($consulta09);
    }
//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res09[5] < 10){
             $bgc5p09 = "#E74C3C";
         }
         else{
             $bgc5p09 = "#2ECC71";
         }
         if($res09[6] < 10){
             $bgc6p09 = "#E74C3C";
         }
         else{
             $bgc6p09 = "#2ECC71";
         }
         if($res09[7] < 10){
             $bgc7p09 = "#E74C3C";
         }
         else{
             $bgc7p09 = "#2ECC71";
         }
         if($res09[8] < 10){
             $bgc8p09 = "#E74C3C";
         }
         else{
             $bgc8p09 = "#2ECC71";
         }
         if($res09[3] < 10){
             $bgc3p09 = "#E74C3C";
         }
         else{
             $bgc3p09 = "#2ECC71";
         }
         if($res09[4] < 10){
             $bgc4p09 = "#E74C3C";
         }
         else{
             $bgc4p09 = "#2ECC71";
         }
//background: ".$bgcp09."
//---------------------------------------------------------------QBD-10---------------------------------------------------------------
for($i=0; $i < 9; $i++){
        $consulta10 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-10' AND `presentacion` LIKE '$pres[$i]';");
        $res10[$i] = mysqli_num_rows($consulta10);
    }
//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res10[5] < 10){
             $bgc5p10 = "#E74C3C";
         }
         else{
             $bgc5p10 = "#2ECC71";
         }
         if($res10[6] < 10){
             $bgc6p10 = "#E74C3C";
         }
         else{
             $bgc6p10 = "#2ECC71";
         }
         if($res10[7] < 10){
             $bgc7p10 = "#E74C3C";
         }
         else{
             $bgc7p10 = "#2ECC71";
         }
         if($res10[8] < 10){
             $bgc8p10 = "#E74C3C";
         }
         else{
             $bgc8p10 = "#2ECC71";
         }
         if($res10[3] < 10){
             $bgc3p10 = "#E74C3C";
         }
         else{
             $bgc3p10 = "#2ECC71";
         }
         if($res10[4] < 10){
             $bgc4p10 = "#E74C3C";
         }
         else{
             $bgc4p10 = "#2ECC71";
         }
         if($res10[0] < 10){
             $bgc0p10 = "#E74C3C";
         }
         else{
             $bgc0p10 = "#2ECC71";
         }
         if($res10[1] < 10){
             $bgc1p10 = "#E74C3C";
         }
         else{
             $bgc1p10 = "#2ECC71";
         }
         if($res10[2] < 10){
             $bgc2p10 = "#E74C3C";
         }
         else{
             $bgc2p10 = "#2ECC71";
         }
//background: ".$bgcp10."
//-------------------------------------------------------------QBD-10-D-------------------------------------------------------------
for($i=3; $i < 9; $i++){
        $consulta10D = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-10-D' AND `presentacion` LIKE '$pres[$i]';");
        $res10D[$i] = mysqli_num_rows($consulta10D);
    }
//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res10D[5] < 10){
             $bgc5p10D = "#E74C3C";
         }
         else{
             $bgc5p10D = "#2ECC71";
         }
         if($res10D[6] < 10){
             $bgc6p10D = "#E74C3C";
         }
         else{
             $bgc6p10D = "#2ECC71";
         }
         if($res10D[7] < 10){
             $bgc7p10D = "#E74C3C";
         }
         else{
             $bgc7p10D = "#2ECC71";
         }
         if($res10D[8] < 10){
             $bgc8p10D = "#E74C3C";
         }
         else{
             $bgc8p10D = "#2ECC71";
         }
         if($res10D[3] < 10){
             $bgc3p10D = "#E74C3C";
         }
         else{
             $bgc3p10D = "#2ECC71";
         }
         if($res10D[4] < 10){
             $bgc4p10D = "#E74C3C";
         }
         else{
             $bgc4p10D = "#2ECC71";
         }
//background: ".$bgcp10D."
//-------------------------------------------------------------QBD-20-------------------------------------------------------------
for($i=3; $i < 9; $i++){
        $consulta20 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-20' AND `presentacion` LIKE '$pres[$i]';");
        $res20[$i] = mysqli_num_rows($consulta20);
    }
//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res20[5] < 10){
             $bgc5p20 = "#E74C3C";
         }
         else{
             $bgc5p20 = "#2ECC71";
         }
         if($res20[6] < 10){
             $bgc6p20 = "#E74C3C";
         }
         else{
             $bgc6p20 = "#2ECC71";
         }
         if($res20[7] < 10){
             $bgc7p20 = "#E74C3C";
         }
         else{
             $bgc7p20 = "#2ECC71";
         }
         if($res20[8] < 10){
             $bgc8p20 = "#E74C3C";
         }
         else{
             $bgc8p20 = "#2ECC71";
         }
         if($res20[3] < 10){
             $bgc3p20 = "#E74C3C";
         }
         else{
             $bgc3p20 = "#2ECC71";
         }
         if($res20[4] < 10){
             $bgc4p20 = "#E74C3C";
         }
         else{
             $bgc4p20 = "#2ECC71";
         }
//background: ".$bgcp20."
//-------------------------------------------------------------QBD-25-------------------------------------------------------------
for($i=3; $i < 9; $i++){
        $consulta25 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-25' AND `presentacion` LIKE '$pres[$i]';");
        $res25[$i] = mysqli_num_rows($consulta25);
    }
//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res25[5] < 10){
             $bgc5p25 = "#E74C3C";
         }
         else{
             $bgc5p25 = "#2ECC71";
         }
         if($res25[6] < 10){
             $bgc6p25 = "#E74C3C";
         }
         else{
             $bgc6p25 = "#2ECC71";
         }
         if($res25[7] < 10){
             $bgc7p25 = "#E74C3C";
         }
         else{
             $bgc7p25 = "#2ECC71";
         }
         if($res25[8] < 10){
             $bgc8p25 = "#E74C3C";
         }
         else{
             $bgc8p25 = "#2ECC71";
         }
         if($res25[3] < 10){
             $bgc3p25 = "#E74C3C";
         }
         else{
             $bgc3p25 = "#2ECC71";
         }
         if($res25[4] < 10){
             $bgc4p25 = "#E74C3C";
         }
         else{
             $bgc4p25 = "#2ECC71";
         }
//background: ".$bgcp25."
//-------------------------------------------------------------QBD-26-------------------------------------------------------------
for($i=3; $i < 9; $i++){
        $consulta26 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-26' AND `presentacion` LIKE '$pres[$i]';");
        $res26[$i] = mysqli_num_rows($consulta26);
    }
//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res26[5] < 10){
             $bgc5p26 = "#E74C3C";
         }
         else{
             $bgc5p26 = "#2ECC71";
         }
         if($res26[6] < 10){
             $bgc6p26 = "#E74C3C";
         }
         else{
             $bgc6p26 = "#2ECC71";
         }
         if($res26[7] < 10){
             $bgc7p26 = "#E74C3C";
         }
         else{
             $bgc7p26 = "#2ECC71";
         }
         if($res26[8] < 10){
             $bgc8p26 = "#E74C3C";
         }
         else{
             $bgc8p26 = "#2ECC71";
         }
         if($res26[3] < 10){
             $bgc3p26 = "#E74C3C";
         }
         else{
             $bgc3p26 = "#2ECC71";
         }
         if($res26[4] < 10){
             $bgc4p26 = "#E74C3C";
         }
         else{
             $bgc4p26 = "#2ECC71";
         }
//background: ".$bgcp26."
//-------------------------------------------------------------QBD-28-------------------------------------------------------------
for($i=3; $i < 9; $i++){
        $consulta28 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-28' AND `presentacion` LIKE '$pres[$i]';");
        $res28[$i] = mysqli_num_rows($consulta28);
    }

//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res28[5] < 10){
             $bgc5p28 = "#E74C3C";
         }
         else{
             $bgc5p28 = "#2ECC71";
         }
         if($res28[6] < 10){
             $bgc6p28 = "#E74C3C";
         }
         else{
             $bgc6p28 = "#2ECC71";
         }
         if($res28[7] < 10){
             $bgc7p28 = "#E74C3C";
         }
         else{
             $bgc7p28 = "#2ECC71";
         }
         if($res28[8] < 10){
             $bgc8p28 = "#E74C3C";
         }
         else{
             $bgc8p28 = "#2ECC71";
         }
         if($res28[3] < 10){
             $bgc3p28 = "#E74C3C";
         }
         else{
             $bgc3p28 = "#2ECC71";
         }
         if($res28[4] < 10){
             $bgc4p28 = "#E74C3C";
         }
         else{
             $bgc4p28 = "#2ECC71";
         }
//background: ".$bgcp28."
//-------------------------------------------------------------QBD-31-------------------------------------------------------------
for($i=3; $i < 9; $i++){
        $consulta31 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-31' AND `presentacion` LIKE '$pres[$i]';");
        $res31[$i] = mysqli_num_rows($consulta31);
    }

//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res31[5] < 10){
             $bgc5p31 = "#E74C3C";
         }
         else{
             $bgc5p31 = "#2ECC71";
         }
         if($res31[6] < 10){
             $bgc6p31 = "#E74C3C";
         }
         else{
             $bgc6p31 = "#2ECC71";
         }
         if($res31[7] < 10){
             $bgc7p31 = "#E74C3C";
         }
         else{
             $bgc7p31 = "#2ECC71";
         }
         if($res31[8] < 10){
             $bgc8p31 = "#E74C3C";
         }
         else{
             $bgc8p31 = "#2ECC71";
         }
         if($res31[3] < 10){
             $bgc3p31 = "#E74C3C";
         }
         else{
             $bgc3p31 = "#2ECC71";
         }
         if($res31[4] < 10){
             $bgc4p31 = "#E74C3C";
         }
         else{
             $bgc4p31 = "#2ECC71";
         }
//background: ".$bgcp31."
//-------------------------------------------------------------QBD-81-------------------------------------------------------------
for($i=5; $i < 13; $i++){
        $consulta81 = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `producto` LIKE 'QBD-81' AND `presentacion` LIKE '$pres[$i]';");
        $res81[$i] = mysqli_num_rows($consulta81);
    }

//--------------------------------------------CONDICIONALES PARA ESTILOS--------------------------------------------

if($res81[5] < 10){
             $bgc5p81 = "#E74C3C";
         }
         else{
             $bgc5p81 = "#2ECC71";
         }
         if($res81[6] < 10){
             $bgc6p81 = "#E74C3C";
         }
         else{
             $bgc6p81 = "#2ECC71";
         }
         if($res81[7] < 10){
             $bgc7p81 = "#E74C3C";
         }
         else{
             $bgc7p81 = "#2ECC71";
         }
         if($res81[8] < 10){
             $bgc8p81 = "#E74C3C";
         }
         else{
             $bgc8p81 = "#2ECC71";
         }
         if($res81[9] < 10){
             $bgc9p81 = "#E74C3C";
         }
         else{
             $bgc9p81 = "#2ECC71";
         }
         if($res81[10] < 10){
             $bgc10p81 = "#E74C3C";
         }
         else{
             $bgc10p81 = "#2ECC71";
         }
         if($res81[11] < 10){
             $bgc11p81 = "#E74C3C";
         }
         else{
             $bgc11p81 = "#2ECC71";
         }
         if($res81[12] < 10){
             $bgc12p81 = "#E74C3C";
         }
         else{
             $bgc12p81 = "#2ECC71";
         }
//background: ".$bgcp81."
mysqli_free_result ($consulta08 );
mysqli_free_result ($consulta09 );
mysqli_free_result ($consulta10 );
mysqli_free_result ($consulta10D );
mysqli_free_result ($consulta20 );
mysqli_free_result ($consulta25 );
mysqli_free_result ($consulta26 );
mysqli_free_result ($consulta28 );
mysqli_free_result ($consulta31 );
mysqli_free_result ($consulta81 );
mysqli_close($conexion);   
         
         

?>