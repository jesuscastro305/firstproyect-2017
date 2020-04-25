<?php

session_start();

if(isset($_SESSION['usuario'])) {
include('php/cn.php');
$cn = Conectarse();



$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Control de acceso</title>
    <style>
        
    @import url("https://fonts.googleapis.com/css?family=Questrial");

        *{
            font-family: "Questrial", sans-serif;


        }


        ::-webkit-scrollbar {
              width: 10px;
        background: rgba(0,0,0,.5);
        }::-webkit-scrollbar-thumb {
              background-color: #000;
        } 
            fieldset{
                background: rgba(51,51,51,0.9);
                color: #fff;
                border: 0;
                text-align: center;

            }
        legend{
            color:#43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        select{
            display: inline-block;
            width: 95%;
            max-width: 250px;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
        }
        input[type=submit]{
        padding:2px;
            width: 120px;
            font-size: 20px;
            color: white;
            cursor: pointer;
            background: #43BE6F;
            border: 0;
            border-radius: 2px;
            margin-top:5px;
            font-family: "Questrial", sans-serif;
        }
        input.sinborde{
            text-align: center;
            color: white;
            background: none;
        }
        input#dias{
            width: 50px;
        }
        div.listaind{
    background:rgba(61,61,61,.9);
        }
        div.conjunto, input#reportee{
            width: 45%;
            display: inline-block;
        }
        div.conjunto{
            min-width: 145px;
        }
        input[type=checkbox]{
            width: 20px;
        }
        li.lirep{
            text-align: left
        }
        div.fromrelacion{
            margin-left: auto;
            margin-right: auto;
        }
        fieldset#correoprog{
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        fieldset.listado{
            display: inline-block;
            max-width: 400px;
    background:rgba(61,61,61,.9);
        }
        fieldset.list{
            border: 1px solid #000;
            text-align: left;
        }
        fieldset.list>legend{
            color:#fff;
            border-bottom: 1px solid #000;
            border-left: 1px solid #000;
        }
        div.listasdiv{
            float: left;
            width: 95%;
            max-width: 230px;
            margin-top: 10px;
        }
        div.listareportes{
            display: inline-block;
            width: 95%;
        }
    </style>
    <script>

function cambiaGrupo(chk) {
    var padreDIV=chk;
    while( padreDIV.nodeType==1 && padreDIV.tagName.toUpperCase()!="DIV" )
        padreDIV=padreDIV.parentNode;
    //ahora que padreDIV es el DIV, cogeremos todos sus checkboxes
    var padreDIVinputs=padreDIV.getElementsByTagName("input");
    for(var i=0; i<padreDIVinputs.length; i++) {
        if( padreDIVinputs[i].getAttribute("type")=="checkbox" )
            padreDIVinputs[i].checked = chk.checked;
    }
}
    </script>
</head>
<body>
   
    <div class="genral">
        <fieldset>
                <legend>Permisos</legend>
           
            <div class="relaciones">
                <fieldset>
                    <legend>Usuarios-permisos</legend>
                    <div class="fromrelacion">
                        <form action="php/relpermisos.php" method="post">
                            
                            
                            <select name="usu" autofocus  required>';

$usuarios = mysqli_query($cn, "SELECT `usuario` FROM `cuentas` WHERE `tipo` LIKE 'Usuario' ORDER BY `id` ASC ");
while($userr = mysqli_fetch_row($usuarios)){
$html.='
                            <option value="'.$userr[0].'">'.$userr[0].'</option>';
}
$html.='
                            </select>
                            
                            
                            <div class="listareportes">
                               
                                   <div class="listasdiv">
                                   <fieldset class="list">
                                       <legend ><label style="cursor:pointer;" for="tit1">Articulos</label></legend>
                                   <p><input type="checkbox" onchange="cambiaGrupo(this)" id="tit1" style="display:none;"></p>
                                    <p><input type="checkbox" value="1" id="cb1" class="" name="1"><label for="cb1">Agregar articulo</label></p>
                                    <p><input type="checkbox" value="2" id="cb2" class="" name="2"><label for="cb2">Buscar/Eliminar articulo</label></p>
                                   </fieldset>
                                    </div>
                                    <div class="listasdiv">
                                    <fieldset class="list">
                                        <legend ><label style="cursor:pointer;" for="tit2">Salidas</label></legend>
                                    <p><input type="checkbox" onchange="cambiaGrupo(this)" id="tit2" style="display:none;"></p>
                                    <p><input type="checkbox" value="3" id="cb3" class="" name="3"><label for="cb3">Registrar salida</label></p>
                                    <p><input type="checkbox" value="4" id="cb4" class="" name="4"><label for="cb4">Ver historial de salidas</label></p>
                                    </fieldset>
                                       </div>
                                    <div class="listasdiv">
                                    <fieldset class="list">
                                        <legend ><label style="cursor:pointer;" for="tit3">Clientes</label></legend>
                                    <p><input type="checkbox" onchange="cambiaGrupo(this)" id="tit3" style="display:none;"></p>
                                    <p><input type="checkbox" value="5" id="cb5" class="" name="5"><label for="cb5">Ver lista de clientes</label></p>
                                    <p><input type="checkbox" value="6" id="cb6" class="" name="6"><label for="cb6">Registrar orden de compra</label></p>
                                    <p><input type="checkbox" value="7" id="cb7" class="" name="7"><label for="cb7">Ordenes de compra pendientes</label></p>
                                    </fieldset>
                                        </div>
                                    <div class="listasdiv">
                                    <fieldset class="list">
                                        <legend ><label style="cursor:pointer;" for="tit4">Informes</label></legend>
                                    <p><input type="checkbox" onchange="cambiaGrupo(this)" id="tit4" style="display:none;"></p>
                                    <p><input type="checkbox" value="8" id="cb8" class="" name="8"><label for="cb8">Inventario</label></p>
                                    <p><input type="checkbox" value="9" id="cb9" class="" name="9"><label for="cb9">Ordenes de compra</label></p>
                                    </fieldset>
                                        </div>
                                    <div class="listasdiv">
                                    <fieldset class="list">
                                        <legend ><label style="cursor:pointer;" for="tit5">Configuracion</label></legend>
                                    <p><input type="checkbox" onchange="cambiaGrupo(this)" id="tit5" style="display:none;"></p>
                                    <p><input type="checkbox" value="10" id="cb10" class="" name="10"><label for="cb10">Usuarios</label></p>
                                    <p><input type="checkbox" value="11" id="cb11" class="" name="11"><label for="cb11">Permisos de usuarios</label></p>
                                    <p><input type="checkbox" value="12" id="cb12" class="" name="12"><label for="cb12">Correos y reportes</label></p>
                                    <p><input type="checkbox" value="13" id="cb13" class="" name="13"><label for="cb13">Clientes</label></p>
                                    <p><input type="checkbox" value="14" id="cb14" class="" name="14"><label for="cb14">Productos y presentaciones</label></p>
                                    <p><input type="checkbox" value="15" id="cb15" class="" name="15"><label for="cb15">Parametros</label></p>
                                    <p><input type="checkbox" value="16" id="cb15" class="" name="16"><label for="cb15">SYSLOG</label></p>
                                    </fieldset>
                                        </div>
                                
                            </div>
                            <div>
                            <input type="submit" value="Relacionar">
                            </div>
                        </form>
                    </div>
                </fieldset>
                <div class="listarel">
                   <fieldset>
                       <legend>Permisos registrados</legend>';
$users = mysqli_query($cn, "SELECT DISTINCT(`usuario`) FROM `permisos` ");


while($r = mysqli_fetch_row($users)){
$html.='
                    <fieldset class="listado">
                        <legend style="background:rgba(61,61,61,.9);">'.$r[0].'</legend>
                          <form action="php/elipermiso.php" method="post"><input type="hidden" name="nus" value="'.$r[0].'"><input type="submit" value="X" style="background: #E74C3C; width: 25px; text-align:center; font-weight: bold; ">
                           </form>
                           <ol>';
    $permis = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$r[0]' ORDER BY `permiso` ASC");
    
    while($p = mysqli_fetch_row($permis)){
     $tipos = array("", "Agregar articulo", "Buscar/Eliminar articulo", "Registrar salida", "Ver historial de salidas", "Ver lista de clientes", "Registrar orden de compra", "Ordenes de compra pendientes", "Inventario", "Ordenes de compra", "Usuarios", "Permisos de usuarios", "Correos y reportes", "Clientes", "Productos y presentaciones", "Parametros", "SYSLOG"); 
        $i=$p[0];
                $permiso0=$tipos[$i];
        
    $html.='
                           
                               <li>'.$permiso0.'</li>
                           ';
    
    
    }
    $html.='
    </ol>
                    </fieldset>';

    
    
}

$html.='
                   </fieldset>
                </div>
            </div>
        </fieldset>
    </div>
</body>
</html>';
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '11'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
    }else{
	echo '<script> window.location="index.php"; </script>';
}
?>