<?php
	session_start();

if(isset($_SESSION['usuario'])) {
include('php/cn.php');
$conexion = Conectarse();

$orden = "SELECT * FROM `111010t` ORDER BY `id_ordendecompraT` ASC;";

$ordencon = mysqli_query($conexion, $orden);

$html='
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenes pendientes</title>
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
            width: auto;
                background: rgba(51,51,51,0.9);
                color: #fff;
                border: 0;

        }
        fieldset.listas{
        
            margin: 0 auto;
        margin-top: 40px;
        }
        
        legend.prin{
            color:#43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        legend.sec{
        color: #43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        
         div.gen_fechas, div.fac_emb, div.encargado, div.credito{
            background: rgba(70,70,70,0.9);}
        div.inf_cliente{
            width: 100%;
            padding: 3px;
            justify-content: center;
        }
        div.num_usuario{
            padding: 1px;
            text-align: center;
            width: 60px;
            font-size: 20px;
        }
        div.gen_fechas{
            width: 100%;
        }
        div.fechas{
            padding: 1px;
            width: ;
            margin: 1px;
        }
        div.fac_emb{
            display: inline-block;
            padding: 1px;
            width: 100%;
            margin-top: 3px;
            
        }
        div.encargado{
            display: inline-block;
            padding: 1px;
            width: 100%;
            margin-top: 3px;
        }
        div.credito{
            display: inline-block;
            padding: 1px;
            width: 100%;
            margin-top: 3px;
            
        }
        div.titulos{
            display: inline-block;
            padding: 3px;
            margin: 2px;
            width: auto;
            height: auto;
            color: #43BE6E;
            font-size: 17px;
            
        }
        div.contenido{
            
            display: inline-block;
            padding: 3px;
            margin: 2px;
            width: auto;
            height: auto;
            font-size: 15px;
        }
        div.numus{
                background: rgba(51,51,51,0.9);
            border-radius: 3px;
            font-weight: bold;
            color: #E74C3C;
        }
        div.tabla{
            width: 100%;
            text-align: center;
        }
        table{
            width: 100%;
            max-width: 744px;
            margin: 0 auto;
            margin-top:20px;
        }
        .tr_titulos, .th_titulos{
            background: rgba(70,70,70,0.9);
            padding: 10px;
            border-radius: 2px;
            text-align: center;
            color: #43BE6E;
        }
        .td_inf{
            border-bottom: 2px solid rgba(70,70,70,0.9); 
            text-align: center;
            background: rgba(70,70,70,0.3);
        }
        .td_inf1{
            border-bottom: 2px solid rgba(70,70,70,0.9); 
            text-align: left;
            background: rgba(70,70,70,0.3);
        }
        .td_res{
            background: rgba(70,70,70,0.3);
            text-align: center;
            
        }
        input[type=submit]{
    width: 170px;
    font-size: 20px;
    margin: auto;
    margin-top: 10px;
    color: white;
    cursor: pointer;
    display: block;
    background: #43BE6F;
    border: 0;
    padding: 6px;
    border-radius: 4px;
}
input[type=button] {
float:right;
    width: 120px;
    font-size: 17px;
    margin: auto;
    margin-top: 10px;
    color: white;
    cursor: pointer;
    display: block;
    background: #43BE6E;
    border: 0;
    padding: 6px;
    border-radius: 2px;
}
        @media(min-width:800px){
        div.fac_emb, div.encargado, div.credito{
            width: 49.5%;
            
        }
            div.general{
                max-width: 900px;
                margin: 0 auto;
            }
            
        }

    </style>
</head>
<body>
    <div class="general">
        <fieldset class="lista">
            <legend class="prin">Ordenes pendientes</legend>
            
            <div class="boton">
            
            <input type="button" id="btn__refrescar"  onclick="location.reload()" value="Refrescar">
            
            </div>
            <div class=listastodas>
            ';
while($ordenv = mysqli_fetch_row($ordencon)){
$idcliente = "SELECT `cliente` FROM `1001010000` WHERE `nom_comercial` LIKE '$ordenv[1]'";
$ID = mysqli_query($conexion, $idcliente);
    $IDD = mysqli_fetch_row($ID);
$html.='
            <fieldset class="listas">
                <legend class="sec" >'.$ordenv[1].'</legend>
                <form action="php/eliminarordenpendiente.php" method="post">
<!--FOLIO-->       <input type="hidden" name="folio" value="'.$ordenv[9].'">
                    <div class="inf_cliente">
                       
                        <div class="num_usuario">
                            <div class="numus">'.$IDD[0].'</div>
                        </div>
                        
                        
                        <div class="gen_fechas">
                        <div class="fechas">
                            <div class="titulos">FOLIO:</div>
                            <div class="contenido">'.$ordenv[9].'</div>
                        </div>
                        <div class="fechas">
                            <div class="titulos">Fecha de orden:</div>
                            <div class="contenido">'.$ordenv[8].'</div>
                        </div>
                        <div class="fechas">
                            <div class="titulos">Fecha tentativa de entrega:</div>
                            <div class="contenido">'.$ordenv[7].'</div>
                        </div>
                        </div>
                        
                        
                        
                        <div class="fac_emb">
                            <div class="titulos">Facturar a:</div>
                            <div class="contenido">'.$ordenv[5].'</div>
                        </div>
                        
                        <div class="fac_emb">
                           <div class="titulos">Embarcar a:</div>
                            <div class="contenido">'.$ordenv[6].'</div>
                        </div>
                        
                        <div class="encargado">
                            <div class="titulos">Responsable de compras:</div>
                            <div class="contenido">'.$ordenv[3].'</div>
                        </div>
                        
                        <div class="credito">
                            <div class="titulos">Credito:</div>
                            <div class="contenido">'.$ordenv[4].'</div>
                        </div>
                    </div>
                    <div class="tabla">
                        <table class="inf_prod" >
                            <tr class="tr_titulos">
                                <td class="th_titulos" style="width: 100px">Cantidad</td>
                                <td class="th_titulos">Descripcion</td>
                                <td class="th_titulos" style="width: 100px">Precio unitario</td>
                                <td class="th_titulos" style="width: 90px">Total</td>
                            </tr>
            ';
    
$productossols = "SELECT * FROM `1110111110010t` WHERE `folio_PST` LIKE '$ordenv[9]' ORDER BY `id_productossolicitadosT` ASC;";

$productossol = mysqli_query($conexion, $productossols);
$Q=1;
                while($prods = mysqli_fetch_row($productossol)){


$html.='



<!--CANTIDAD-->    <input type="hidden" name="cant'.$Q.'" value="'.$prods[1].'">
<!--PRODUCTO-->     <input type="hidden" name="prod'.$Q.'" value="'.$prods[2].'">
<!--PRESENTACION--> <input type="hidden" name="pres'.$Q.'" value="'.$prods[3].'">



                            <tr class="tr_inf">
                                <td class="td_inf">'.$prods[1].'</td>
                                <td class="td_inf1"><label for="">'.$prods[2].'</label><br/>
                                <ul>
                                     <li>'.$prods[3].' --> '.$prods[4].'</li>
                                 </ul>
                                </td>
                                <td class="td_inf">$'.$prods[5].'</td>
                                <td class="td_inf">$'.$prods[6].'</td>
                            </tr>
            ';
                    $Q++;

}

$totales = mysqli_query($conexion, "SELECT * FROM `10011t` WHERE `folio_totalesT` LIKE '$ordenv[9]'  ORDER BY `id_totalesT` ASC;");

    while($total = mysqli_fetch_row($totales)){
    
$html.='
                            <tr class="tr_totales">
                                <td></td>
                                <td></td>
                                <td class="tr_titulos">SUBTOTAL:</td>
                                <td class="td_res">$'.$total[1].'</td>
                            </tr>
                            <tr class="tr_totales">
                                <td></td>
                                <td></td>
                                <td class="tr_titulos">IVA 16%:</td>
                                <td class="td_res">$'.$total[2].'</td>
                            </tr>
                            <tr class="tr_totales">
                                <td></td>
                                <td></td>
                                <td class="tr_titulos">TOTAL FINAL:</td>
                                <td class="td_res">$'.$total[3].'</td>
                            </tr>
            ';

}


$html.='
                        </table>
                    </div>
        <input type="submit" value="Borrar de la lista">
                </form>    
            </fieldset>
        </div>
            ';
}


$html.='
        </fieldset>
    </div>
</body>
</html>
';
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($conexion, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '7'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}

mysqli_close($conexion);

}else{
	echo '<script> window.location="index.php"; </script>';
}
?>



