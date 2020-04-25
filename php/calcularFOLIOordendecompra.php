<?php

                        $FOLIO = mysqli_query($conexion, "SELECT MAX(`folio`) FROM `111010`");
                            
                        if(!$FOLIO){
                            echo "algo anda mal";
                        }
                        else{
                          
                            
                           while($row = mysqli_fetch_row($FOLIO)) {
                               $depende = $row[0];
                               
                               for($folio=0; $depende >= $folio ; $folio++ );
                               
                               
                           }
                            
                            
                            
    

                        }
                           
                        
                        ?>
                        
                       