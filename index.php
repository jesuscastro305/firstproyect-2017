<?php
	session_start();
	include 'php/cn.php';
	if(isset($_SESSION['usuario'])){
	echo '<script> window.location="principal.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio de Sesion</title>
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
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        div.logo{
                background-image: url(fondos/aga.jpg);
            background-size: 121px 111px;
            background-position:center;
            width: 100px;
            height: 100px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50px;
            margin-top: -70px;
            margin-bottom: 20px;
            
        }
        a{
            color: #fff;
        }
        div.forgot{
            padding: 10px;
        }
        input[type=text], input[type=password]{
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
</head>
<body>
    <div class="general">
        <div class="form">
          <div class="contlogo">
           <div class="logo"></div>
           </div>
            <form action="php/validar.php" method="post">
                <input type="text" name="usr" placeholder="Usuario" autofocus required>
                <input type="password" name="pass" placeholder="Contrase&ntilde;a" required>
                <input type="submit" value="Entrar" name="login">
                <div class="forgot"><a href="recup.php">Olvidaste tu contrase&ntilde;a?</a></div>
            </form>
        </div>
    </div>
</body>
</html>