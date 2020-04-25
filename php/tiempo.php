<?php

include('cn.php');
$cn = Conectarse();

$correo = $_POST['correo1'];


$cant = mysqli_query($cn, "SELECT `reporte` FROM `reportes` WHERE `correo` LIKE '$correo'");
$B=1;
while($m = mysqli_fetch_row($cant)){
    
    if($_POST[$B] ?? ""){
        $ID = $_POST[$B];
        $dias = "dias".$B;
        $time = $_POST[$dias];
        mysqli_query($cn, "UPDATE `reportes` SET `tiempo` = '$time' WHERE `id` LIKE '$ID'");
        echo $dias;
    }
    else{}
    $B++;
    
}

header('location: ../correos.php');
mysqli_close($cn);

?>