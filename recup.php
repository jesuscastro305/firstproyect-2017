
<?php
	session_start();
	include 'php/cn.php';
	if(isset($_SESSION['usuario'])){
	echo '<script> window.location="principal.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <style>
    
     @import url("https://fonts.googleapis.com/css?family=Questrial");

        *{
            font-family: "Questrial", sans-serif;
        }
        body{
            background: rgba(51,51,51,0.9);
        }
        div.general{
            text-align: center;
            padding-top: 80px;
        }
        div.form{
            padding: 20px;
            color: #fff;
            border-radius: 5px;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }
        input[type=email]{
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
            margin-top:10px;
            font-family: "Questrial", sans-serif;
        }
        p{
            font-size: 20px;
        }
        @media(min-width:550px){
        div.general{
            padding-top: 0px;
        }
        div.form{
            background: rgb(127,127,127);
        }
        body{
            position: absolute;
            top:30%;
            bottom: 30%;
            left:10%;
            right: 10%;
        }
            div.logo{
                border-bottom: 1px solid rgba(110,110,110,.9);
            }  
        }
    </style>
    <title>Recuperar contraseña</title>
</head>
<body>
    <div class="general">
        <div class="form">
           <p>Ingrese el correo electronico registrado en el sistema para recuperar la contraseña.</p>
            <form action="php/recup.php" method="post">
            <input type="email" placeholder="ej: ejemplo@dominio.x"  pattern="^[^\s()<>@,;:]+@((?=[a-zA-Z0-9-]+)|[a-zA-Z-]+)([a-zA-Z0-9-]+)*(\.([0-9]+(?=[a-zA-Z-]+)|[a-zA-Z-]+)(-?[a-zA-Z0-9-]+)?)+$">
            <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>