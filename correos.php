<?php


	session_start();

if(isset($_SESSION['usuario'])) {
include('php/cn.php');
$cn=Conectarse();
$html='<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Correos</title>
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
        input[type=text], input[type=number], input[type=email], input{
            display: inline-block;
            width: 95%;
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
            max-width:530px; 
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
    </style>
</head>
<body>
    <div class="genral">
        <fieldset>
                <legend>Enviar reportes por correo</legend>
            <div class="regcorreo">
                <fieldset id="correoprog">
                    <legend>Correo del programa</legend>
                    <div class="listacorreos">
                           <ul>
                            <table style="width:95%; margin-left:auto;margin-right:auto;">
                                <tr>
                        <td style="color: #E74C3C; font-size:20px; ">Correo</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;  "><li class="presp" >inventario.aga@gmail.com</li></td>
                                </tr>
                            </table>
                            </ul>
                    </div>
                </fieldset>
            </div>
            <div class="relaciones">
                <fieldset>
                    <legend>Correos-Reportes</legend>
                    <div class="fromrelacion">
                        <form action="php/relacioncorubreo.php" method="post">
                            <input type="email"  pattern="^[^\s()<>@,;:]+@((?=[a-zA-Z0-9-]+)|[a-zA-Z-]+)([a-zA-Z0-9-]+)*(\.([0-9]+(?=[a-zA-Z-]+)|[a-zA-Z-]+)(-?[a-zA-Z0-9-]+)?)+$" list="correos" placeholder="Correo a relacionar" name="correo" required>
                            <datalist id="correos">';

$correos = mysqli_query($cn, "SELECT `email` FROM `cuentas` ORDER BY `id` ASC ");
while($cor = mysqli_fetch_row($correos)){
$html.='
                            <option value="'.$cor[0].'">';
}
$html.='
                            </datalist>
                            <div class="listareportes">
                                <ol>
                                    <li class="lirep"><input type="checkbox" value="Productos Totales" id="cb1" class="" name="1"><label for="cb1">Productos totales</label></li>
                                    <li class="lirep"><input type="checkbox" value="Ordenes pendientes" id="cb2" class="" name="2"><label for="cb2">Ordenes pendientes</label></li>
                                    <li class="lirep"><input type="checkbox" value="Inventario" id="cb3" class="" name="3"><label for="cb3">Inventario</label></li>
                                    <li class="lirep"><input type="checkbox" value="Ordenes realizadas" id="cb4" class="" name="4"><label for="cb4">Ordenes realizadas</label></li>
                                </ol>
                            </div>
                            <input type="submit" value="Relacionar">
                        </form>
                    </div>
                </fieldset>
                <div class="listarel">
                   <fieldset>
                       <legend >Relaciones registradas</legend>';
$usuario = mysqli_query($cn, "SELECT DISTINCT `username`, `correo` FROM `reportes` ORDER BY `id` ASC");
while($uss = mysqli_fetch_row($usuario)){
$html.='
                    <fieldset class="listado">
                        <legend style="background:rgba(61,61,61,.9);">'.$uss[0].'</legend>
                          <form action="php/elicorreoreprel.php" method="post"><input type="hidden" name="nus" value="'.$uss[0].'"><input type="submit" value="X" style="background: #E74C3C; width: 25px; text-align:center; font-weight: bold; ">
                           </form>
                           <input class="sinborde" type="email"  pattern="^[^\s()<>@,;:]+@((?=[a-zA-Z0-9-]+)|[a-zA-Z-]+)([a-zA-Z0-9-]+)*(\.([0-9]+(?=[a-zA-Z-]+)|[a-zA-Z-]+)(-?[a-zA-Z0-9-]+)?)+$" placeholder="" value="'.$uss[1].'" readonly>';
    
$correo = mysqli_query($cn, "SELECT * FROM `reportes` WHERE `username` LIKE '$uss[0]' ORDER BY `reporte`");
    $b=1;
while($inf = mysqli_fetch_row($correo)){
$html.='
                           <form action="php/tiempo.php" method="post">
                           <div class="listaind">
                           <input type="hidden" value="'.$inf[0].'" name="'.$b.'">
                           <input type="hidden" value="'.$inf[2].'" name="correo'.$b.'">
                            <input class="sinborde" type="text" name="rep'.$b.'" placeholder="" value="'.$inf[3].'" readonly id="reportee">
                            <div class="conjunto">Cada
                            <input type="number" min="0" name="dias'.$b.'" placeholder="" value="'.$inf[4].'" id="dias">Dias</div>
                            </div>
                        ';
    $b++;
}

$html.='
                            <input type="submit" value="Modificar">
                        </form>
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
    $per = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '12'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
    }else{
	echo '<script> window.location="index.php"; </script>';
}
?>