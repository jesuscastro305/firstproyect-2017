<?php

	session_start();

if(isset($_SESSION['usuario'])) {

include('php/cn.php');
$conexion = Conectarse();
    
    

$html='
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Agrgar o eliminar articulos y/o presentaciones</title>
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


            }
        legend{
            color:#43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        legend.sub{
            color:#43BE6E;
            font-size: 25px;
            background: rgba(51,51,51,0.9);
            text-align: left;
            padding: 5px;
        }
        legend.prods{
            font-size: 20px;
            color: #E74C3C;
            padding: 5px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            
        }
        
        input[type=text], input[type=number]{
            display: inline-block;
            width: 95%;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
            margin-top:5px;
            font-family: "Questrial", sans-serif;
            font-size:20px;
        }
        select{
            width: 95%;
            padding: 5px;
            border-radius: 2px;
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
        fieldset.prodpres{
            display: inline-block;
            width: 95%;
            margin-top: 10px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        fieldset.relacionesfield{
    background:rgba(81,81,81,.9);
            text-align: center;
        }
        fieldset.listados{
            margin-top: 10px;
        }
        div.relaciones{
            margin-top: 10px;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
        }
        div.relacion_ind{
            display: inline-block;
            width: 300px;
        }
        div.agregado{
            width: 95%;
            margin-left: auto;
            margin-right: auto;
        }
        div.general{
            width: 100%;
            text-align: center;
        }
        div.submit{
            width: 95%;
        }
        li.presentaciones{
        }
        li.presp{
            list-style: decimal;
        }
div.reg_rel{
    background: blue;
    padding:5px;
    background:rgba(81,81,81,.9);
}
       select.select_cb{
          width:200px;
           margin-left: auto;
            margin-right: auto;
       
       }
       div.selectcb{
           display: inline-block;
       text-align:center;
       width:95%;
       }
        div.cb_gen{
          display:inline-block;
           margin-left: auto;
            margin-right: auto;
        width:95%;
        }
        div.cb_ind{
           margin-top:4px;
            padding: 2px;
            display: inline-block;
            width:45%;
    background:rgba(61,61,61,.9);
       border-radius:2px;
        }
        label.label_cb{
            cursor:pointer;
        }
        @media(min-width:734px){
            
        fieldset.prodpres{
            width: 45.8%;
            max-width: 45.8%;
        }
            
            input[type=text], input[type=number], select{
                max-width: 250px;
            }
            div.cb_gen{
                width: 95%;
            }
            div.cb_ind{
                width:150px;
            }
            select.select_cb{
                width:200px;
            }
        }
        @media(max-width:343px){
           
        div.relacion_ind{
            width: 100%;
        } 
        
        }
    
    </style>
</head>
<body>
   <div class="general">
    <div class="agregado">
        <fieldset class="prodpres">
            <legend>Productos</legend>
            <div class="formulario">
               <form action="php/productos.php" method="post">
                <input type="text" name="producto" value="QBD-" placeholder="Nombre de producto"   required>
                <input type="text" name="descripcion"  placeholder="Descripcion" required>
                <select name="unidadmedida" id="">
                    <option value="">Unidad de medida</option>
                    <option value="Lts">Litros</option>
                    <option value="kg">Kilos</option>
                    <option value="">Indefinida</option>
                </select>
                <input type="number" name="vida" placeholder="Vida/Dias" min="0" required>
                <div class="submit">
                <input type="submit" value="Agregar">
                </div>
                </form>
            </div>
            <div class="lista">
                <fieldset class="listados">
                    <legend class="sub">Listado</legend>
                    <ul>
                    <table  style="width:95%; margin-left:auto;margin-right:auto;" >
                    
                    <tr>
                        <td style="color: #E74C3C; font-size:20px; ">Producto</td>
                        <td style="color: #E74C3C; font-size:20px;">Descripcion</td>
                        <td style="color: #E74C3C; font-size:20px;">UM</td>
                        <td style="color: #E74C3C; font-size:20px;">Vida</td>
                        <td ></td>
                    </tr>';
$prod = mysqli_query($conexion, "SELECT * FROM `tipoprod` ORDER BY `producto` ASC");
while($prods = mysqli_fetch_row($prod)){
$html.='
                    <tr>
                        <td><li class="presp" >'.$prods[1].'</li></td>
                        <td>'.$prods[2].'</td>
                        <td>'.$prods[3].'</td>
                        <td>'.$prods[4].'</td>
                        <td><form action="php/elprod.php" method="post"><input type="hidden" name="id_p" value="'.$prods[0].'"><input type="submit" value="X" style="background: #E74C3C; width: 25px; text-align:center; font-weight: bold; "></form></td>
                    </tr>';
}
$html.='
                    
                    </table>
                    </ul>
                </fieldset>
            </div>
        </fieldset>
        <fieldset class="prodpres">
            <legend>Presentaciones</legend>
            <div class="formulario">
               <form action="php/presentaciones.php" method="post">
                <input type="text" name="pres" placeholder="Presentacion" autofocus required>
                
                <div class="submit">
                <input type="submit" value="Agregar">
                </div>
                </form>
            </div>
            <div class="lista">
                <fieldset class="listados">
                    <legend class="sub">Listado</legend>
                    <ul>
                    <table style="width:95%; margin-left:auto;margin-right:auto;"  >
                    
                    <tr>
                        <td style="color: #E74C3C; font-size:20px; ">Presentacion</td>
                        <td ></td>
                    </tr>';
$pres = mysqli_query($conexion, "SELECT * FROM `tipopres` ORDER BY `presentacion` ASC");
while($press = mysqli_fetch_row($pres)){

$html.='
                    <tr>
                        <td style="text-align:center;  "><li class="presp" >'.$press[1].'</li></td>
                        <td><form action="php/elpres.php" method="post"><input type="hidden" name="id_p" value="'.$press[0].'"><input type="submit" value="X" style="background: #E74C3C; width: 25px; text-align:center; font-weight: bold; "></form></td>
                    </tr>';
}
$html.='
                    
                    </table>
                    </ul>
                </fieldset>
            </div>
        </fieldset>
    </div>
    <div class="relaciones">
        <fieldset>
            <legend>Relaciones</legend>
                <div class="reg_rel">
                   <form action="php/relacionar.php" method="post">
                        <div class="selectcb">
                        <select name="prodS" id="" class="select_cb">';
$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.='
                            <option value="'.$rowS[0].'">'.$rowS[0].'</option>';
}



$html.='
                        </select>
                          </div>  
                        <div class="cb_gen">';
$presentacionesS = mysqli_query($conexion, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");
$j=1;

while($rowScb = mysqli_fetch_row($presentacionesS)){


$html.='

                            <div class="cb_ind" ><input type="checkbox" name="'.$j.'" id="'.$j.'" value="'.$rowScb[0].'"><label class="label_cb" for="'.$j.'">'.$rowScb[0].'</label></div>';
    $j++;
}

$html.='
                        </div>
                        <input type="submit" value="Relacionar">
                        </form>
                </div>';
$relacionesP = mysqli_query($conexion, "SELECT DISTINCT `producto` FROM `relaciones`");
while($rowfi = mysqli_fetch_row($relacionesP)){


$html.='
            <div class="relacion_ind">
                <fieldset class="relacionesfield">
                    <legend class="prods">'.$rowfi[0].'</legend>
                    <form action="php/elrel.php" method="post"><input type="hidden" name="rel" value="'.$rowfi[0].'"><input type="submit" value="X" style="background: #E74C3C; width: 25px; float:right; font-weight: bold; margin-top:-30px; margin-right:-6px; ">
                        <ul style="text-align: left">';
    
$relacionesIn = mysqli_query($conexion, "SELECT `relacion` FROM `relaciones` WHERE `producto` LIKE '$rowfi[0]' ORDER BY `relacion` ASC");
    while($rowLi = mysqli_fetch_row($relacionesIn)){
    
    
    $html.='
                            <li class="presentaciones">'.$rowLi[0].'</li>';
        }
    
        $html.='
                        </ul>
                    </form>
                </fieldset>
            </div>';
    

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