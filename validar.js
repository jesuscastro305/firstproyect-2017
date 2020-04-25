

function validar()
{
    var usr, pass, formacorrecta;
    
    usr=Document.getElementById("usr").value;
    pass=Document.getElementById("pass").value;
    formacorrecta=/[a-z]/;
    if(usr.length>30 || usr.length<5 ){
        alert("El Usuario debe ser mayor a 5 caracteres y menor a 30");
    }
    else if(!formacorrecta.test(usr)){
        
        alert("el nombre no puede contener caracteres especiales");
        
    }else if(pass.length>40 || pass.length>8){
        alert("La contraseña debe ser mayor a 8 caracteres y menor a 40");
    }
}