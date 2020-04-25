<?php
session_start();

if(isset($_SESSION['usuario'])) {?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/salidas.css">\
        
    <style>
    
::-webkit-scrollbar {
      width: 10px;
background: rgba(0,0,0,.5);
}::-webkit-scrollbar-thumb {
      background-color: #000;
} 
    </style>
    </head>
    <body>
        <div class="general">
           <form action="php/regsalidas.php" method="post">
            <fieldset class="tabla__cont">
                <legend class="titulo__cuadro">Nota de salida</legend>
                <table>
                    <tr>
                        
                        <td class=txt__label><label for="fecha">Fecha:</label></td>
                        <td><input id="fechaid" type="date" name="fecha"  required></td>
                        <td class=txt__label><label for="folio" >Folio:</label></td>
                        <td><input type="text" id="folioid" name="folio" readonly value="<?php include('php/calcularFOLIO.php'); ?>"></td>
                    </tr>
                    <tr>
                        <td class=txt__label><label for="entregado">Entregado a:</label></td>
                        <td colspan="2"><input type="text" name="entregado" required></td>
                        <td class=txt__label><label for="salida">Concepto salida:</label></td>
                        <td colspan="2"><input type="text" name="salida" required></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                </table>
            </fieldset>
            <fieldset class="general__inf">
                <legend class="titulo__cuadro">Informacion de salida</legend>
                <center>
                <table  class="inf__sal">
                    <tr>
                       <th></th>
                        <th><label for="">CANTIDAD</label></th>
                        <th><label for="">PRESENTACION</label></th>
                        <th><label for="">PRODUCTO</label></th>
                        
                    </tr>
                    <tr>
                       <td><input type="checkbox" name="cb1" id="cb_1" checked><label for="cb_1" class="label__cb"></label></td>
                        <td class="tr__1"><input type="number" min="0" name="cantidad1" required></td>
                        <td class="tr__1">
                        <select name="s__pres1" id="s__pres1"  >
                            <option value="Galon">Gal&oacute;n</option>
                            <option value="Galon con atomizador">Gal&oacute;n con atomizador</option>
                            <option value="Galon industrial">Gal&oacute;n industrial</option>
                            <option value="Cubeta-4">Cubeta 4kg</option>
                            <option value="Cubeta-20">Cubeta 20kg</option>
                            <option value="Bote">Bote</option>
                            <option value="Porron">Porr&oacute;n</option>
                            <option value="Porron industrial">Porr&oacute;n industrial</option>
                            <option value="Tambo"  >Tambo</option>
                            
                        </select>  
                        </td>
                        <td class="tr__1">
                        <select name="s__prod1" id="s__prod1"  >
                             <option value="QBD-08">QBD-08</option>
                            <option value="QBD-09">QBD-09</option>
                            <option value="QBD-10">QBD-10</option>
                            <option value="QBD-10-D">QBD-10-D</option>
                            <option value="QBD-20">QBD-20</option>
                            <option value="QBD-25">QBD-25</option>
                            <option value="QBD-26">QBD-26</option>
                            <option value="QBD-28">QBD-28</option>
                            <option value="QBD-31">QBD-31</option>
                            <option value="QBD-81">QBD-81</option>
                            
                        </select> 
                        </td>
                        
                    </tr>
                    <tr>
                       <td><input type="checkbox" name="cb2" id="cb_2"><label for="cb_2" class="label__cb"></label></td>
                        <td class="tr__2"><input type="number" min="0" name="cantidad2"></td>
                        <td class="tr__2">
                        <select name="s__pres2" id="s__pres2"  >
                            <option value="Galon">Gal&oacute;n</option>
                            <option value="Galon con atomizador">Gal&oacute;n con atomizador</option>
                            <option value="Galon industrial">Gal&oacute;n industrial</option>
                            <option value="Cubeta-4">Cubeta 4kg</option>
                            <option value="Cubeta-20">Cubeta 20kg</option>
                            <option value="Bote">Bote</option>
                            <option value="Porron">Porr&oacute;n</option>
                            <option value="Porron industrial">Porr&oacute;n industrial</option>
                            <option value="Tambo"  >Tambo</option>
                            
                        </select>  
                        </td>
                        <td class="tr__2">
                        <select name="s__prod2" id="s__prod2"  >
                             <option value="QBD-08">QBD-08</option>
                            <option value="QBD-09">QBD-09</option>
                            <option value="QBD-10">QBD-10</option>
                            <option value="QBD-10-D">QBD-10-D</option>
                            <option value="QBD-20">QBD-20</option>
                            <option value="QBD-25">QBD-25</option>
                            <option value="QBD-26">QBD-26</option>
                            <option value="QBD-28">QBD-28</option>
                            <option value="QBD-31">QBD-31</option>
                            <option value="QBD-81">QBD-81</option>
                            
                        </select> 
                        </td>
                        
                    </tr>
                    <tr>
                       <td><input type="checkbox" name="cb3" id="cb_3"><label for="cb_3" class="label__cb"></label></td>
                        <td class="tr__3"><input type="number" min="0" name="cantidad3"></td>
                        <td class="tr__3">
                        <select name="s__pres3" id="s__pres3"  >
                            <option value="Galon">Gal&oacute;n</option>
                            <option value="Galon con atomizador">Gal&oacute;n con atomizador</option>
                            <option value="Galon industrial">Gal&oacute;n industrial</option>
                            <option value="Cubeta-4">Cubeta 4kg</option>
                            <option value="Cubeta-20">Cubeta 20kg</option>
                            <option value="Bote">Bote</option>
                            <option value="Porron">Porr&oacute;n</option>
                            <option value="Porron industrial">Porr&oacute;n industrial</option>
                            <option value="Tambo"  >Tambo</option>
                            
                        </select>  
                        </td>
                        <td class="tr__3">
                        <select name="s__prod3" id="s__prod3"  >
                             <option value="QBD-08">QBD-08</option>
                            <option value="QBD-09">QBD-09</option>
                            <option value="QBD-10">QBD-10</option>
                            <option value="QBD-10-D">QBD-10-D</option>
                            <option value="QBD-20">QBD-20</option>
                            <option value="QBD-25">QBD-25</option>
                            <option value="QBD-26">QBD-26</option>
                            <option value="QBD-28">QBD-28</option>
                            <option value="QBD-31">QBD-31</option>
                            <option value="QBD-81">QBD-81</option>
                            
                        </select> 
                        </td>
                        
                    </tr>
                    <tr>
                       <td><input type="checkbox" name="cb4" id="cb_4"><label for="cb_4" class="label__cb"></label></td>
                        <td class="tr__4"><input type="number" min="0" name="cantidad4"></td>
                        <td class="tr__4">
                        <select name="s__pres4" id="s__pres4"  >
                            <option value="Galon">Gal&oacute;n</option>
                            <option value="Galon con atomizador">Gal&oacute;n con atomizador</option>
                            <option value="Galon industrial">Gal&oacute;n industrial</option>
                            <option value="Cubeta-4">Cubeta 4kg</option>
                            <option value="Cubeta-20">Cubeta 20kg</option>
                            <option value="Bote">Bote</option>
                            <option value="Porron">Porr&oacute;n</option>
                            <option value="Porron industrial">Porr&oacute;n industrial</option>
                            <option value="Tambo"  >Tambo</option>
                            
                        </select>  
                        </td>
                        <td class="tr__4">
                        <select name="s__prod4" id="s__prod4"  >
                             <option value="QBD-08">QBD-08</option>
                            <option value="QBD-09">QBD-09</option>
                            <option value="QBD-10">QBD-10</option>
                            <option value="QBD-10-D">QBD-10-D</option>
                            <option value="QBD-20">QBD-20</option>
                            <option value="QBD-25">QBD-25</option>
                            <option value="QBD-26">QBD-26</option>
                            <option value="QBD-28">QBD-28</option>
                            <option value="QBD-31">QBD-31</option>
                            <option value="QBD-81">QBD-81</option>
                            
                        </select> 
                        </td>
                        
                    </tr>
                   
                </table>
                </center>
            </fieldset>
            <fieldset class="tabla__cont">
              <legend></legend>
               <table> 
                <tr>
                    <td class="txt__label"><label for="">Autoriz&oacute;:</label></td>
                    <td colspan="2"><input type="text" name="entrego" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="txt__label"><label for="">Entreg&oacute;:</label></td>
                    <td colspan="2"><input type="text" name="autorizo" required></td>
                    <td></td>
                </tr>
                </table>
            </fieldset>
            <input type="submit" value="Registrar">
            </form>
        </div>
        
        
    </body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>