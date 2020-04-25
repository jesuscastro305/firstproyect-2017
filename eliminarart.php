<?php
session_start();

if(isset($_SESSION['usuario'])) {
    include('php/cn.php');
    $conexion = Conectarse();


$html='<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Eliminar articulo</title>';
$html.='
    <script>
        function relacion(){
        var sprod = document.getElementById("slct0").value;
        
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

        body{
            font-family: "Questrial", sans-serif;
        }
::-webkit-scrollbar {
      width: 10px;
background: rgba(0,0,0,.5);
}::-webkit-scrollbar-thumb {
      background-color: #000;
} 
        input[type=text], label{
            width: 95%;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        input{
            padding: 5px;
            border:0;
            color:#fff;
            font-size: 20px;
            background: rgba(51,51,51,0.9);
            text-align: center;
            font-family: "Questrial", sans-serif;
        }
        label{
            color: #43BE6E;
            font-size: 20px;
        }
        fieldset.pres{
        margin-top:10px;
            border: 1px;
            border-radius: 3px;
            border-color: black;
            border-style: double;
        }
        fieldset{
        margin-top:20px;
            background: rgba(51,51,51,0.9);
            border: 0;
            border-color: #43BE6E;
        }
        div.inf_gen{
            width: 95%;
            text-align: center;
        }
        div.informacion{
            display: inline-block;
            background: rgba(51,51,51,0.9);
            padding: 6px;
            width: 95%;
        }
        div.eliminar{
            display: inline-block;
            background: rgba(51,51,51,0.9);
            padding: 6px;
            width: 95%;
            text-align: center;
        }
        input#cantelim{
            border: 0;
            border-radius: 2px;
            background:white;
            color: #000;
            font-family: "Questrial", sans-serif;
            
        }
        legend{
            font-size: 23px;
            color:#FE2E2E;
            background: rgba(51,51,51,0.9);
            padding: 5px;
        }
        legend.prin{
            color: #43BE6E;
            font-size: 30px;
        }
        div.x{
            display: inline-block;
            width: 95%;
            margin-top: -25px;
            margin-right: -48px;
        }
        input[type=submit]{
        padding:2px;
            width: 120px;
            font-size: 20px;
            margin: auto;
            color: white;
            cursor: pointer;
            display: block;
            background: #FE2E2E;
            border: 0;
            padding: 6px;
            border-radius: 2px;
            margin-top: 10px;
        }
        div.bs{
            vertical-align: middle;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
        }
        div.cod{
            width: 95%;
            text-align: center;
            display: inline-block;
        }
        div.boton{
            margin-top: 5px;
            width: 95%;
            text-align: center;
            display: inline-block;
        }
        div.carac{
            width: 95%;
            text-align: center;
            display: inline-block;
            
        }
        select#slct0, select#slct1{
            width: 95%;
            padding: 5px;
            border-radius: 2px;
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
        }
        input#codbtn{
        color:black;
        background: white;
            width: 95%;
            display: inline-block;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:15px;
        }
        input[type=submit].btn{
        
            background: #43BE6F;
        }
        fieldset.bsf{
            
            display: inline-block;
            width: 95%;
            text-align: center;
        }
        @media(min-width:700px){
            fieldset.bsf{
                width: 44.5%;
            }
            
        select#slct0, select#slct1{
            width: 45%;}
        div.informacion{
            width: 13%;
        }
        input#cantelim{
            
            width: 90px;
            
        }
            input#x{
                margin-right: -35px;
                margin-top: 8px;
            }
        }
    </style>
</head>
<body>
 <div class="busqueda">
        <fieldset>
            <legend  class="prin">Busqueda</legend>
            <div class="bs">
            <fieldset class="bsf">
                <legend>Por codigo de barras</legend>
                <form action="" method="post">
                    <div class="cod"><input type="number" name="cod__barras" id="codbtn"></div>
                    <div class="boton"><input type="submit" value="Buscar" class="btn"></div>
                </form>
            </fieldset>
            <fieldset class="bsf">
                <legend>Por caracteristica</legend>
                <div class="carac">
                <form action="" method="post">
                    <select name="s__prod" id="slct0" onclick="return relacion();">
                        <option value="">Producto</option>';


$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.='
                            <option value="'.$rowS[0].'">'.$rowS[0].'</option>';
}


$html.='
                    </select>
                    
                    
                    <select name="s__pres" id="slct1">
                        <option value="">Presentacion</option>';




$presS = mysqli_query($conexion, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowpS = mysqli_fetch_row($presS)){

$html.='
                            <option value="'.$rowpS[0].'" id="'.$rowpS[0].'" hidden>"'.$rowpS[0].'"</option>';
}

$html.='
                    </select>
                    
                    
                    </div>
                <div class="boton"><input type="submit" value="Buscar" class="btn"></div>
                
                </form>
            </fieldset>
            </div>
        </fieldset>
    </div>
    <div class="general">';

                       
    
    if(isset($_POST["cod__barras"])){
        $cod_barras = $_POST["cod__barras"] ;
    }
    else{
        $cod_barras = "";
    }
    
    if(isset($_POST["s__prod"])){
        $producto=$_POST["s__prod"] ; 
    }else{
       $producto  ="";
    }
    if(isset($_POST["s__pres"])){
        $presentacion=$_POST["s__pres"] ;
    }else{
        $presentacion ="";
    }
                        
                            
                       
                       $busquedacodigo = "SELECT * FROM `productos` WHERE `cod__barras` LIKE '$cod_barras' ORDER BY id_productos ASC;";
                       
                       $busquedacaracteristica = "SELECT * FROM productos WHERE `producto` LIKE '$producto' AND `presentacion` LIKE '$presentacion' ORDER BY id_productos ASC;";
                       
                       
                       if(isset($_POST['cod__barras']) ){
                           
                         $articulos = mysqli_query($conexion, "SELECT DISTINCT `id_productos`, `producto` FROM `productos` WHERE `cod__barras` LIKE '$cod_barras' ORDER BY `id_productos` ASC") or die (mysqli_error($conexion));
                           
                       }else{  
                           if(empty($presentacion)){
                         $articulos = mysqli_query($conexion, "SELECT DISTINCT `id_productos`, `producto` FROM `productos` WHERE `producto` LIKE '$producto'  ORDER BY `id_productos` ASC") or die (mysqli_error($conexion));
                               
                           }  
                           elseif(empty($producto)){
                         $articulos = mysqli_query($conexion, "SELECT DISTINCT `id_productos`, `producto` FROM `productos` WHERE `presentacion` LIKE '$presentacion' ORDER BY `id_productos` ASC") or die (mysqli_error($conexion));
                               
                           }
                           else{
                               
                         $articulos = mysqli_query($conexion, "SELECT DISTINCT `id_productos`, `producto` FROM `productos` WHERE `producto` LIKE '$producto' AND `presentacion` LIKE '$presentacion' ORDER BY `id_productos` ASC") or die (mysqli_error($conexion));
                           }
                       }

//




while ($rowP = mysqli_fetch_row($articulos ) ){
$html.='
        <fieldset>
            <legend class="prin">'.$rowP[1].'</legend>';

        $ma = mysqli_query($conexion, "SELECT * FROM `productos` WHERE `id_productos` LIKE '$rowP[0]' ORDER BY `id_productos` ASC");

        while ($row = mysqli_fetch_row($ma)){
        $html.='
                    <fieldset class="pres">
                        <legend>'.$row[3].'</legend>
                        <div class="inf_gen">
                            <div class="x">
                            <form action="php/eliregistroprod.php" method="post">
                        <input type="hidden" value="'.$row[0].'" name="id_pro">
                             <input type="submit" id="x" value="X" style="background: #E74C3C; width: 25px; text-align:center; font-weight: bold; float:right; ">
                        </form>
                       </div>
                        <div class="informacion"><label for="">#LOTE:</label><input type="text" value="'.$row[9].'" disabled ></div>
                        <div class="informacion"><label for="">Codigo de barras:</label><input type="text" value="'.$row[1].'" disabled ></div>
                        <div class="informacion"><label for="">Kg/Lts:</label><input type="text" value="'.$row[4].'" disabled ></div>
                        <div class="informacion"><label for="">Descripcion:</label><input type="text" value="'.$row[5].'" ></div>
                        <div class="informacion"><label for="">Precio:</label><input type="text" value="$'.$row[6].'" disabled ></div>
                        <div class="informacion"><label for="">Cantidad fisica:</label><input type="text" value="'.$row[7].'" disabled ></div>
                        <div class="informacion"><label for="">Fecha de registro:</label><input type="text" value="'.$row[8].'" disabled ></div>
                        </div>
                        <div class="eliminar">
                        <form action="php/eliminararticulo.php" method="post">
                        <input type="hidden" value="'.$row[0].'" name="id_prod">
                        <label for="">Cantidad a eliminar:</label><input type="number" id="cantelim" name="cant" min="0" max="'.$row[7].'">
                        <input type="submit" value="Eliminar">
                        </form>
                        </div>
                    </fieldset>';
                                        $f = $row[8];
                            $date1 = new DateTime($f);
                            $date2 = new DateTime("now");
                            $diff = $date1->diff($date2);
                            $c = ($diff->days);
                            $info = mysqli_query($conexion, "SELECT `vida` FROM `tipoprod` WHERE `producto` LIKE '$rowP[1]'");
                            while($life = mysqli_fetch_row($info)){$lif = $life[0];}
                                
                            $t = ($lif - $c);
            
                            $cosul = mysqli_query($conexion, "SELECT * FROM `caducidad` WHERE `lote` LIKE '$row[9]' AND `codbarras` LIKE '$row[1]' AND `producto` LIKE '$rowP[1]' AND `presentacion` LIKE '$row[3]'");
                            
                            $exis = mysqli_num_rows($cosul);
            
                            if($exis == 0){
                                mysqli_query($conexion, "INSERT INTO `caducidad` (`lote`,`codbarras`,`producto`,`presentacion`,`diasr`) VALUES ('$row[9]','$row[1]','$rowP[1]','$row[3]','$t')");
                            }
                            else{
                                 mysqli_query($conexion, "UPDATE `caducidad` SET `diasr` = '$t' WHERE `lote` LIKE '$row[9]' AND `codbarras` LIKE '$row[1]' AND `producto` LIKE '$rowP[1]' AND `presentacion` LIKE '$row[3]'");
                            }
                                        
}

$html.='
        </fieldset>';
}

$html.='
    </div>
</body>
</html>';
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($conexion, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '2'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
}else{
	echo '<script> window.location="index.php"; </script>';
}

?>