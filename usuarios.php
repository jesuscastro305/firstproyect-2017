<?php
	session_start();

if(isset($_SESSION['usuario'])) {
include('php/cn.php');
$cn = Conectarse();


$html='<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <style>
     @import url("https://fonts.googleapis.com/css?family=Questrial");

        *{
            font-family: "Questrial", sans-serif;
            border-radius: 2px;
        }
::-webkit-scrollbar {
      width: 10px;
background: rgba(0,0,0,.5);
}::-webkit-scrollbar-thumb {
      background-color: #000;
} 
        div.general{
            text-align: center;
        }
        div.titulosprin{
            display: none;
        }
        div.inftit{
            color:#E74C3C;
            font-size: 21px;
            
        }
            fieldset{
                background: rgba(51,51,51,0.9);
                color: #fff;
                border: 0;
                text-align: center;

            }
        fieldset.internos{
            margin-top: 20px;
        }
         legend{
            color:#43BE6E;
            font-size: 30px;
            background: rgba(51,51,51,0.9);
        }
        input[type=email], input[type=password], input[type=text],select{
            display: inline-block;
            width: 95%;
            padding: 6px;
            border-radius: 2px;
            border: 1px solid rgba(51,51,51,.4);
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
        div.usuarioind{
            border: 1px solid #fff;
            padding: 5px;
            margin-top: 2px;
        }
        
        @media(min-width:500px){
            #nom, #ape, #con, #usu{
                width: 46%;
            }
        }
        @media(min-width:700px){
            #ema, #tipo{
                width: 46%;
            }
        div.titulosprin{
            display: block;
        }
        div.usuarioind{
            border: none;
        }
            div.titulosOcul{
                display: inline-block;
                width: 22%;
                padding: 5px;
                font-size: 25px;
            color:#E74C3C;
                
            }
            div.inftit{
                display: none;
            }
            div.inf{
                display: inline-block;
                width: 22%;
                padding: 5px;
                font-size: 20px;
            color:#fff;
            }
            div.btn{
                display: inline-block;
            }
            div#espa{
                display: inline-block;
                padding: 11px;
                width: 5px;
                height: 5px;
            }
        }
        @media(min-width:800px){
            #nom, #ape, #con, #usu, #ema, #tipo{
                width: 15%;
            }
        }
        
    </style>
</head>
<body>
    <div class="general">
        <fieldset>
            <legend>Usuarios</legend>
            <fieldset class="internos">
                <legend>Registrar Usuario</legend>
                <form action="php/agregarusuario.php" method="post">
                    <input type="text" id="nom" name="nombre" placeholder="Nombre(s)" required>
                    <input type="text" id="ape" name="apellidos" placeholder="Apellidos" required>
                    <input  type="email"  pattern="^[^\s()<>@,;:]+@((?=[a-zA-Z0-9-]+)|[a-zA-Z-]+)([a-zA-Z0-9-]+)*(\.([0-9]+(?=[a-zA-Z-]+)|[a-zA-Z-]+)(-?[a-zA-Z0-9-]+)?)+$" id="ema" name="email" placeholder="Correo electronico" required>
                    <input type="text" id="usu" name="usuario" placeholder="Usuario" required>
                    <input type="password" id="con" name="contrasena" placeholder="Contraseña" required>
                    <select name="tipo" id="tipo">
                        <option value="">Nivel</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuario</option>
                        <option value="Vista">Vista Solamente</option>
                    </select>
                    <input type="submit" value="Registrar">
                </form>
            </fieldset>
            <fieldset class="internos">
                <legend>usuarios registrados</legend>
                <div class="usuario">
                  <div class="titulosprin">
                   <div class="titulosOcul"><label for="">Nombre</label></div>
                   <div class="titulosOcul"><label for="">Usuario</label></div>
                   <div class="titulosOcul"><label for="">Correo electronico</label></div>
                   <div class="titulosOcul"><label for="">Tipo de usuario</label></div>
                   <div id="espa"></div>
                   </div>';
$usuarios = mysqli_query($cn, "SELECT * FROM `cuentas` ORDER BY `id` ASC");

while($row = mysqli_fetch_row($usuarios)){

$html.='
                   <div class="usuarioind">
                    <form action="php/eliusuario.php" method="post">
                        <input type="hidden" value="'.$row[0].'" name="borrar">
                        <div class="inftit"><label for="" >Nombre</label></div>
                        <div class="inf"><label for="">'.$row[1].' '.$row[2].'</label></div>
                        <div class="inftit"><label for="" >Usuario</label></div>
                        <div class="inf"><label for="">'.$row[4].' </label></div>
                        <div class="inftit"><label for="" >Correo electronico</label></div>
                        <div class="inf"><label for="">'.$row[3].' </label></div>
                        <div class="inftit"><label for="" >Tipo de usuario</label></div>
                        <div class="inf"><label for="">'.$row[6].' </label></div>
                        <div class="btn"><input type="submit" value="X" style="  background: #E74C3C; width: 25px; text-align:center; font-weight: bold; "></div>
                    </form>
                    </div>';
    }

$html.='
                </div>
            </fieldset>
        </fieldset>
    </div>
</body>
</html>';
    $uss = $_SESSION['usuario'];
    $per = mysqli_query($cn, "SELECT `permiso` FROM `permisos` WHERE `usuario` LIKE '$uss' AND `permiso` LIKE '10'");
    if(mysqli_num_rows($per)==0){
       echo '<script> window.location="nopermiso.html"; </script>';
    }else{echo $html;}
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>