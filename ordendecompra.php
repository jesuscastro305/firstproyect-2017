

<?php


	session_start();

if(isset($_SESSION['usuario'])) {
    
    
include("php/cn.php");
$conexion = Conectarse();

include('php/calcularFOLIOordendecompra.php');
  


date_default_timezone_set('America/Chihuahua'); 

$fecha = date('Y-m-d');

$consultaCliente = mysqli_query($conexion, "SELECT * FROM `1001010000` ORDER BY `cliente` ASC");
$consultaCliente2 = mysqli_query($conexion, "SELECT * FROM `1001010000` ORDER BY `cliente` ASC");
$consultarazonsocial = mysqli_query($conexion, "SELECT * FROM `11011111` ORDER BY `df_cliente` ASC");
$consultacuentasporpagar = mysqli_query($conexion, "SELECT * FROM `110011001` ORDER BY `cp_cliente` ASC ");
$numeroClientes = mysqli_num_rows($consultaCliente2);


$html ="
<!DOCTYPE html>
<html >
<head>
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <link rel='stylesheet' href='css/ordendecompra.css'>";
    
$html.="
    <script>";
    
$html.="
        function relacion1(){
        var sprod = document.getElementById('s__prod1').value;
        var spres = document.getElementById('s__pres1').value;
        
        switch (sprod){";


$produ = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.="
    case '".$P[0]."':
                ";
    $rel = mysqli_query($conexion, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
    $cadena = "";
    while($r = mysqli_fetch_row($rel)){
        
     
    $cadena .= " AND `presentacion` != '$r[0]'";   
//--------------------------------------------PRESENTACION HIDDEN--------------------------------------------
$html.="
                document.getElementById('".$r[0]."').hidden='';";
        
 
        }
   
       $cons = "SELECT `presentacion` FROM `tipopres` WHERE `presentacion` != '' $cadena";
    
 $reld = mysqli_query($conexion, $cons);
   while($rd = mysqli_fetch_row($reld)){       
        
       $html.="
               document.getElementById('".$rd[0]."').hidden='hidden';";
       }
    //------------------------------------------------CANTIDAD MAXIMA------------------------------------------------  
        $html.="
              
               switch(spres){";
       $con = "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'";
    
 $reldp = mysqli_query($conexion, $con);        
   while($rL = mysqli_fetch_row($reldp)){       
      
       
       $fisicas= mysqli_query($conexion, "SELECT `cantidad` FROM `productos` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]'");
       $fiss=0;
       while($pp =  mysqli_fetch_row($fisicas)){$fiss = $pp[0];}
       
       $comprometidas = mysqli_query($conexion, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]' ");
       $compp=0;
       while($cc =  mysqli_fetch_row($comprometidas)){$compp = $cc[0];}
       
       $html.="
               case '".$rL[0]."':
               
               document.getElementById('cantidad_1').setAttribute('max','".($fiss-$compp)."');
               
               break;";
       }
               
                $html.="
               }
    
                ";
//============================================================================================================================   \
    
        $html.="
                
                break;
    
                ";


}

$html.="
       }         
    }";
        
$html.="
        function relacion2(){
        var sprod = document.getElementById('s__prod2').value;
        var spres = document.getElementById('s__pres2').value;
        
        switch (sprod){";


$produ = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.="
    case '".$P[0]."':
                ";
    $rel = mysqli_query($conexion, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
    $cadena = "";
    while($r = mysqli_fetch_row($rel)){
        
     
    $cadena .= " AND `presentacion` != '$r[0]'";   
//--------------------------------------------PRESENTACION HIDDEN--------------------------------------------
$html.="
                document.getElementById('".$r[0]."2').hidden='';";
        
 
        }
   
       $cons = "SELECT `presentacion` FROM `tipopres` WHERE `presentacion` != '' $cadena";
    
 $reld = mysqli_query($conexion, $cons);
   while($rd = mysqli_fetch_row($reld)){       
        
       $html.="
               document.getElementById('".$rd[0]."2').hidden='hidden';";
       }
         //------------------------------------------------CANTIDAD MAXIMA------------------------------------------------  
        $html.="
              
               switch(spres){";
       $con = "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'";
    
 $reldp = mysqli_query($conexion, $con);        
   while($rL = mysqli_fetch_row($reldp)){       
      
       
       $fisicas= mysqli_query($conexion, "SELECT `cantidad` FROM `productos` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]'");
       $fiss=0;
       while($pp =  mysqli_fetch_row($fisicas)){$fiss = $pp[0];}
       
       $comprometidas = mysqli_query($conexion, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]' ");
       $compp=0;
       while($cc =  mysqli_fetch_row($comprometidas)){$compp = $cc[0];}
       
       $html.="
               case '".$rL[0]."':
               
               document.getElementById('cantidad_2').setAttribute('max','".($fiss-$compp)."');
               
               break;";
       }
               
                $html.="
               }
    
                ";
//============================================================================================================================   \
        $html.="
                
                break;
    
                ";


}

$html.="
       }         
    }";
        
$html.="
        function relacion3(){
        var sprod = document.getElementById('s__prod3').value;
        var spres = document.getElementById('s__pres3').value;
        
        switch (sprod){";


$produ = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.="
    case '".$P[0]."':
                ";
    $rel = mysqli_query($conexion, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
    $cadena = "";
    while($r = mysqli_fetch_row($rel)){
        
     
    $cadena .= " AND `presentacion` != '$r[0]'";   
//--------------------------------------------PRESENTACION HIDDEN--------------------------------------------
$html.="
                document.getElementById('".$r[0]."3').hidden='';";
        
 
        }
   
       $cons = "SELECT `presentacion` FROM `tipopres` WHERE `presentacion` != '' $cadena";
    
 $reld = mysqli_query($conexion, $cons);
   while($rd = mysqli_fetch_row($reld)){       
        
       $html.="
               document.getElementById('".$rd[0]."3').hidden='hidden';";
       }
            //------------------------------------------------CANTIDAD MAXIMA------------------------------------------------  
        $html.="
              
               switch(spres){";
       $con = "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'";
    
 $reldp = mysqli_query($conexion, $con);        
   while($rL = mysqli_fetch_row($reldp)){       
      
       
       $fisicas= mysqli_query($conexion, "SELECT `cantidad` FROM `productos` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]'");
       $fiss=0;
       while($pp =  mysqli_fetch_row($fisicas)){$fiss = $pp[0];}
       
       $comprometidas = mysqli_query($conexion, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]' ");
       $compp=0;
       while($cc =  mysqli_fetch_row($comprometidas)){$compp = $cc[0];}
       
       $html.="
               case '".$rL[0]."':
               
               document.getElementById('cantidad_3').setAttribute('max','".($fiss-$compp)."');
               
               break;";
       }
               
                $html.="
               }
    
                ";
//============================================================================================================================   \
        $html.="
                
                break;
    
                ";


}

$html.="
       }         
    }";
        
$html.="
        function relacion4(){
        var sprod = document.getElementById('s__prod4').value;
        var spres = document.getElementById('s__pres4').value;
        
        switch (sprod){";


$produ = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.="
    case '".$P[0]."':
                ";
    $rel = mysqli_query($conexion, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
    $cadena = "";
    while($r = mysqli_fetch_row($rel)){
        
     
    $cadena .= " AND `presentacion` != '$r[0]'";   
//--------------------------------------------PRESENTACION HIDDEN--------------------------------------------
$html.="
                document.getElementById('".$r[0]."4').hidden='';";
        
 
        }
   
       $cons = "SELECT `presentacion` FROM `tipopres` WHERE `presentacion` != '' $cadena";
    
 $reld = mysqli_query($conexion, $cons);
   while($rd = mysqli_fetch_row($reld)){       
        
       $html.="
               document.getElementById('".$rd[0]."4').hidden='hidden';";
       }
            //------------------------------------------------CANTIDAD MAXIMA------------------------------------------------  
        $html.="
              
               switch(spres){";
       $con = "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'";
    
 $reldp = mysqli_query($conexion, $con);        
   while($rL = mysqli_fetch_row($reldp)){       
      
       
       $fisicas= mysqli_query($conexion, "SELECT `cantidad` FROM `productos` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]'");
       $fiss=0;
       while($pp =  mysqli_fetch_row($fisicas)){$fiss = $pp[0];}
       
       $comprometidas = mysqli_query($conexion, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]' ");
       $compp=0;
       while($cc =  mysqli_fetch_row($comprometidas)){$compp = $cc[0];}
       
       $html.="
               case '".$rL[0]."':
               
               document.getElementById('cantidad_4').setAttribute('max','".($fiss-$compp)."');
               
               break;";
       }
               
                $html.="
               }
    
                ";
//============================================================================================================================   \
        $html.="
                
                break;
    
                ";


}

$html.="
       }         
    }";
        
$html.="
        function relacion5(){
        var sprod = document.getElementById('s__prod5').value;
        var spres = document.getElementById('s__pres5').value;
        
        switch (sprod){";


$produ = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto`");
while($P = mysqli_fetch_row($produ)){

$html.="
    case '".$P[0]."':
                ";
    $rel = mysqli_query($conexion, "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'");
    $cadena = "";
    while($r = mysqli_fetch_row($rel)){
        
     
    $cadena .= " AND `presentacion` != '$r[0]'";   
//--------------------------------------------PRESENTACION HIDDEN--------------------------------------------
$html.="
                document.getElementById('".$r[0]."5').hidden='';";
        
 
        }
   
       $cons = "SELECT `presentacion` FROM `tipopres` WHERE `presentacion` != '' $cadena";
    
 $reld = mysqli_query($conexion, $cons);
   while($rd = mysqli_fetch_row($reld)){       
        
       $html.="
               document.getElementById('".$rd[0]."5').hidden='hidden';";
       }
            //------------------------------------------------CANTIDAD MAXIMA------------------------------------------------  
        $html.="
              
               switch(spres){";
       $con = "SELECT  `relacion` FROM `relaciones` WHERE `producto` LIKE '$P[0]'";
    
 $reldp = mysqli_query($conexion, $con);        
   while($rL = mysqli_fetch_row($reldp)){       
      
       
       $fisicas= mysqli_query($conexion, "SELECT `cantidad` FROM `productos` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]'");
       $fiss=0;
       while($pp =  mysqli_fetch_row($fisicas)){$fiss = $pp[0];}
       
       $comprometidas = mysqli_query($conexion, "SELECT `comprometidos` FROM `00000010` WHERE `producto` LIKE '$P[0]' AND `presentacion` LIKE '$rL[0]' ");
       $compp=0;
       while($cc =  mysqli_fetch_row($comprometidas)){$compp = $cc[0];}
       
       $html.="
               case '".$rL[0]."':
               
               document.getElementById('cantidad_5').setAttribute('max','".($fiss-$compp)."');
               
               break;";
       }
               
                $html.="
               }
    
                ";
//============================================================================================================================   \
        $html.="
                
                break;
    
                ";


}

$html.="
       }         
    }";
    
$html.="";
    






$html.="

    </script>";

 $html.="   
    <style>
    
::-webkit-scrollbar {
      width: 10px;
background: rgba(0,0,0,.5);
}::-webkit-scrollbar-thumb {
      background-color: #000;
} 
    </style>
    <script type='text/javascript'>
    function igual(){
        var cb_0 = document.getElementById('cb_0').checked;
        
        switch(cb_0){
            case true:
                document.getElementById('embarcarA').value=document.getElementById('facturarA').value;
                document.getElementById('embarcarA').readOnly=true;
                break;
                
            case false:
                document.getElementById('embarcarA').readOnly=false;
                break;
        }
    }
    
    function razonn(){
     var select = document.getElementById('clientes').value;
    switch(select){
    
    ";



    for($x=0; $x < $numeroClientes ; $x++){
        $clientee= mysqli_fetch_row($consultaCliente2);
        $razonsocial= mysqli_fetch_row($consultarazonsocial);
        $pagos= mysqli_fetch_row($consultacuentasporpagar);
        
        $html.= "case '".$clientee[3]."': <!--".$clientee[0]."-->
        document.getElementById('labelcode').innerText='".$clientee[0]."';
        document.getElementById('razonsocial').value='".$razonsocial[1]."'; <!--".$razonsocial[13]."-->
        document.getElementById('vendedorr').value='".$pagos[2]."'; <!--".$pagos[7]."-->
        document.getElementById('credito').value='".$pagos[1]." Dias'; <!--".$pagos[7]."-->
        document.getElementById('facturarA').value='".$razonsocial[1]." \\n".$razonsocial[5]." \\n".$razonsocial[6]." ".$razonsocial[7]."-".$razonsocial[8]." \\n".$razonsocial[9].", ".$razonsocial[11].", C.P:".$razonsocial[4]." \\nR.F.C:".$razonsocial[2]." '; <!--".$razonsocial[13]."-->
        
        
        
        break;
        ";
    }
  
    
    

   $html.=" 
   }
   }
    function read2(){
    var cb_2 =document.getElementById('cb_2').checked;
    
    switch(cb_2){
    case false:
    document.getElementById('cantidad_2').readOnly=false;
    document.getElementById('descripcion_2').readOnly=false;
    document.getElementById('precio_2').readOnly=false;
    document.getElementById('descripcion_2').required='required';
    document.getElementById('precio_2').required='required';
    
    break;
    
    case true:
    
    
    document.getElementById('cantidad_2').readOnly=true;
    document.getElementById('descripcion_2').readOnly=true;
    document.getElementById('precio_2').readOnly=true;
    document.getElementById('descripcion_2').required='';
    document.getElementById('precio_2').required='';
    document.getElementById('cantidad_2').value='0';
    document.getElementById('precio_2').value='0';
    document.getElementById('total_2').value='0';
    break;
    
    }
    }
    function read3(){
    var cb_3 =document.getElementById('cb_3').checked;
    
    switch(cb_3){
    case false:
    document.getElementById('cantidad_3').readOnly=false;
    document.getElementById('descripcion_3').readOnly=false;
    document.getElementById('precio_3').readOnly=false;
    document.getElementById('descripcion_3').required='required';
    document.getElementById('precio_3').required='required';
    
    break;
    
    case true:
    
    
    document.getElementById('cantidad_3').readOnly=true;
    document.getElementById('descripcion_3').readOnly=true;
    document.getElementById('precio_3').readOnly=true;
    document.getElementById('descripcion_3').required='';
    document.getElementById('precio_3').required='';
    document.getElementById('cantidad_3').value='0';
    document.getElementById('precio_3').value='0';
    document.getElementById('total_3').value='0';
    break;
    
    }
    }
    function read4(){
    var cb_4 =document.getElementById('cb_4').checked;
    
    switch(cb_4){
    case false:
    document.getElementById('cantidad_4').readOnly=false;
    document.getElementById('descripcion_4').readOnly=false;
    document.getElementById('precio_4').readOnly=false;
    document.getElementById('descripcion_4').required='required';
    document.getElementById('precio_4').required='required';
    
    break;
    
    case true:
    
    
    document.getElementById('cantidad_4').readOnly=true;
    document.getElementById('descripcion_4').readOnly=true;
    document.getElementById('precio_4').readOnly=true;
    document.getElementById('descripcion_4').required='';
    document.getElementById('precio_4').required='';
    document.getElementById('cantidad_4').value='0';
    document.getElementById('precio_4').value='0';
    document.getElementById('total_4').value='0';
    break;
    
    }
    }
    function read5(){
    var cb_5 =document.getElementById('cb_5').checked;
    
    switch(cb_5){
    case false:
    document.getElementById('cantidad_5').readOnly=false;
    document.getElementById('descripcion_5').readOnly=false;
    document.getElementById('precio_5').readOnly=false;
    document.getElementById('descripcion_5').required='required';
    document.getElementById('precio_5').required='required';
    
    break;
    
    case true:
    
    
    document.getElementById('cantidad_5').readOnly=true;
    document.getElementById('descripcion_5').readOnly=true;
    document.getElementById('precio_5').readOnly=true;
    document.getElementById('descripcion_5').required='';
    document.getElementById('precio_5').required='';
    document.getElementById('cantidad_5').value='0';
    document.getElementById('precio_5').value='0';
    document.getElementById('total_5').value='0';
    break;
    
    }
    }

    function operaciones1(){
        var cant_1 =document.getElementById('cantidad_1').value;
        var precio_1 =document.getElementById('precio_1').value;
        document.getElementById('total_1').value=cant_1*precio_1;
        
    }
function operaciones2(){
        var cant_2 =document.getElementById('cantidad_2').value;
        var precio_2 =document.getElementById('precio_2').value;
        document.getElementById('total_2').value=cant_2*precio_2;
        
    }
function operaciones3(){
        var cant_3 =document.getElementById('cantidad_3').value;
        var precio_3 =document.getElementById('precio_3').value;
        document.getElementById('total_3').value=cant_3*precio_3;
        
    }
function operaciones4(){
        var cant_4 =document.getElementById('cantidad_4').value;
        var precio_4 =document.getElementById('precio_4').value;
        document.getElementById('total_4').value=cant_4*precio_4;
        
    }
function operaciones5(){
        var cant_5 =document.getElementById('cantidad_5').value;
        var precio_5 =document.getElementById('precio_5').value;
        document.getElementById('total_5').value=cant_5*precio_5;
        
    }
function ivaa(){
    var t_1=document.getElementById('total_1').value;
    var t_2=document.getElementById('total_2').value;
    var t_3=document.getElementById('total_3').value;
    var t_4=document.getElementById('total_4').value;
    var t_5=document.getElementById('total_5').value;
    document.getElementById('subtotal').value=(parseInt(t_1)+parseInt(t_2)+parseInt(t_3)+parseInt(t_4)+parseInt(t_5));
    document.getElementById('iva').value=(parseInt(t_1)+parseInt(t_2)+parseInt(t_3)+parseInt(t_4)+parseInt(t_5))*parseFloat(.16);
    
}
function total__final(){
    var t_11=document.getElementById('total_1').value;
    var t_22=document.getElementById('total_2').value;
    var t_33=document.getElementById('total_3').value;
    var t_44=document.getElementById('total_4').value;
    var t_55=document.getElementById('total_5').value;
    var iva=document.getElementById('iva').value;
document.getElementById('total_final').value=(parseInt(t_11)+parseInt(t_22)+parseInt(t_33)+parseInt(t_44)+parseInt(t_55))+parseFloat(iva);
    
}




    
    
   
    

    </script>";

$html.="
</head>

<body>
   
   <div class='general'>
       <form action='php/registroorden.php' method='post'>
       <fieldset class='cuadro__cont'>
       <legend>Orden de Compra</legend>
       <fieldset class='cuadro__cont'>
           <legend>Informacion del cliente</legend>
           <table>
               <tr>
                   <td>Cliente:</td>
                   <td colspan='2'>
                   <select name='clientes' id='clientes' onclick='return razonn();' style='cursor: pointer;' autofocus>";
                        while ($row = mysqli_fetch_row($consultaCliente)){
                           $html.= "<option value='".$row[3]."'>".$row[3]."</option>";
                       }
 $html.=" 
                       
                            
                      
                       </select><label id='labelcode'></label>
                   </td>
                   <td></td>
                   <td></td>
                   <td>Folio:</td>
                   <td><input type='text' name='folio' value=".$folio." style='color:red; text-align:center; width: 90px;' readonly></td>
               </tr>";
                

               $html.="
               <tr>
                   <td>Razon social:</td>
                   <td colspan='3'><input type='text' name='razon' id='razonsocial' readonly></td>
                   <td></td>
                   
                   <td>Fecha: </td>
                   <td><input type='text' value=".$fecha." name='fecha' style='color:red; text-align:center; width: 90px;' readonly></td>
                   
               </tr>
               <tr>
                   <td>Encargado de compras:</td>
                   <td colspan='3'><input type='text' name='vendedor' id='vendedorr' required readonly></td>
                   <td></td>
                   <td>Estimado a entregar</td>
                   <td><input type='date' min='' name='date'></td>
               </tr>
               <tr>
                   <td>Condiciones de pago:</td>
                   <td colspan='3'><input type='text' name='condiciones' id='credito' placeholder='90 Dias' readonly></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                   <td>Facturar a:</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td>Embarcar a:</td>
                   <td><input type='checkbox' name='cb0' id='cb_0'  onclick='return igual();' ><label for='cb_0' class='label__cb'  onclick='return igual();' style='cursor: pointer;'>Igual a 'Facturar a:' </label></td>
               </tr>
               <tr>
                   <td colspan='4'  ><textarea name='facturar' id='facturarA' style='width: 100%; height: 115px;' onchange='return igual();'  onkeyup='return igual();' required ></textarea></td>
                   <td></td>
                   
                   <td colspan='3' ><textarea name='embarcar' id='embarcarA' style='width: 100%; height: 115px;' readonly required ></textarea></td>
                   
               </tr>
           </table>
       </fieldset>
       <fieldset class='cuadro__cont'>
           <legend>Productos solicitados</legend>
           <table>
              <tr>
                 <td></td>
                  <th>Cantidad</th>
                  <th>Articulo</th>
                  <th>Presentaci&oacute;n</th>
                  <th>Descripcion</th>
                  <th>Precio unitario</th>
                  <th>Total</th>
              </tr>
               <tr>
                   <td></td>
                   <td class='prod_sol'><input type='number' name='cantidad1' id='cantidad_1' min='0'  style='width:50px;'  value='0' onclick='return operaciones1(), ivaa(), total__final();' onkeyup='return operaciones1(), ivaa(), total__final();' ></td>
                   <td class='prod_sol'>
                      <select name='s__prod1' id='s__prod1' style='cursor: pointer;' onclick='return relacion1();'>
                             <option value=''>Seleccione</option>";


$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.="
                            <option value='".$rowS[0]."'>".$rowS[0]."</option>";
}


$html.="
                            
                        </select>  
                   </td>
                   <td style='text-align:center;'>
                      <select name='s__pres1' id='s__pres1' style='cursor: pointer; ' onclick='return relacion1();'>
                             <option value=''>Seleccione</option>";




$presS = mysqli_query($conexion, 'SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC');

while($rowpS = mysqli_fetch_row($presS)){

$html.="
                            <option value='".$rowpS[0]."' id='".$rowpS[0]."' hidden>".$rowpS[0]."</option>";
}

$html.="
                            
                        </select>  
                   </td>
                   <td class='prod_sol'><input type='text' name='descripcion1' id='descripcion_1' required></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' name='precio1' value='0' id='precio_1' style='width:80px' onclick='return operaciones1(), ivaa(), total__final();' onkeyup='return operaciones1(), ivaa(), total__final();' required></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' name='total1' id='total_1'  value='0' style='width:80px'  readonly></td>
               </tr>
               <tr>
                   <td style='text-align: right;'><input type='checkbox' name='cb2' id='cb_2'><label for='cb_2' class='label__cb' onclick='return read2();' style='cursor: pointer;'></label></td>
                   <td class='prod_sol'><input type='number' id='cantidad_2' name='cantidad2' min='0' style='width:50px;' value='0' onclick='return operaciones2(), ivaa(), total__final();' onkeyup='return operaciones2(), ivaa(), total__final();' readonly></td>
                   <td class='prod_sol'>
                       <select name='s__prod2' id='s__prod2' style='cursor: pointer;'  onclick='return relacion2();' >
                             <option value=''>Seleccione</option>";


$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.="
                            <option value='".$rowS[0]."'>".$rowS[0]."</option>";
}


$html.="
                        </select> 
                   </td>
                   <td style='text-align:center;'>
                       <select name='s__pres2' id='s__pres2' style='cursor: pointer; ' onclick='return relacion2();' >
                             <option value=''>Seleccione</option>";




$presS = mysqli_query($conexion, 'SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC');

while($rowpS = mysqli_fetch_row($presS)){

$html.="
                            <option value='".$rowpS[0]."' id='".$rowpS[0]."2' hidden>".$rowpS[0]."</option>";
}

$html.="
                            
                        </select> 
                   </td>
                   <td class='prod_sol'><input type='text' id='descripcion_2' name='descripcion2' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='precio_2' name='precio2' value='0' onclick='return operaciones2(), ivaa(), total__final();' onkeyup='return operaciones2(), ivaa(), total__final();' style='width:80px' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='total_2' name='total2' value='0'  style='width:80px' readonly></td>
               </tr>
               <tr>
                   <td style='text-align: right;'><input type='checkbox' name='cb3' id='cb_3'><label for='cb_3' class='label__cb' onclick='return read3();' style='cursor: pointer;'></label></td>
                   <td class='prod_sol'><input type='number' id='cantidad_3' name='cantidad3' value='0' onclick='return operaciones3(), ivaa(), total__final();' onkeyup='return operaciones3(), ivaa(), total__final();' min='0' style='width:50px;' readonly></td>
                   <td class='prod_sol'>
                       <select name='s__prod3' id='s__prod3' style='cursor: pointer;' onclick='return relacion3();' >
                             <option value=''>Seleccione</option>";


$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.="
                            <option value='".$rowS[0]."'>".$rowS[0]."</option>";
}


$html.="
                            
                        </select>  
                   </td>
                   <td style='text-align:center;'>
                       <select name='s__pres3' id='s__pres3' style='cursor: pointer; ' onclick='return relacion3();'>
                             <option value=''>Seleccione</option>";




$presS = mysqli_query($conexion, 'SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC');

while($rowpS = mysqli_fetch_row($presS)){

$html.="
                            <option value='".$rowpS[0]."' id='".$rowpS[0]."3' hidden>".$rowpS[0]."</option>";
}

$html.="
                            
                        </select> 
                   </td>
                   <td class='prod_sol'><input type='text' id='descripcion_3' name='descripcion3' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='precio_3' name='precio3' value='0' onclick='return operaciones3(), ivaa(), total__final();' onkeyup='return operaciones3(), ivaa(), total__final();' style='width:80px' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='total_3' name='total3' value='0'  style='width:80px' readonly></td>
               </tr>
               <tr>
                   <td style='text-align: right;'><input type='checkbox' name='cb4' id='cb_4'><label for='cb_4' class='label__cb' onclick='return read4();' style='cursor: pointer;'></label></td>
                   <td class='prod_sol'><input type='number' id='cantidad_4' name='cantidad4' value='0' onclick='return operaciones4(), ivaa(), total__final();' onkeyup='return operaciones4(), ivaa(), total__final();' min='0' style='width:50px;' readonly></td>
                   <td class='prod_sol'>
                       <select name='s__prod4' id='s__prod4' style='cursor: pointer;' onclick='return relacion4();' >
                             <option value=''>Seleccione</option>";


$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.="
                            <option value='".$rowS[0]."'>".$rowS[0]."</option>";
}


$html.="
                            
                        </select> 
                   </td>
                   <td style='text-align:center;'>
                       <select name='s__pres4' id='s__pres4' style='cursor: pointer; ' onclick='return relacion4();'>
                             <option value=''>Seleccione</option>";




$presS = mysqli_query($conexion, 'SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC');

while($rowpS = mysqli_fetch_row($presS)){

$html.="
                            <option value='".$rowpS[0]."' id='".$rowpS[0]."4' hidden>".$rowpS[0]."</option>";
}

$html.="
                            
                        </select> 
                   </td>
                   <td class='prod_sol'><input type='text' id='descripcion_4' name='descripcion4' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='precio_4' name='precio4' value='0' onclick='return operaciones4(), ivaa(), total__final();' onkeyup='return operaciones4(), ivaa(), total__final();' style='width:80px' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='total_4' name='total4' value='0'  style='width:80px' readonly></td>
               </tr>
               <tr>
                   <td style='text-align: right;'><input type='checkbox' name='cb5' id='cb_5'><label for='cb_5' class='label__cb' onclick='return read5();' style='cursor: pointer;'></label></td>
                   <td class='prod_sol'><input type='number' id='cantidad_5' name='cantidad5' value='0' onclick='return operaciones5(), ivaa(), total__final();' onkeyup='return operaciones5(), ivaa(), total__final();' min='0' style='width:50px;' readonly></td>
                   <td class='prod_sol'>
                       <select name='s__prod5' id='s__prod5' style='cursor: pointer;'  onclick='return relacion5();'>
                             <option value=''>Seleccione</option>";


$productosS = mysqli_query($conexion, "SELECT `producto` FROM `tipoprod` ORDER BY `producto` ASC");

while($rowS = mysqli_fetch_row($productosS)){

$html.="
                            <option value='".$rowS[0]."'>".$rowS[0]."</option>";
}


$html.="
                            
                        </select> 
                   </td>
                   <td style='text-align:center;'>
                       <select name='s__pres5' id='s__pres5' style='cursor: pointer; ' onclick='return relacion5();'>
                             <option value=''>Seleccione</option>";




$presS = mysqli_query($conexion, 'SELECT `presentacion` FROM `tipopres` ORDER BY `presentacion` ASC');

while($rowpS = mysqli_fetch_row($presS)){

$html.="
                            <option value='".$rowpS[0]."' id='".$rowpS[0]."5' hidden>".$rowpS[0]."</option>";
}

$html.="
                            
                        </select> 
                   </td>
                   <td class='prod_sol'><input type='text' id='descripcion_5' name='descripcion5' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='precio_5' name='precio5' value='0' onclick='return operaciones5(), ivaa(), total__final();'  onkeyup='return operaciones5(), ivaa(), total__final();' style='width:80px' readonly></td>
                   <td class='prod_sol'><label for=''>$</label><input type='number' id='total_5' name='total5' value='0'  style='width:80px' readonly></td>
               </tr>
               <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   
                   <th style='text-align: right'>Subtotal:</th>
                   <td><label for=''>$</label><input type='number' id='subtotal' name='subtotal' value='0' style='width:150px' readonly></td>
               </tr>
               <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   
                   <th style='text-align: right'>IVA:</th>
                   <td><label for=''>$</label><input type='number' id='iva' name='IVA' value='0' style='width:150px' required readonly></td>
               </tr>
               <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   
                   <th style='text-align: right'>Total:</th>
                   <td><label for=''>$</label><input type='number' id='total_final' name='totalfinal' value='0' style='width:150px' readonly></td>
               </tr>
           </table>
       </fieldset>
       <input type='submit' value='Registrar Orden' >
       </fieldset>
       
       </form>
   </div>
    
</body>
</html>";
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($conexion, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '6'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
    
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>