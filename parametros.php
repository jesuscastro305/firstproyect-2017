<?php

	session_start();

if(isset($_SESSION['usuario'])) {
include('php/mostrarparametro.php');
$html = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Parametros</title>';
$html.='
    <script>
        function relacion(){
        var sprod = document.getElementById("s__prod").value;
        
        switch (sprod){';
$produ = mysqli_query($conexion, "SELECT `producto`, `descripcion`, `unidadmedida` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.='
    case "'.$P[0].'":
              
                ';
    $rel = mysqli_query($conexion, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
    $cadena = "";
    while($r = mysqli_fetch_row($rel)){
        
     
    $cadena .= " AND `presentacion` != '$r[0]'";   
//--------------------------------------------PRESENTACION HIDDEN--------------------------------------------
$html.='
                document.getElementById("'.$r[0].'").hidden="";';
        
 
        }
   
       $cons = "SELECT `presentacion` FROM `tipopres` WHERE `presentacion` != '' $cadena";
    //echo $cons;
    //echo "<br/>";
 $reld = mysqli_query($conexion, $cons);
   while($rd = mysqli_fetch_row($reld)){       
        
       $html.='
               document.getElementById("'.$rd[0].'").hidden="hidden";';
       }
        
        $html.='
                
                break;
    
                ';


}

$html.='
       }         
    }
    </script>';
$html.='
    <style type="text/css">
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
        div.div_form{
            text-align: center;
        }
        input{
            display: inline-block;
            width: 100px;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            margin-top:5px;
        }
        select{
            width: 150px;
            padding: 5px;
            border-radius: 2px;
            margin-top:5px;
        }
            input[type=submit]{
            display: inline-block;
                width: 120px;
                margin-left: auto;
                margin-right: auto;
                font-size: 17px;
                color: white;
                cursor: pointer;
                background: #43BE6F;
                border: 0;
                border-radius: 2px;
            }
        input[type=number]{
            text-align: center;
        }
            fieldset{
                background: rgba(51,51,51,0.9);
                color: #fff;
                border: 0;


            }
        legend{
            color:#43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        th{
            color: #43BE6E;
            text-align: left;
            border-collapse: collapse;
            border-left: black 1px solid;
            border-bottom: black 1px solid;
        }
        table{
            width: 100%;
        }
        
input[type=button] {
float:right;
    width: 120px;
    font-size: 17px;
    margin-top: 10px;
    color: white;
    cursor: pointer;
    background: #43BE6E;
    border: 0;
    padding: 6px;
    border-radius: 2px;
}
input[type=submit].borrar{
    width: 120px;
    font-size: 17px;
    margin: auto;
    color: white;
    cursor: pointer;
    display: block;
    background: #FE2E2E;
    border: 0;
    padding: 6px;
    border-radius: 2px;
}
td.inf{
text-align:center;
font-size:17px;
border-bottom: 1px solid grey;
padding: 17px;
}
th{
text-align:center;
}
th.titulos{
    width: 100px;
}
        @media(max-width:439px){
        input[type=number]{
            width: 25%;
            margin: 2px;
        }
        select{
            width: 100%;
            margin: 2px;
        }
            input[type=submit]{
                width: 50%;
            margin: 2px;
            }
            
        }
    </style>
    <script>
     function nomin(){
               var min = document.getElementById("min").value;
               var p_re = document.getElementById("p_re");
               var max = document.getElementById("max");
               var uno = 1;
               
                    p_re.setAttribute("min",(parseInt(min)+parseInt(uno)));
               
               
               max.setAttribute("min",(parseInt(p_re.value)+parseInt(uno)));
           }
function nomenos(){
               var min = document.getElementById("min").value;
               var p_re = document.getElementById("p_re");
               var max = document.getElementById("max");
               var uno = 1;
    
    
                if (min>0){
                    document.getElementById("p_re").readOnly=false;
                }
    else{
        
                    document.getElementById("p_re").readOnly=true;
    }
    if (p_re.value>0){
                    document.getElementById("max").readOnly=false;
                }
    else{
        
                    document.getElementById("max").readOnly=true;
    }
}
    </script>
</head>
<body>
<div class="registrar_parametro" >
        <div style="position:fixed; width:100%;height:100px; margin-top:-150px; ">
            <fieldset  >
            
                <legend>Establecer parametros</legend>
                <div class="div_form"">
                    <form action="php/agregarparametro.php" method="post"> 
                            <select name="s__prod" id="s__prod" onclick="return relacion();" >
                            <option>Producto</option>';
$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.='
                            <option value="'.$rowS[0].'">'.$rowS[0].'</option>';
}



$html.='
                            
                        </select> 
                         <select name="s__pres" id="s__pres" >
                            <option>Presentacion</option>';




$presS = mysqli_query($conexion, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowpS = mysqli_fetch_row($presS)){

$html.='
                            <option value="'.$rowpS[0].'" id="'.$rowpS[0].'" hidden>'.$rowpS[0].'</option>';
}

$html.='
                        </select>
                        <input type="number" min="0" placeholder="Minimo" name="min" id="min" onchange="return nomenos();" onclick="return nomin();" onkeyup="return nomin();" required>
                        <input type="number" min="0" placeholder="P. Reorden" name="p_re" id="p_re" onchange="return nomenos();" onclick="return nomin();" onkeyup="return nomin();" readonly required>
                        <input type="number" min="0" placeholder="Maximo" name="max" id="max" onclick="return nomin();" onkeyup="return nomin();" readonly required>
                        <input type="submit" value="Establecer">
                    </form>
                </div>
                <div style="width:100%;margin: 0 auto;">
                <input type="button" id="btn__refrescar"  onclick="location.reload()" value="Refrescar" >
                </div>
            </fieldset>
            </div>
    <div class="general" style="margin-top:150px">
        
            <fieldset class="listado_art" >
                <legend>Parametros establecidos</legend>';



                while ($rowP = mysqli_fetch_row($parametros)){ 
                    
                    $html.='<fieldset style="max-width:575px; margin: 0 auto; margin-top:20px; background: rgba(65,65,65,0.9);z-index:100;">
                                <legend style="background: rgba(65,65,65,0.9);">'.$rowP[0].'</legend>
                    
                    <table>
                        <tr>
                            <th class="">Presentacion</th>
                            <th class="titulos">Minimo</th>
                            <th class="titulos">Punto de reorden</th>
                            <th class="titulos">Maximo</th>
                        </tr>';
                    
                        $mprm = mysqli_query($conexion, "SELECT * FROM `1111` WHERE `articulo` LIKE '$rowP[0]' ORDER BY `articulo` ASC");
                    
                        while ($row = mysqli_fetch_row($mprm)){ 
                    
                        
                        $html.='

                        <tr>
                            <td class="inf">'.$row[2].'</td>
                            <td class="inf" style="background:rgba(231, 76, 60,.5)">'.$row[3].'</td>
                            <td class="inf" style="background:rgba(255, 244, 2,.5)">'.$row[4].'</td>
                            <td class="inf" style="background:rgba(46, 204, 113,.5)">'.$row[5].'</td>
                            <td></td>
                            
                        </tr>';
                        }
                        
                        
                        $html.='
                    </table>
                   
            </fieldset>';
                            }
                    
                    
                    
$html.='
            </fieldset>
        </div>
    </div>
</body>
</html>';
    
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($conexion, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '14'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>