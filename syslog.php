
<?php

session_start();

if(isset($_SESSION['usuario'])) {
include('php/cn.php');
$cn = Conectarse();


$html='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reguistro de actividades</title>
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
                border: 1px solid rgba(100,100,100,.9);
                margin-top:10px;
                border-radius:3px;
            }
        legend{
            color:#43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        legend.titmin{
            font-size: 25px;
        }
        div.inf{
            margin-top:5px;
            padding: 5px;
        }
        div.sepa1{
            padding: 1px;
            background: #99A3A4;
            border-radius: 2px;
            width: 65%;
            margin-left: auto;
            margin-right: auto;
            margin-top:4px;
        }
        div.sepa2{
            padding: 1px;
            background: #99A3A4;
            border-radius: 2px;
            width: 45%;
            margin-left: auto;
            margin-right: auto;
            margin-top:4px;
        }
        div.sepa3{
            padding: 2px;
            background: rgba(81,81,81,0.9);
            border-radius: 2px;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            margin-top:4px;
        }
        div.infxdia{
            margin-top: 4px;
            padding: 2px;
            border-radius: 3px;
        }
        div.infxus, div.infxdia{
        }
        div.titulosprin{
            color:#43BE6E;
            font-size: 20px;
            display: none;
        }
        @media(min-width:666px){
            div.titulosprin{
                display: block;
            }
            div.titulos{
                display: inline-block;
            }
            div#act{
                width: 60%;
            }
            div#fecha2{
                width: 15%;
            }
            div#hora{
                width: 10%;
            }
            legend{
                text-align: left;
            }
            div.sepa1, div.sepa2{
                display: none;
            }
            div.inf{
                display: inline-block;
                width: 15%
            
            }
            div#fecha{
                width: 10%
            }
            div#actividad{
                width: 60%
            }
        }
        
        div.barra{
            position: fixed;
            width: 95%;
            padding: 5px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            border-radius: 3px;
            background: rgba(100,100,100,.8);
        }
        div.buscador{
            width: 43%;
            background: rgba(51,51,51,.8);
            text-align: center;
            display: inline-block;
            padding: 10px;
            border-radius: 3px;
        }
        input[type=text]{
            font-size: 15px;
            width: 80%;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            font-family: "Questrial", sans-serif;
        }
        input[type=button]{
        padding:2px;
            width: 120px;
            font-size: 20px;
            margin-top: 5px;color: white;
            cursor: pointer;
            background: #43BE6F;
            border: 0;
            border-radius: 2px;
            margin-top:5px;
            font-family: "Questrial", sans-serif;
        }
        fieldset#arri{
        margin-top:80px;
        }
        div.barra{
        margin-top:-75px;
        }
    </style>
    <script>
        function usuario(){
            var us = document.getElementById("usuario").value;
            location.href="#"+us;
        }
        function fecha(){
            var fec = document.getElementById("fecha").value;
            location.href="#"+fec;
        }
    </script>
</head>
<body>
    <div class="general">
    
        <div class="barra">
           
           
            <div class="buscador"><input type="text" list="us" placeholder="Usuario" id="usuario" name="" onkeyup="return usuario();" onclick="return usuario();" onchange="return usuario();">
            </div>
            
            
            
            <div class="buscador"><input type="text" list="fec" placeholder="Fecha ej: Diciembre-01-2018" onkeyup="return fecha();" onclick="return fecha();"  onchange="return fecha();"; id="fecha" name="">
            </div>
            
            
            
            <datalist id="us">';
    $us1 = mysqli_query($cn, "SELECT DISTINCT(`responsable`) FROM `regactividades` ORDER BY `responsable` ASC");
    
    while($rus1 = mysqli_fetch_row($us1)){
    $html.='
                <option value="'.$rus1[0].'">';
        
    }
        $html.='
            </datalist>
            <datalist id="fec">';
            
    
    $fecha1 = mysqli_query($cn, "SELECT DISTINCT(`fecha`) FROM `regactividades` ORDER BY `id` DESC");
    while ($rf1 = mysqli_fetch_row($fecha1)){
    
    $html.='
                <option value="'.$rf1[0].'">';
        
    }
        $html.='
            </datalist>
        </div>
        <div class="infind" >
           <fieldset id="arri">
               <legend>Organizado por usuario</legend>';
    $us = mysqli_query($cn, "SELECT DISTINCT(`responsable`) FROM `regactividades` ORDER BY `responsable` ASC");
    
    while($rus = mysqli_fetch_row($us)){
    $html.='
            <fieldset>
                <legend class="titmin" id="'.$rus[0].'">'.$rus[0].'</legend>';
    
    
    
    $html.='
                <div class="titulosprin">
                    <div class="titulos" id="act">Actividad</div>
                    <div class="titulos" id="fecha2">Fecha</div>
                    <div class="titulos" id="hora">Hora</div>
                </div>';
    $inf = mysqli_query($cn, "SELECT * FROM `regactividades` WHERE `responsable` LIKE '$rus[0]' ORDER BY `id` DESC");
    while($rinf = mysqli_fetch_row($inf)){
    
    $html.='
                <div class="infxdia">
                    <div class="inf" id="actividad">'.$rinf[1].'</div>
                    <div class="sepa1"></div>
                    <div class="inf">'.$rinf[3].'</div>
                    <div class="sepa2"></div>
                    <div class="inf" id="fecha">'.$rinf[4].'</div>
                </div>
                <div class="sepa3"></div>';
    }
    
    
    $html.='
            </fieldset>';
    }
    
    
    $html.='
            
           </fieldset>
        </div>
        <div class="infxfecha">
           <fieldset>
               <legend>Organizado por fecha</legend>';
            
    
    $fecha = mysqli_query($cn, "SELECT DISTINCT(`fecha`) FROM `regactividades` ORDER BY `id` DESC");
    while ($rf = mysqli_fetch_row($fecha)){
    
    $html.='<fieldset >
                <legend class="titmin" id="'.$rf[0].'">'.$rf[0].'</legend>';
    
    
    
    $html.='
                <div class="titulosprin">
                    <div class="titulos" id="act">Actividad</div>
                    <div class="titulos" id="fecha2">Responsable</div>
                    <div class="titulos" id="hora">Hora</div>
                </div>';
    $infor = mysqli_query($cn, "SELECT * FROM `regactividades` WHERE `fecha` LIKE '$rf[0]' ORDER BY `id` DESC");
    
    while($rinfor = mysqli_fetch_row($infor)){
    $html.='
                <div class="infxus">
                <div class="inf" id="actividad">'.$rinfor[1].'</div>
                    <div class="sepa1"></div>
                <div class="inf">'.$rinfor[2].'</div>
                    <div class="sepa2"></div>
                <div class="inf" id="fecha">'.$rinfor[4].'</div>
                </div>
                <div class="sepa3"></div>';
    }
   
    
    $html.='
            </fieldset>';
    }
    
    
    $html.='
            </fieldset>
        </div>
    </div>
</body>
</html>
';
 $uss = $_SESSION['usuario'];
    $per = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '16'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
    }else{
	echo '<script> window.location="index.php"; </script>';
}

?>

