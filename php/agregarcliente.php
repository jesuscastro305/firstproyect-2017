<?php
include("cn.php");
$conexion = Conectarse();
//---------------------------------------Informacion general---------------------------------------
$numcliente=$_POST["num__cliente"];
$antiguedad=$_POST["antiguedad"];
$fecha=$_POST["fecha"];
$nomcomercial=$_POST["nom__comercial"];
$giro=$_POST["giro"];
$ejecventas=$_POST["ejec__ventas"];
$sucursales=$_POST["sucursales"];
$prodserv=$_POST["prod__serv"];
$presentacion=$_POST["presentacion"];
$pconsumo=$_POST["p__consumo"];
$usuariofinal=$_POST["usuario__final"];
$areauso=$_POST["area__uso"];
$txtareaob=$_POST["txt__area_ob"];

$valores_informacion_general = "INSERT INTO `1001010000` (`cliente`, `antiguedad`, `f_registro`, `nom_comercial`, `giro`, `ejecutivo_ventas`, `sucursales`, `prod_serv`, `presentacion`, `periodo_consumo`, `usuario_final`, `area_uso`, `observaciones`) VALUES ('$numcliente', '$antiguedad', '$fecha', '$nomcomercial', '$giro', '$ejecventas', '$sucursales', '$prodserv', '$presentacion', '$pconsumo', '$usuariofinal', '$areauso', '$txtareaob');";
 session_start();
date_default_timezone_set('America/Chihuahua'); 

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mactiv = $meses[date('n')-1];
$userid = $_SESSION['usuario'];
$horaact = date("H:i");
$fechaact = date('d-Y');

$acti = "Se agrego un cliente nuevo: registrado con $numcliente como numero de cliente.";


  $actividad = mysqli_query($conexion, "INSERT INTO `regactividades` (`actividad`,`responsable`,`fecha`,`hora`) VALUES ('$acti', '$userid', '$mactiv-$fechaact', '$horaact')");

//------------------------------------------Datos Fiscales------------------------------------------
$razonsocial=$_POST["razon__social"];
$rfc=$_POST["rfc"];
$pais=$_POST["pais"];
$cp=$_POST["CP"];
$colonia=$_POST["colonia"];
$calle=$_POST["calle"];
$exterior=$_POST["exterior"];
$interior=$_POST["interior"];
$ciudad=$_POST["ciudad"];
$municipio=$_POST["municipio"];
$estado=$_POST["estado"];
$emaildf=$_POST["email_df"];

$valores_datos_fiscales ="INSERT INTO `11011111` (`razon_social`, `rfc`, `pais`, `CP`, `colonia`, `calle`, `n_exterior`, `n_interior`, `ciudad`, `municipio`, `estado`, `email`, `df_cliente`) VALUES ('$razonsocial', '$rfc', '$pais', '$cp', '$colonia', '$calle', '$exterior', '$interior', '$ciudad', '$municipio', '$estado', '$emaildf', '$numcliente' );";

//-----------------------------------------Cuentas por Pagar-----------------------------------------
$credito=$_POST["credito"];
$contactocp=$_POST["contacto_cp"];
$areacp=$_POST["area_cp"];
$tel1cp=$_POST["tel_ext1_cp"];
$tel2cp=$_POST["tel_ext2_cp"];
$emailcp=$_POST["email_cp"];

$valores_cuentas_por_pagar= "INSERT INTO `110011001` (`credito`, `contacto`, `area`, `tel_ext`, `tel_ext2`, `email`, `cp_cliente`) VALUES ('$credito', '$contactocp', '$areacp', '$tel1cp', '$tel2cp', '$emailcp', '$numcliente');";

//----------------------------------------------Compras----------------------------------------------
$contactoc=$_POST["contacto_c"];
$areac=$_POST["area_c"];
$tel1c=$_POST["tel_ext1_c"];
$tel2c=$_POST["tel_ext2_c"];
$emailc=$_POST["email_c"];

$valores_compras = "INSERT INTO `1100` (`contacto`, `area`, `tel_ext`, `tel_ext2`, `email`, `c_cliente` ) VALUES ('$contactoc', '$areac', '$tel1c', '$tel2c', '$emailc' , '$numcliente');";




if(!$conexion){
    echo "<script>alert('Algo anda mal. Porfavor contacta al tecnico encargado de supervisar la aplicacion.');</script>";
}
else{
    
    $similitudes = "SELECT * FROM `1001010000` WHERE `cliente` LIKE '$numcliente'";
    $numerosimilitudes = mysqli_query($conexion, $similitudes);
    $existe = mysqli_num_rows($numerosimilitudes);
    
    if($existe > 0){
        echo"<script>alert('Ya existe un Cliente registrado con este codigo: $numcliente  ')</script>";
        echo"<script>window.history.back()</script>";
    mysqli_close($conexion);
    }else{
    
    $informacion_general = mysqli_query($conexion, $valores_informacion_general) or die (mysqli_error($informacion_general));
    $valores_datos_fiscales= mysqli_query($conexion, $valores_datos_fiscales) or die (mysqli_error($valores_datos_fiscales));
    $valores_cuentas_por_pagar= mysqli_query($conexion, $valores_cuentas_por_pagar) or die (mysqli_error($valores_cuentas_por_pagar));
    $valores_compras= mysqli_query($conexion, $valores_compras) or die (mysqli_error($valores_compras));
    
    if(!$informacion_general || !$valores_datos_fiscales || !$valores_cuentas_por_pagar || !$valores_compras){
        echo "<script>alert('Ocurrio un error');</script>";
        echo"<script>window.history.back()</script>";
    }
    else {
       echo "<script>alert('Se agrego correctamente');</script>";
     echo"<script>window.history.back()</script>";
    }
    }
}


    
    




mysqli_close($conexion);
?>