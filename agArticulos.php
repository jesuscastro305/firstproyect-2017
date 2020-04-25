<?php
session_start();

if(isset($_SESSION['usuario'])) {
    
    
include('php/cn.php');
$cn = Conectarse();


date_default_timezone_set('America/Chihuahua'); 

$fecha = date('Y-M-d');


$html='<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Agregar articulo a inventario</title>';

$html.='
    <script>
        function relacion(){
        var sprod = document.getElementById("s__prod").value;
        
        switch (sprod){';
$produ = mysqli_query($cn, "SELECT `producto`, `descripcion`, `unidadmedida` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.='
    case "'.$P[0].'":
                document.getElementById("UML").innerHTML="'.$P[2].'";
                document.getElementById("desc").value="'.$P[1].'";
                ';
    $rel = mysqli_query($cn, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
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
 $reld = mysqli_query($cn, $cons);
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
    <style>
     @import url("https://fonts.googleapis.com/css?family=Questrial");

        body{
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
        
        input[type=number]{
                transition: .5s;
            display: inline-block;
            width: 40%;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
            text-align: center;
        }
        input[type=date]{
                transition: .5s;
            display: inline-block;
            width: 95%;
            padding: 3px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
            text-align: center;
        }
        select{
                transition: .5s;
            width: 95%;
            padding: 5px;
            border-radius: 2px;
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
        }
        select#ubi{
                transition: .5s;
            width: 95%;
            padding: 5px;
            border-radius: 2px;
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
        }
        input[type=submit]{
            padding: 5px;
            width: 120px;
            font-size: 17px;
            color: white;
            cursor: pointer;
            background: #43BE6F;
            border: 0;
            border-radius: 2px;
            margin-top:5px;
            font-family: "Questrial", sans-serif;
        }
        textarea{
            display: inline-block;
            width: 90%;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
            max-width: 500px;
            height: 100px;
            
        }
        div.precio{
            font-size: 20px;
            display: inline-block;
            width: 15px;
        }
        input#precio{
            display: inline-block;
            width: 100px;
        }
        div.general{
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
        div.UM{
            display: inline-block;
        }
        input#UM{
            width:70%;
        }
        @media(min-width:350px){
        
            select, input[type=date], select#ubi{
                width: 43%;
            }
        }
        @media(min-width:440px){
            select, input[type=number], div.UM{
                width: 30%;
            }
        }
        
        @media(min-width:1020px){
            select, input[type=number], div.UM{
                width: 15%;
            }
               input#ext, input[type=date], select#ubi{
                width: 30%;
            }
        }
    </style>
</head>
<body>
    <div class="general">
        <fieldset>
            <legend>Agregar productos</legend>
            <form action="php/agregarart.php" method="post">
                <fieldset>
                   <legend>Datos internos</legend>
                   <input type="hidden" value="'.$fecha.'" name="fecha">
                    <input type="number" name="lote" min="0" placeholder="Lote INT" >
                    <input type="number" name="cod" min="0" placeholder="C. barras" >
                    <select name="s_prod" id="s__prod" onclick="return relacion();">
                        <option value="">Producto</option>';


$productosS = mysqli_query($cn, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.='
                            <option value="'.$rowS[0].'" id="'.$rowS[0].'">'.$rowS[0].'</option>';
}


$html.='
                    </select>
                    <select name="s_pres" id="s__pres">
                        <option value="">Presentacion</option>';




$presS = mysqli_query($cn, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowpS = mysqli_fetch_row($presS)){

$html.='
                            <option value="'.$rowpS[0].'" id="'.$rowpS[0].'" hidden>'.$rowpS[0].'</option>';
}

$html.='
                    </select><div class="UM"><input type="number" min="0" step="any" id="UM" name="UM" placeholder="UM " required><label for="" id="UML"></label></div>
                    <input type="number" name="unidades" placeholder="Unidades" required>
                    <textarea name="caracteristicas" id="desc" cols="3" rows="10" placeholder="Caracteristicas" required></textarea>
                </fieldset>
                <fieldset>
                    <legend>Datos externos</legend>
                    <input type="number" id="ext" name="loteext" step="any" min="0" placeholder="Lote EXT" >
                    <input type="date" name="fechaelab" >
                    <select name="ubicacion" id="ubi">
                        <option value="No se definio">Ubicaci&oacute;n</option>
                        <option value="AGA">AGA</option>
                        <option value="Bodega">Bodega</option>
                    </select>
                    
                </fieldset>
                <fieldset>
                    <legend>Precio</legend>
                    <div class="precio">
                   <label for="precio">$</label></div><input type="number" id="precio" name="precio" placeholder="ej: 300" required>
                   
                </fieldset>
                <input type="submit" value="Agregar">
            </form>
        </fieldset>
    </div>
</body>
</html>';
    
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '1'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>