
<?php

session_start();

if(isset($_SESSION['usuario'])) {
include('php/cn.php');
$cn = Conectarse();
$html='
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Eliminar articulo</title>
    <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Questrial");

        body{
            font-family: "Questrial", sans-serif;
        }
        *{
            border-radius: 2px;
        }
::-webkit-scrollbar {
      width: 10px;
background: rgba(0,0,0,.5);
}::-webkit-scrollbar-thumb {
      background-color: #000;
} 
       
        label{
            color: #43BE6E;
        }
        fieldset{
        margin-top:20px;
            background: rgba(51,51,51,0.9);
            border: 0;
            border-color: #43BE6E;
            
        }
        
        legend{
            font-size: 28px;
            color:#FE2E2E;
            background: rgba(51,51,51,0.9);
            padding: 5px;
        }
        legend.prin{
            color: #43BE6E;
            font-size: 30px;
        }
        div.titulos{
            display: none;
        }
        div.circulos{
            border: 1px solid rgba(80,80,80,.9);
            width: 10px;
            height: 10px;
            padding: 33px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 40px;
            background: rgba(80,80,80,.9);
            color: white;
                transition: 2s;
                font-size: 20px;
            text-align: center;
            vertical-align: middle;
        }
        div.param{
            display: inline-block;
            margin: 2px;
            text-align: center;
            width: 25%;
            min-width: 60px;
            padding: 5px;
        }
        div.ptrs{
            text-align: center;
        }
        div.carac{
            font-size: 25px;
            text-align: center;
            background: black;
        }
        fieldset.inff{
            border: 1px solid #000;
        }
        fieldset.prrin{
        
            border: 1px solid #000;
        }
label.cantidades{
    font-size: 20px;
    color: #fff;
    vertical-align: middle !important;
    margin-left: -1px !important;
}
        @media(min-width:700px){
            div.tit_mov{
                display: none;
            }
        div.titulos{
            display:table;
            width: 95%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        div#hddn{
            background: table;
        }
            div.tit_ind{
                display: inline-block;
                width: 20%;
            font-size: 20px;
            }
        div.carac{display: inline-block;
            font-size: 25px;
            text-align: center;
            background:;
            padding: 5px;
            background: none;
            }
            div.carac{
            width: 20%;
            }
            label.present{
                
            color: white;
            }
        div.param{
            display: inline-block;
            width: 28.5%;
        }
            div.ptrs{
                display: inline-block;
                width: 55%
            }
            div.circulos{
            border-radius:2px;
                transition: 2s;
            }
        }
        @media(max-width:700px){
            
        div#hddn{
            display: none;
        }
        }
    </style>
</head>
<body>
    <div class="general">
        <fieldset>
            <legend class="prin">Inventario</legend>
            <div class="pres">';
$prods = mysqli_query($cn, "SELECT DISTINCT `producto`, `vida` FROM `tipoprod` ORDER BY `producto`");

while($rowP = mysqli_fetch_row($prods)){
$html.='
                <fieldset class="prrin">
                    <legend>'.$rowP[0].'</legend>
                    <div class="titulos">
                        <div class="tit_ind"><label for="">Presentacion</label></div>
                        <div class="tit_ind"><label for="">Vida</label></div>
                        <div class="tit_ind"><label for="">Fisico</label></div>
                        <div class="tit_ind"><label for="">Comprometido</label></div>
                        <div class="tit_ind"><label for="">Disponible</label></div>
                    </div>';
$pres = mysqli_query($cn, "SELECT `relacion` FROM `relaciones` WHERE `producto` LIKE '$rowP[0]' ");

while($rowPr = mysqli_fetch_row($pres)){

    $fisico = mysqli_query($cn, "SELECT `cantidad` FROM `productos` WHERE `producto` LIKE '$rowP[0]' AND `presentacion` LIKE '$rowPr[0]'");
    $cant = 0;
  while($fis = mysqli_fetch_row($fisico)){$cant = $cant+$fis[0]; }
   $comprom = mysqli_query($cn, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$rowP[0]' AND `presentacion` LIKE '$rowPr[0]'");
    
    $comp = 0;
    while($com = mysqli_fetch_row($comprom)){$comp = $com[0];};
    
    
    $mprm = mysqli_query($cn, "SELECT * FROM `1111` WHERE `articulo` LIKE '$rowP[0]' AND `presentacion` LIKE '$rowPr[0]' ORDER BY `articulo` ASC");
                    
                            $min=0;
                            $pre=0;
                            $max=0;
                        while ($row = mysqli_fetch_row($mprm)){
                            $min=$row[3];
                            $pre=$row[4];
                            $max=$row[5];
                        }
    if(($cant-$comp)<= $min){
        $bgcp="#E74C3C";
    }
    elseif(($cant-$comp)<= $pre){
        $bgcp="#F39C12";
    }
    elseif(($cant-$comp)<= $max){
        $bgcp="#2ECC71";
    }
    else{
        $bgcp="#2471A3";
    }
    //#2471A3
//#2ECC71
//#F39C12
//#E74C3C
$html.='
                    <fieldset class="inff">
                        <div class="inf">
                            <div class="carac"><label for="" class="present">'.$rowPr[0].'</label></div>
                            <div class="carac" id="hddn"><label for="" class="present">'.$rowP[1].' Dias</label></div>
                            <div class="ptrs">
                            <div class="param">
                               
                                <div class="tit_mov"><label for="">Fisico</label></div>
                                <div class="val_param">
                                    <div class="circulos"  ><label for="" class="cantidades">'.$cant.'</label></div>
                                </div>
                            </div>
                            <div class="param">
                                <div class="tit_mov"><label for="">Comp.</label></div>
                                <div class="val_param">
                                    <div class="circulos" ><label for="" class="cantidades">'.$comp.'</label></div>
                                </div>
                            </div>
                            <div class="param">
                                <div class="tit_mov"><label for="">Disp.</label></div>
                                <div class="val_param">
                                    <div class="circulos" style="background:'.$bgcp.'; border: 1px solid '.$bgcp.'; "><label for="" class="cantidades">'.($cant-$comp).'</label></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </fieldset>';

}


$html.='
                </fieldset>';

}


$html.='
            </div>
        </fieldset>

        
    </div>
</body>
</html>
';
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '8'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
    
    
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>
