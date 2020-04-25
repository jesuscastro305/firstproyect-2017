<?php
session_start();
include('cn.php');
$cn = Conectarse();
$usuario = $_POST['usu'];

 
date_default_timezone_set('America/Chihuahua'); 
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mactiv = $meses[date('n')-1];
$userid = $_SESSION['usuario'];
$horaact = date("H:i");
$fechaact =date('d-Y');

 $tipos = array("", "Agregar articulo", "Buscar/Eliminar articulo", "Registrar salida", "Ver historial de salidas", "Ver lista de clientes", "Registrar orden de compra", "Ordenes de compra pendientes", "Inventario", "Ordenes de compra", "Usuarios", "Permisos de usuarios", "Correos y reportes", "Clientes", "Productos y presentaciones", "Parametros");





for($i = 1; $i<=15; $i++){
    if(isset($_POST[$i])){
        $permiso = $_POST[$i];
        
        $similar = mysqli_query($cn, "SELECT * FROM `permisos` WHERE `usuario` LIKE '$usuario' AND `permiso` LIKE '$permiso'");
        $resultado= mysqli_num_rows($similar);
        if($resultado==0){
          
            $acti = "Se le otorgo al usuario $usuario, el permiso para entrar a la seccion -$tipos[$permiso]-.";


            $actividad = mysqli_query($cn, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");
            $insertar = mysqli_query($cn, "INSERT INTO `permisos`(`usuario`, `permiso`) VALUES ('$usuario', '$permiso')");  
        }else{}
        
    }
    
    
}
 if(!$insertar){
        echo "<script>alert('Ocurrio un error al agregar la relacion.')</script>";
        
        echo "<script>window.history.back()</script>";
    }else{
          header('location: ../permisos.php');
    }
mysqli_close($cn);
?>