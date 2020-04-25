<?php

	session_start();

if(isset($_SESSION['usuario'])) {
include('php/cn.php');
$cn = Conectarse();



 $articulos = mysqli_query($cn, "SELECT DISTINCT `id_productos`, `producto` FROM `productos`  ORDER BY `id_productos` ASC");

while ($rowP = mysqli_fetch_row($articulos ) ){

$ma = mysqli_query($cn, "SELECT * FROM `productos` WHERE `id_productos` LIKE '$rowP[0]' ORDER BY `id_productos` ASC");

        while ($row = mysqli_fetch_row($ma)){


                                        $f = $row[11];
                            $date1 = new DateTime($f);
                            $date2 = new DateTime("now");
                            $diff = $date1->diff($date2);
                            $c = ($diff->days);
                            $info = mysqli_query($cn, "SELECT `vida` FROM `tipoprod` WHERE `producto` LIKE '$rowP[1]'");
                            $lif=0;
                            while($life = mysqli_fetch_row($info)){$lif = $life[0];}
                                
                            $t = ($lif - $c);
            
                            $cosul = mysqli_query($cn, "SELECT * FROM `caducidad` WHERE `lote` LIKE '$row[9]' AND `codbarras` LIKE '$row[1]' AND `producto` LIKE '$rowP[1]' AND `presentacion` LIKE '$row[3]'");
                            
                            $exis = mysqli_num_rows($cosul);
            
                            if($exis == 0){
                                mysqli_query($cn, "INSERT INTO `caducidad` (`lote`,`codbarras`,`producto`,`presentacion`,`diasr`) VALUES ('$row[9]','$row[1]','$rowP[1]','$row[3]','$t')");
                            }
                            else{
                                 mysqli_query($cn, "UPDATE `caducidad` SET `diasr` = '$t' WHERE `lote` LIKE '$row[9]' AND `codbarras` LIKE '$row[1]' AND `producto` LIKE '$rowP[1]' AND `presentacion` LIKE '$row[3]'");
                            }
                                        
}

        }



 $article = mysqli_query($cn, "SELECT DISTINCT `id_productos`, `producto` FROM `productos`  ORDER BY `id_productos` ASC");

while ($rower = mysqli_fetch_row($article ) ){

$mimi = mysqli_query($cn, "SELECT * FROM `productos` WHERE `id_productos` LIKE '$rower[0]' ORDER BY `id_productos` ASC");

        while ($rowier = mysqli_fetch_row($mimi)){


                                        $p = $rowier[8];
                            $datoo1 = new DateTime($p);
                            $datoo2 = new DateTime("now");
                            $diferr = $datoo1->diff($datoo2);
                            $cres = ($diferr->days);
            
                            $cosul22 = "SELECT  `id` FROM `estancado` WHERE `lote` LIKE '$rowier[9]' AND `codbarras` LIKE '$rowier[1]' AND `producto` LIKE '$rower[1]' AND `presentacion` LIKE '$rowier[3]' AND `idsec` LIKE '$rowier[0]'";
                            $cosul = mysqli_query($cn, $cosul22);
            
                            $exis = mysqli_num_rows($cosul);
                            if($exis == 0){
                                $consus = "INSERT INTO `estancado` (`lote`,`codbarras`,`producto`,`presentacion`,`diase`, `idsec`) VALUES ('$rowier[9]','$rowier[1]','$rower[1]','$rowier[3]','$cres', '$rowier[0]');";
                                mysqli_query($cn, $consus);
                                
                            }
                            else{
                                $consulll = "UPDATE `estancado` SET `diase` = '$cres' WHERE `lote` LIKE '$rowier[9]' AND `codbarras` LIKE '$rowier[1]' AND `producto` LIKE '$rower[1]' AND `presentacion` LIKE '$rowier[3]' AND `idsec` LIKE '$rowier[0]';";
                                 mysqli_query($cn, $consulll) or die("no funciona");
                            }
                                        
}

        }




$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>inicio</title>
    <style>
    
     @import url("https://fonts.googleapis.com/css?family=Questrial");

        *{
            font-family: "Questrial", sans-serif;
            border-radius: 2px;
        }
::-webkit-scrollbar {
      width: 10px;
background: rgba(0,0,0,.5);
}::-webkit-scrollbar-thumb {
      background-color: #000;
} 
        div.general{
            text-align: center;
        }
        div.titulosprin{
            display: none;
        }
        div.inftit{
            color:#E74C3C;
            font-size: 21px;
            
        }
        div.inftitvida{
            color:#43BE6E;
            font-size: 21px;
            
        }
        div.inftitpr{
            color:#43BE6E;
            font-size: 21px;
            
        }
        div.prinf, div.vidainf{
            font-size: 25px;
        }
        div.infogen{
            padding: 5px;
            margin-top:10px;
        }
        div.infogenpr{
            padding: 5px;
            background: rgba(100,100,100,.5);
            margin-top:10px;
        }
            fieldset{
                background: rgba(51,51,51,0.9);
                color: #fff;
                border: 0;
                text-align: center;
            margin-top: 20px;

            }
        div#diasR{
            background: white;
            width: 60px;
            border-radius: 50px;
            margin-left: auto;
            margin-right: auto;
        }
        fieldset#vida{
            border-radius: 5px;
        }
         legend{
            color:#43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        div.infgenvida{
            width: 95%;
            margin-top:10px;
            background: rgba(100,100,100,.5);
            border-left: 10px solid #E74C3C;
        }
        p{
            border: 2px solid #F39C12;
            border-radius: 5px;
            padding: 5px;
            max-width: 520px;
            margin-left: auto; 
            margin-right: auto;
            font-size: 20px;
        }
        fieldset#pr{
            border-radius: 5px;
        }
        div.infgenpr{
            margin-top:10px;
            background: rgba(100,100,100,.5);
            padding:5px;
        }
        div.infogenpr{
            background: none;
        }
        @media(min-width:500px){
        div.titulosprin{
            display: block;    
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            
        }
            div.titulosOcul{
                display: inline-block;
                width: 18%;
                font-size: 25px;
            color:#43BE6E;
                
            }
            div.inftitvida{
                display: none;
            }
            div.vidainf{
                display: inline-block;
                width: 18%;
                font-size: 20px;
            }
            div.titulosOculpr{
                display: inline-block;
                width: 30%;
                font-size: 25px;
            color:#43BE6E;
                
            }
            div.inftitpr{
                display: none;
            }
            div.prinf{
                display: inline-block;
                width: 30%;
                font-size: 20px;
            }
            
        div.infgenvida{
            padding: 5px;
            background: rgba(100,100,100,.5);
            border-left: 10px solid #E74C3C;
            margin-left: auto;
            margin-right: auto;
        }
        div.infgenpr{
            padding: 5px;
            background: rgba(100,100,100,.5);
            margin-left: auto;
            margin-right: auto;
            margin-top:10px;
        }
        div.infogen{
            background: none;
            border-left: none;
        }
        div.infogenpr{
            background: none;
        }
        }
    </style>
</head>
<body>
    <div class="general">
        <div class="info">
            <fieldset>
                <legend></legend>
                <div class="infint"><label for=""></label></div>
                <div class="infint"><label for=""></label></div>
                <div class="infint"><label for=""></label></div>
                <div class="infint"><label for=""></label></div>
            </fieldset>
        </div>';
$cad = mysqli_query($cn, "SELECT * FROM `caducidad` WHERE `diasr` <= '45'");
$SiEx = mysqli_num_rows($cad);
if($SiEx>0){
$html.='
        <div class="info">
            <fieldset id="vida">
                <legend>Productos-Vida</legend>
                <p>A los siguientes productos se les agota su tiempo de vida</p>
                <div class="infogen" >
                <div class="titulosprin">
                <div class="titulosOcul"><label for="">Lote</label></div>
                <div class="titulosOcul"><label for=""># Barras</label></div>
                <div class="titulosOcul"><label for="">Producto</label></div>
                <div class="titulosOcul"><label for="">Presentacion</label></div>
                <div class="titulosOcul"><label for="">Dias Restantes</label></div>
                </div>';



while($rowc = mysqli_fetch_row($cad)){
$html.='
                <div class="infgenvida">
                <div class="inftitvida"><label for="">Lote</label></div>
                <div class="vidainf"><label for="">'.$rowc[1].'</label></div>
                
                <div class="inftitvida"><label for="">Codigo de barras</label></div>
                <div class="vidainf"><label for="">'.$rowc[2].'</label></div>
                
                <div class="inftitvida"><label for="">Producto</label></div>
                <div class="vidainf"><label for="">'.$rowc[3].'</label></div>
                
                <div class="inftitvida"><label for="">Presentacion</label></div>
                <div class="vidainf"><label for="">'.$rowc[4].'</label></div>
                
                <div class="inftitvida"><label for="">Dias Restantes</label></div>
                <div class="vidainf">
                <div  id="diasR"><label for="" style="color: #E74C3C; font-size: 25px;">'.$rowc[5].'</label></div>
                </div>
                </div>';
}



$html.='
                </div>
            </fieldset>
        </div>';
}else{}

$esta = mysqli_query($cn, "SELECT * FROM `estancado` WHERE `diase` > '180'");
$SiHay = mysqli_num_rows($esta);
if($SiHay>0){
$html.='
        <div class="info">
            <fieldset id="vida">
                <legend>Productos sin movimiento</legend>
                <p>Los productos que se muestran a continuaci&oacute;n, llevan mas de 4 meses sin movimientos registrados!!</p>
                <div class="infogen" >
                <div class="titulosprin">
                <div class="titulosOcul"><label for="">Lote</label></div>
                <div class="titulosOcul"><label for=""># Barras</label></div>
                <div class="titulosOcul"><label for="">Producto</label></div>
                <div class="titulosOcul"><label for="">Presentacion</label></div>
                <div class="titulosOcul"><label for="">Dias sin actividad</label></div>
                </div>';



while($rowEs = mysqli_fetch_row($esta)){
$html.='
                <div class="infgenvida">
                <div class="inftitvida"><label for="">Lote</label></div>
                <div class="vidainf"><label for="">'.$rowEs[1].'</label></div>
                
                <div class="inftitvida"><label for="">Codigo de barras</label></div>
                <div class="vidainf"><label for="">'.$rowEs[2].'</label></div>
                
                <div class="inftitvida"><label for="">Producto</label></div>
                <div class="vidainf"><label for="">'.$rowEs[3].'</label></div>
                
                <div class="inftitvida"><label for="">Presentacion</label></div>
                <div class="vidainf"><label for="">'.$rowEs[4].'</label></div>
                
                <div class="inftitvida"><label for="">Dias sin actividad</label></div>
                <div class="vidainf">
                <div  id="diasR"><label for="" style="color: #E74C3C; font-size: 25px;">'.$rowEs[5].'</label></div>
                </div>
                </div>';
}



$html.='
                </div>
            </fieldset>
        </div>';
}else{}
$SiExp = 0;
$producto = mysqli_query($cn, "SELECT DISTINCT(`producto`) FROM `relaciones` ORDER BY `id` ASC");
while($roe = mysqli_fetch_row($producto)){
    
 
$presentacion = mysqli_query($cn, "SELECT `relacion` FROM `relaciones` WHERE `producto` LIKE '$roe[0]' ORDER BY `id` ASC"); 
    
    while($j = mysqli_fetch_row($presentacion)){
        
$param = mysqli_query($cn, "SELECT * FROM `1111` WHERE `puntoreorden` >= (SELECT SUM(`cantidad`) FROM `productos` WHERE `producto` LIKE '$roe[0]' AND `presentacion` LIKE '$j[0]')-(SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$roe[0]' AND `presentacion` LIKE '$j[0]') AND `articulo` LIKE '$roe[0]' AND `presentacion` LIKE '$j[0]'");
    
    
    $m = mysqli_num_rows($param);
    if($m>0){$SiExp++;}
}
}
    $mm = 1;
if($mm=1){

$html.='
        
        
        
        <div class="info">
            <fieldset id="pr">
                <legend>Punto de reorden</legend>
                <p>Los siguientes productos llegaron a su punto de reorden:</p>
                
                <div class="infogenpr" >
                <div class="titulosprin">
                <div class="titulosOculpr"><label for="">Producto</label></div>
                <div class="titulosOculpr"><label for="">Presentacion</label></div>
                <div class="titulosOculpr"><label for="">Cantidad disponible</label></div>
                </div>';
    
    $param2 = mysqli_query($cn, "SELECT * FROM `1111` ORDER BY `id_parametro` ASC");
while($prods = mysqli_fetch_row($param2)){

$prod = mysqli_query($cn, "SELECT * FROM `productos` WHERE `producto` LIKE '$prods[1]' AND `presentacion` LIKE '$prods[2]' ORDER BY `id_productos` ASC");
    $cantp = 0;
while($parame = mysqli_fetch_row($prod)){
    $cantp = $cantp+$parame[7];
}
    
   $comprom = mysqli_query($cn, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$prods[1]' AND `presentacion` LIKE '$prods[2]'");
    
    $comp = 0;
    while($com = mysqli_fetch_row($comprom)){$comp = $com[0];};
    
    if(($cantp-$comp)<=$prods[4]){
        if(($cantp-$comp)<=$prods[3]){
            $color="#E74C3C";
        } 
        elseif(($cantp-$comp)<=$prods[4]){
            $color="#F39C12";
        }
$html.='
                <div class="infgenpr" style="border-left: 10px solid '.$color.';" >
                
                <div class="inftitpr"><label for="">Producto</label></div>
                <div class="prinf"><label for="">'.$prods[1].'</label></div>
                
                <div class="inftitpr"><label for="">Presentacion</label></div>
                <div class="prinf"><label for="">'.$prods[2].'</label></div>
                
                <div class="inftitpr"><label for="">Cantidad disponible</label></div>
                <div class="prinf">
                <div  id="diasR"><label for="" style="color: #E74C3C; font-size: 25px;">'.($cantp-$comp).'</label></div>
                </div>
                </div>';
}else{}

}

$html.='
                </div>
            </fieldset>
        </div>';

}else{$html.='<p style="border-color:#43BE6E; color:#fff; width:auto; background: rgba(50,50,50,0.9);">Por el momento no se necesita reordenar productos.</p>';}


$html.='
    </div>
</body>
</html>';
echo $html;

}else{
	echo '<script> window.location="index.php"; </script>';
}
?>