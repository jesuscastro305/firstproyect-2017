<?php

include('php/cn.php');
$cn = Conectarse();
	session_start();

if(isset($_SESSION['usuario'])) {




                        $FOLIO = mysqli_query($cn, "SELECT MAX(`folio`) FROM `10010`");
                            
                        if(!$FOLIO){
                            echo "algo anda mal";
                        }
                        else{
                          
                            
                           while($row = mysqli_fetch_row($FOLIO)) {
                               $depende = $row[0];
                               
                               for($fi=0; $depende >= $fi ; $fi++ );
                               
                               
                           }
                            
                            
    

                        }

$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>';
$html.='
    <script>
        function ve(){
    
    var div1 = document.getElementById("p1");
    var div2 = document.getElementById("p2");
    var div3 = document.getElementById("p3");
    var div4 = document.getElementById("p4");
    var csal = document.getElementById("c_sal");
    
    
    if(csal.value == "ventas" || csal.value == "Ventas" || csal.value == "VENTAS" || csal.value == "venta" || csal.value == "Venta" || csal.value == "VENTA"  ){
        
       div1.hidden="";
       div2.hidden="";
       div3.hidden="";
       div4.hidden=""; 
    }
    else{
       div1.hidden="hidden";
       div2.hidden="hidden";
       div3.hidden="hidden";
       div4.hidden="hidden"; 
    }
}
        
        function relacion(){';
for($i=1; $i<5; $i++){

$html.='
        var sprod'.$i.' = document.getElementById("s__prod'.$i.'").value;
        var spres'.$i.' = document.getElementById("s__pres'.$i.'").value;';

}
for($i=1; $i<5; $i++){
$html.='
        
        switch (sprod'.$i.'){';
$produ = mysqli_query($cn, "SELECT `producto`, `descripcion`, `unidadmedida` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.='
    case "'.$P[0].'":
              
                ';
    $rel = mysqli_query($cn, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
    $cadena = "";
    while($r = mysqli_fetch_row($rel)){
        
     
    $cadena .= " AND `presentacion` != '$r[0]'";   
//--------------------------------------------PRESENTACION HIDDEN--------------------------------------------
$html.='
                document.getElementById("'.$r[0].''.$i.'").hidden="";';
        
 
        }
   
       $cons = "SELECT `presentacion` FROM `tipopres` WHERE `presentacion` != '' $cadena";
    //echo $cons;
    //echo "<br/>";
 $reld = mysqli_query($cn, $cons);
   while($rd = mysqli_fetch_row($reld)){       
        
       $html.='
               document.getElementById("'.$rd[0].''.$i.'").hidden="hidden";';
       }
        $html.='
              
               switch(spres'.$i.'){';
       $con = "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'";
    
 $reldp = mysqli_query($cn, $con);        
   while($rL = mysqli_fetch_row($reldp)){       
      
       
       $fisicas= mysqli_query($cn, "SELECT `cantidad` FROM `productos` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]'");
       $fiss=0;
       while($pp =  mysqli_fetch_row($fisicas)){$fiss = $pp[0];}
       
       $comprometidas = mysqli_query($cn, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]' ");
       $compp=0;
       while($cc =  mysqli_fetch_row($comprometidas)){$compp = $cc[0];}
       
       $html.='
               case "'.$rL[0].'":
               
               document.getElementById("cantidad_'.$i.'").setAttribute("max","'.($fiss-$compp).'");
               
               break;';
       }
               
                $html.='
               }
    
                ';
        $html.='
                
                break;
    
                ';


}

$html.='
       } ';
}
    $html.='
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
        input[type=date], input[type=text]{
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
            width: 45%;
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
        input.cantidad{
            width: 100px;
        }
        div.infprod{
            margin-top: 5px;
            padding: 5px;
            border:1px solid rgba(100,100,100,0.9);
        }
        div.titind{
            display: none;
            color:#43BE6E;
            font-size: 20px;
        }
        @media(min-width:600px){
            div.titind{
                display: inline-block;
                width: 30%
            }
            div.fechadiv, input#folio, input[type=text]{
                display: inline-block;
                width: 45%;
            }
            div.infnota, div.infnotasup{
                margin-left: auto;
                margin-right: auto;
                max-width: 800px;
            }
            div.infprod, div.titulos, div.datoaut{
                margin-left: auto;
                margin-right: auto;
                max-width: 800px;
            }
            select{
                width: 30%
            }
            div#canti{
                width: 100px;
            }
            div.infprod{
            border:none;
        }
        }
    </style>
</head>
<body>
    <div class="general">
        <div class="form">
            <form action="php/regsalidas.php" method="post">
                <div class="nsalida">
                    <fieldset>
                        <legend>Nota de salida</legend>
                        <div class="infnotasup">
                        <div class="fechadiv">
                            <fieldset class="fecha">
                                <legend>Fecha</legend>
                        <input type="date" name="fecha" autofocus>
                            </fieldset>
                        </div>
                        <input type="number" id="folio" name="folio" style="color: red;" value="'.$fi.'" min="0" placeholder="FOLIO" readonly required>
                        </div>
                        <div class="infnota">
                        <input type="text" name="carguese" placeholder="Carguese a:" required>
                        <input type="text" name="entregado" placeholder="Entregado a:" required>
                        <input type="text" id="c_sal" name="salida" placeholder="Concepto de salida" onchange="return ve();" onkeyup="return ve();" required></div>
                    </fieldset>
                </div>
                <div class="infsalida">
                    <fieldset>
                        <legend>Informaci&oacute;n de salida</legend>
                        <div class="titulos">
                            <div class="titind">Producto</div>
                            <div class="titind">Presentacion</div>
                            <div class="titind" id="canti">Cantidad</div>
                        </div>
                        <div class="infprod">
                            
                            <select name="s_prod1" id="s__prod1" onclick="return relacion();">
                        <option value="">Producto</option>';


$productosS1 = mysqli_query($cn, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS1 = mysqli_fetch_row($productosS1)){

$html.='
                            <option value="'.$rowS1[0].'" id="'.$rowS1[0].'1">'.$rowS1[0].'</option>';
}


$html.='
                                
                            </select>
                            <select name="s_pres1" id="s__pres1" onclick="return relacion();">
                        <option value="">Presentacion</option>';




$presS1 = mysqli_query($cn, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowpS1 = mysqli_fetch_row($presS1)){

$html.='
                            <option value="'.$rowpS1[0].'" id="'.$rowpS1[0].'1" hidden>'.$rowpS1[0].'</option>';
}

$html.='
                            </select>
                            <input type="number" min="0" value="0" class="cantidad" id="cantidad_1" name="cantidad1" placeholder="Cantidad" required>
                            <div id="p1" hidden ><input class="cantidad" type="number" name="precio1" placeholder="$" ></div>
                        </div>
                        <div class="infprod">
                            
                            <select name="s_prod2" id="s__prod2" onclick="return relacion();">
                        <option value="">Producto</option>';


$productosS2 = mysqli_query($cn, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS2 = mysqli_fetch_row($productosS2)){

$html.='
                            <option value="'.$rowS2[0].'" id="'.$rowS2[0].'2">'.$rowS2[0].'</option>';
}


$html.='
                                
                            </select>
                            <select name="s_pres2" id="s__pres2" onclick="return relacion();">
                        <option value="">Presentacion</option>';




$presS2 = mysqli_query($cn, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowpS2 = mysqli_fetch_row($presS2)){

$html.='
                            <option value="'.$rowpS2[0].'" id="'.$rowpS2[0].'2" hidden>'.$rowpS2[0].'</option>';
}

$html.='
                            </select>
                            <input type="number" min="0" value="0"class="cantidad" id="cantidad_2" name="cantidad2" placeholder="Cantidad" required>
                                <div id="p2" hidden><input class="cantidad" type="number" name="precio2" placeholder="$" ></div>
                        </div>
                        <div class="infprod">
                            
                            <select name="s_prod3" id="s__prod3" onclick="return relacion();">
                        <option value="">Producto</option>';


$productosS3 = mysqli_query($cn, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS3 = mysqli_fetch_row($productosS3)){

$html.='
                            <option value="'.$rowS3[0].'" id="'.$rowS3[0].'3">'.$rowS3[0].'</option>';
}


$html.='
                                
                            </select>
                            <select name="s_pres3" id="s__pres3" onclick="return relacion();">
                        <option value="">Presentacion</option>';




$presS3 = mysqli_query($cn, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowpS3 = mysqli_fetch_row($presS3)){

$html.='
                            <option value="'.$rowpS3[0].'" id="'.$rowpS3[0].'3" hidden>'.$rowpS3[0].'</option>';
}

$html.='
                            </select>
                            <input type="number" min="0" value="0"class="cantidad" id="cantidad_3" name="cantidad3" placeholder="Cantidad" required>
                            <div id="p3" hidden ><input class="cantidad" type="number" name="precio3" placeholder="$" ></div>
                        </div>
                        <div class="infprod">
                            
                            <select name="s_prod4" id="s__prod4" onclick="return relacion();">
                        <option value="">Producto</option>';


$productosS4 = mysqli_query($cn, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS4 = mysqli_fetch_row($productosS4)){

$html.='
                            <option value="'.$rowS4[0].'" id="'.$rowS4[0].'4">'.$rowS4[0].'</option>';
}


$html.='
                                
                            </select>
                            <select name="s_pres4" id="s__pres4" onclick="return relacion();">
                        <option value="">Presentacion</option>';




$presS4 = mysqli_query($cn, "SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC");

while($rowpS4 = mysqli_fetch_row($presS4)){

$html.='
                            <option value="'.$rowpS4[0].'" id="'.$rowpS4[0].'4" hidden>'.$rowpS4[0].'</option>';
}

$html.='
                            </select>
                            <input type="number" min="0" value="0"class="cantidad" id="cantidad_4" name="cantidad4" placeholder="Cantidad" required>
                            <div id="p4" hidden ><input class="cantidad" type="number" name="precio4" placeholder="$" ></div>
                        </div>
                        
                        
                        <div class="datoaut">
                        <input type="text" name="entrego" placeholder="Entreg&oacute;:" required>
                        <input type="text" name="autorizo" placeholder="Autoriz&oacute;:" required>
                        </div>
                        <div class="regsal"><input type="submit" value="Registrar"></div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</body>
</html>';

$uss = $_SESSION['usuario'];
    $per = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '3'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}

}else{
	echo '<script> window.location="index.php"; </script>';
}
?>