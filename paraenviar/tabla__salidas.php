<?php

include('../php/variablesSALIDAS.php');
echo "FECHA: ".$fecha;
echo "<br/>";
echo "FOLIO: ".$folio;
echo "<br/>";
echo "ENTREGADO A: ".$entregado;
echo "<br/>";
echo "CONCEPTO SALIDA: ".$salida;
echo "<br/>";
echo "<br/>";


   echo "<table border>";
   echo "<tr>";
   echo "<th>CANTIDAD</th>";
   echo "<th>PRESENTACION</th>";
   echo "<th>PRODUCTO</th>";
   echo     "</tr>";


for($j = 1; $j <= 9; $j++){
    if($_POST['cb'.$j] ?? ""){
        
       echo  "<tr>";
         echo  "<td>".$_POST['cantidad'.$j] ?? ""."</td>";
         echo  "<td>".$_POST['s__pres'.$j] ?? "" ."</td>";
         echo  "<td>".$_POST['s__prod'.$j] ?? "" ."</td>";
         echo  "</tr>"; 
        
    }
         
    
}

echo"</table>";



?>