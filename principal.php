<?php
session_start();
include 'php/cn.php';
$cn = Conectarse();

if(isset($_SESSION['usuario'])) {?>




<!DOCTYPE HTML>
<html>
    <head>
        <title>Principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilosprinBAR.css">
        <LINK REL="SHORTCUT ICON" HREF="fondos/favicon.ico" />
        <style>
            body{
                
    overflow-y:hidden;
            }
        </style>
    </head>
    <body>
       <header>
           <div class="contenedor">
              <h1><?php echo $_SESSION['usuario'];?></h1>
               <input type="checkbox" id="btn_menu">
               <label for="btn_menu" class="icon-menu"></label>
               <nav class="menu">
                   <ul>
                      <li><a href="inicio.php"  target="frame_principal"  style="color:yellow;">Inicio</a></li>
                      <li><a class="sincursor" id="m__art">Articulos</a>
                          <ul class="submenu" id="sm__art">
                              <li><a href="agArticulos.php" target="frame_principal">-  Añadir articulo nuevo</a></li>
                              <li><a href="eliminarart.php" target="frame_principal">- Buscar/Eliminar articulos</a></li>
                          </ul>
                      </li>
                      <li><a class="sincursor" id="m__venta">Salidas</a>
                          <ul class="submenu" id="sm__venta">
                              <li><a href="Nsalidas.php" target="frame_principal" >-  Registrar salida</a></li>
                              <li><a href="Hsalidas.php" target="frame_principal" >-  Ver historial de salidas</a></li>
                          </ul>
                      </li>
                      
                      
                      <li><a class="sincursor" id="m__clientes">Clientes</a>
                          <ul class="submenu" id="sm__clientes">
                              <li><a href="" target="frame_principal" style="color:red;"> - Ver lista de clientes</a></li>
                              <li><a href="ordendecompra.php" target="frame_principal"> - Registrar orden de compra</a></li>
                              <li><a href="ordenespendientes.php" target="frame_principal"> - Ordenes pendientes</a></li>
                          </ul>
                      </li>
                      
                      <li><a class="sincursor" id="m__info">Informes</a>
                          <ul class="submenu" id="sm__info">
                              <li><a href="infprod.php" target="frame_principal">-  Inventario</a></li>
                              <li><a href="" target="frame_principal" style="color:red;">-  Informe de ventas</a></li>
                          </ul>
                      </li>
                      
                      <li><a class="sincursor" target="frame_principal" >Configuraci&oacute;n</a>
                          <ul class="submenu" id="sm__info">
                              <li><a href="usuarios.php" target="frame_principal" >-  Usuarios</a></li>
                              <li><a href="permisos.php" target="frame_principal">-  Permisos de usuarios</a></li>
                              <li><a href="correos.php" target="frame_principal">-  Correos y reportes</a></li>
                              <li><a href="clientes.php" target="frame_principal">-  Clientes</a></li>
                              
                              <li><a href="AEproductos.php" target="frame_principal">-  Productos y presentaciones</a></li>
                              <li><a href="parametros.php" target="frame_principal">-  Establecer parametros (MIN, P.REORDEN, MAX)</a></li>
                              <li><a href="syslog.php" target="frame_principal">-  SYSLOG</a></li>
                              
                              
                          </ul>
                          
                    </li>
                      <li><a href="php/logout.php" >Salir</a></li>
                    </ul>
                   
               </nav>
                
           </div>
       </header>
       <div class="frames">
          <iframe src="inicio.php" frameborder="0" name="frame_principal" style="background: rgba(70,70,70,0.9);">
               
           </iframe>
       </div>
    </body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>