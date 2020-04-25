<?php
include('php/cn.php');
$conexion = Conectarse();

session_start();

if(isset($_SESSION['usuario'])) {

date_default_timezone_set('America/Chihuahua'); 
$date = date('Y/m/d');
$html = '

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/regcliente.css">
    
    <style>
    
::-webkit-scrollbar {
      width: 10px;
background: rgba(0,0,0,.5);
}::-webkit-scrollbar-thumb {
      background-color: #000;
} 
    </style>
</head>
<body>
   <div class="general">
     
      <form action="php/agregarcliente.php" method="post">
      
           <fieldset class="cuadro__cont">
               <legend class="titulo__cuadro">Informacion General</legend>
               
                   <table>
                       <tr>
                           <td class="txt__label"><label for="num__cliente">Codigo/#Cliente:</label></td>
                           <td><input type="number" name="num__cliente" required min="0" placeholder="ej: 1001"></td>
                           <td class="txt__label"><label for="antiguedad">Antig&uuml;edad:</label></td>
                           <td><input type="number"  placeholder="ej: 2015" name="antiguedad" min="0" ></td>
                           <td class="txt__label"><label for="fecha">Fecha de registro:</label></td>
                           <td><input id="fechaid" name="fecha" type="text" readonly value="'.$date.'" >
                          
                           </td>
                       </tr>
                       <tr>
                           <td class="txt__label"><label for="nom__comercial">Nombre comercial:</label></td>
                           <td><input type="text" name="nom__comercial" maxlength="50" required></td>
                           <td class="txt__label"><label for="giro">Giro:</label></td>
                           <td><input type="text" name="giro" maxlength="20"></td>
                            <td class="txt__label"><label for="ejec__ventas">Ejecutivo de ventas:</label></td>
                            <td><input type="text" name="ejec__ventas" placeholder="ej: Alejandro Perez" maxlength="30"></td>
                              
                       </tr>
                       <tr>
                           <td class="txt__label"><label for="sucursales">Sucursales:</label></td>
                           <td><input type="text" name="sucursales" placeholder="ej: Torres, Paseo, Sendero" maxlength="30" required ></td>
                           <td class="txt__label"><label for="prod__serv">Producto o Servicio:</label></td>
                           <td><input type="text" name="prod__serv" maxlength="30"></td>
                           <td class="txt__label"><label for="presentacion">Presentaci&oacute;n:</label></td>
                           <td><select name="presentacion" id="">
                                   <option  id="" value="">N/D</option>';
    
    
   
  
                               
$productosS = mysqli_query($conexion, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.='
                            <option value="'.$rowS[0].'">'.$rowS[0].'</option>';
}


$html.='
                               </select>
                          </td>
                       </tr>
                       <tr>
                           <td class="txt__label"><label for="p__consumo">Periodo de consumo:</label></td>
                           <td><input type="text" name="p__consumo" placeholder="ej: Cada 30 dias" maxlength="30"></td>
                           <td class="txt__label"><label for="usuario__final">Usuario final:</label></td>
                           <td><input type="text" name="usuario__final" maxlength="30"></td>
                           <td class="txt__label"><label for="area__uso">Area de uso:</label></td>
                           <td><input type="text" name="area__uso" maxlength="30"></td>
                       </tr>
                   </table>
               
           </fieldset>
       
      
           <fieldset class="cuadro__cont">
               <legend class="titulo__cuadro">Dato Fiscal</legend>
                   <table>
                      <tr>
                          <td class="txt__label"><label for="razon__social" >Razon social:</label></td>
                          <td><input type="text" maxlength="50" name="razon__social"></td>
                          <td class="txt__label"><label for="rfc" >RFC:</label></td>
                          <td><input type="text" maxlength="14" name="rfc"></td>
                      </tr>
                       <tr>
                           <td class="txt__label"><label for="pais">Pais:</label></td>
                           <td><input type="text" maxlength="30" name="pais"></td>
                           <td class="txt__label"><label for="CP">Codigo postal:</label></td>
                           <td><input type="number" min="0" name="CP"></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <td class="txt__label"><label for="colonia">Colonia:</label></td>
                           <td><input type="text" maxlength="30" name="colonia"></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <td class="txt__label"><label for="calle">Calle:</label></td>
                           <td><input type="text" name="calle"></td>
                           <td class="txt__label"><label for="exterior">Numero exterior:</label></td>
                           <td><input type="text" name="exterior" maxlength="30"></td>
                           <td class="txt__label"><label for="interior">Numero interior:</label></td>
                           <td><input type="text" name="interior" maxlength="30"></td>
                       </tr>
                       <tr>
                           <td class="txt__label"><label for="ciudad">Ciudad:</label></td>
                           <td><input type="text" name="ciudad" maxlength="30"></td>
                           <td class="txt__label"><label for="municipio">Municipio:</label></td>
                           <td><input type="text" name="municipio" maxlength="30"></td>
                           <td class="txt__label"><label for="estado">Estado:</label></td>
                           <td><input type="text" name="estado" maxlength="30"></td>
                           
                       </tr>
                       <tr>
                           <td class="txt__label"><label for="email_df">Correo electronico:</label></td>
                           <td colspan="2"><input type="email"  pattern="^[^\s()<>@,;:]+@((?=[a-zA-Z0-9-]+)|[a-zA-Z-]+)([a-zA-Z0-9-]+)*(\.([0-9]+(?=[a-zA-Z-]+)|[a-zA-Z-]+)(-?[a-zA-Z0-9-]+)?)+$" maxlength="30" name="email_df" placeholder="ej: alguien@ejemplo.com"></td>
                       </tr>
                   </table>
               
           </fieldset>
           <fieldset class="cuadro__cont">
               <legend class="titulo__cuadro">Cuentas por Pagar</legend>
               <table>
                   <tr>
                       <td class="txt__label"><label for="credito" >Credito: </label></td>
                       <td><input type="number" name="credito" maxlength="15"  min="0"></td>
                       <td class="txt__label"><label for="contacto_cp" >Contacto:</label></td>
                       <td><input type="text" name="contacto_cp" maxlength="30" placeholder="Alejandro Perez"></td>
                       
                       <td class="txt__label"><label for="area_cp" >Area:</label></td>
                       <td><input type="text" name="area_cp" maxlength="30" placeholder="Finanzas"></td>
                   </tr>
                   <tr>
                       <td class="txt__label"><label for="tel_ext1_cp">Telefono/Extensi&oacute;n(1):</label></td>
                       <td><input type="text" name="tel_ext1_cp" maxlength="20" placeholder="(656)7364823:1001"></td>
                       
                       <td class="txt__label"><label for="tel_ext2_cp" >Telefono/Extensi&oacute;n(2):</label></td>
                       <td><input type="text" name="tel_ext2_cp" maxlength="20" placeholder="(656)7569972:1002"></td>
                       <td></td>
                   </tr>
                   <tr>
                       <td class="txt__label"><label for="email_cp"></label>Correo electronico:</td>
                       <td colspan="2"><input type="email"  pattern="^[^\s()<>@,;:]+@((?=[a-zA-Z0-9-]+)|[a-zA-Z-]+)([a-zA-Z0-9-]+)*(\.([0-9]+(?=[a-zA-Z-]+)|[a-zA-Z-]+)(-?[a-zA-Z0-9-]+)?)+$" name="email_cp" maxlength="30" placeholder="ej: alguien@ejemplo.com"></td>
                       
                   </tr>
               </table>
           </fieldset>
           <fieldset class="cuadro__cont">
               <legend class="titulo__cuadro">Compras</legend>
               <table>
                   <tr>
                       
                       <td class="txt__label"><label for="contacto_c" >Contacto:</label></td>
                       <td><input type="text" name="contacto_c" maxlength="30" placeholder="Raul Villanueva"></td>
                       
                       <td class="txt__label"><label for="area_c" >Area:</label></td>
                       <td><input type="text" name="area_c" maxlength="30" placeholder="Compras"></td>
                   </tr>
                   <tr>
                       <td class="txt__label"><label for="tel_ext1_c">Telefono/Extensi&oacute;n(1):</label></td>
                       <td><input type="text" name="tel_ext1_c" maxlength="20" placeholder="(656)7364823:1001"></td>
                       
                       <td class="txt__label"><label for="tel_ext2_c" >Telefono/Extensi&oacute;n(2):</label></td>
                       <td><input type="text" name="tel_ext2_c" maxlength="20" placeholder="(656)7569972:1002"></td>
                       <td></td>
                   </tr>
                   <tr>
                       <td class="txt__label"><label for="email_c"></label>Correo electronico:</td>
                       <td colspan="2"><input type="email"  pattern="^[^\s()<>@,;:]+@((?=[a-zA-Z0-9-]+)|[a-zA-Z-]+)([a-zA-Z0-9-]+)*(\.([0-9]+(?=[a-zA-Z-]+)|[a-zA-Z-]+)(-?[a-zA-Z0-9-]+)?)+$" maxlength="30" name="email_c" placeholder="ej: alguien@ejemplo.com"></td>
                       
                   </tr>
               </table>
           </fieldset>
           <fieldset class="cuadro__cont">
               <legend class="titulo__cuadro">Observaciones</legend>
               <table>
                   <tr>
                       <td class="txt__label"><label for="observaciones">Observaciones:</label></td>
                       <td><textarea name="txt__area_ob" id="txt__area" ></textarea></td>
                   </tr>
               </table>
           </fieldset>
           <input type="submit" value="Registrar">
       
       </form>
       
       
   </div>
    
</body>
</html>
';
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($conexion, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '13'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
     }else{
	echo '<script> window.location="index.php"; </script>';
}
?>




