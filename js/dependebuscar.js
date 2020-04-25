function depende(){ 
            
             
                var prod = document.getElementById("s__prod").value;
               
        if(prod=="QBD-10-D" || prod=="QBD-20" || prod=="QBD-25" || prod=="QBD-31" || prod=="QBD-26" || prod=="QBD-08" || prod=="QBD-09" || prod=="QBD-28"){
                      document.getElementById("Galon").hidden="";
                      document.getElementById("Galon con atomizador").hidden="hidden";
                      document.getElementById("Galon industrial").hidden="hidden";
                      document.getElementById("Cubeta-4").hidden="hidden";
                      document.getElementById("Cubeta-20").hidden="hidden";
                      document.getElementById("Bote").hidden="hidden";
                      document.getElementById("Porron").hidden="";
                      document.getElementById("Porron industrial").hidden="hidden";
                      document.getElementById("Tambo").hidden="hidden";
                  }
                    else if(prod=="QBD-10"){
                        
                        document.getElementById("Galon").hidden="";
                      document.getElementById("Galon con atomizador").hidden="hidden";
                      document.getElementById("Galon industrial").hidden="";
                      document.getElementById("Cubeta-4").hidden="hidden";
                      document.getElementById("Cubeta-20").hidden="hidden";
                      document.getElementById("Bote").hidden="hidden";
                      document.getElementById("Porron").hidden="";
                      document.getElementById("Porron industrial").hidden="";
                      document.getElementById("Tambo").hidden="";
                  }
                if(prod=="QBD-81"){
                    
                    document.getElementById("Galon").hidden="hidden";
                      document.getElementById("Galon con atomizador").hidden="";
                    document.getElementById("Galon con atomizador").select="select";
                      document.getElementById("Galon industrial").hidden="hidden";
                      document.getElementById("Cubeta-4").hidden="";
                      document.getElementById("Cubeta-20").hidden="";
                      document.getElementById("Bote").hidden="";
                      document.getElementById("Porron").hidden="hidden";
                      document.getElementById("Porron industrial").hidden="hidden";
                      document.getElementById("Tambo").hidden="hidden";
                }
           }