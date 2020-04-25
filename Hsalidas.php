<?php
include ('php/cn.php');
$cn = Conectarse();

$html='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <style>
        .gengen{
            background: white;
        }
        .general{
            border: 1px solid;
            padding: 5px;
            border-radius: 7px;
            height:300px;
        }
        div.infnota{
        }
        .titi{
            text-align: right;
        }
        .titulo{
            display: inline-block;
            margin: 1px;
            font-size: 30px;
            text-align: left;
            width: 35%;
            color: firebrick
            
        }
        .fecha, .folio, .ent, .csal, .carg{
            border: 1px solid black;
            display: inline-block;
            padding: 2px;
            text-align: left;
            font-size: 14px;
            color:rgba(100,100,100,.9);
            
            background: rgba(190,190,190,.5);
        }
        .ent, .csal, .carg{
            width: 32.5%
        }
        .fecha, .folio{
            width: 30%;
        }
        .ent{
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
        }
        .carg{
            border-bottom-right-radius: 7px;
        }
        .fecha{
            border-top-left-radius: 7px;
            margin-right: -2px;
            margin-bottom: -2px;
        }
        .csal{
            margin-left: -5px;
            margin-right: -5px;
        }
        .folio{
            border-top-right-radius: 7px;
            margin-left: -3px;
            margin-bottom: -2px;
        }
        .i{
            text-align: right;
            font-size: 20px;
            color:black;
        }
        .infprod{
            border: 1px solid;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
            margin-top: 15px;
            text-align: center;
        }
        .sup{
            background: rgba(190,190,190,.5);
        }
        .t{
            display: inline-block;
            width: 20%;
        }
        #desc{
            width: 57%;
            border-left: 1px solid;
            border-right: 1px solid;
        }
        .inf{
            border-top: 1px solid;
            text-align: center;
        }
        .ii{
            display: inline-block;
            width: 20%;
        }
        #de{
            width: 57%;
            border-left: 1px solid;
            border-right: 1px solid;
        }
        #de1{
            width: 57%;
            border-right: 1px solid;
        }
        #toti, #totit{
            background: rgba(190,190,190,.5);
            
        }
        .inf1{
            border-bottom: 1px solid;
            border-right: 1px solid;
            border-bottom-right-radius: 7px;
            text-align: center;
        }
        .infsal{
            border: 1px solid;
            border-radius: 7px;
            margin-top: 15px;
            text-align: center;
        }
        .o{
            width: 45%;
            display: inline-block;
        }
        .supe{
            font-size: 14px;
            color:rgba(100,100,100,.9);
            background: rgba(190,190,190,.5);
        }
        #dere{
            border-left:1px solid;
            margin-left: -5px;
        }
        
        .infe{
            text-align:center;
            font-size: 20px;
            color:black;
        }
        .lineacorte{
            margin-top: 10px;
            border-bottom: 1px dashed;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
   <div class="gengen">';
$nota = mysqli_query($cn, "SELECT * FROM `10010` ORDER BY `folio` DESC");

while($n = mysqli_fetch_row($nota)){
$html.='
    <div class="general">
        <div class="infnota">
           <div class="titi">
            <div class="titulo">Nota de Salida</div>
            <div class="fecha">Fecha:
                <div class="i">'.$n[1].'</div>
            </div>
            <div class="folio">Folio:
                <div class="i">'.$n[0].'</div>
            </div>
            </div>
            <div class="ent">Entregado a:
               <div class="i">'.$n[3].'</div> 
            </div>
            <div class="csal">Concepto Salida:
                <div class="i">'.$n[4].'</div>
            </div>
            <div class="carg">Carguese a:
                <div class="i">'.$n[2].'</div>
            </div>
        </div>
        <div class="infprod">
            <div class="sup">
                <div class="t">CANTIDAD</div>
                <div id="desc" class="t">DESCRIPCION</div>
                <div class="t">COSTO UNITARIO</div>
            </div>';
$infor = mysqli_query($cn, "SELECT * FROM `111110010` WHERE `ps_folio` LIKE '$n[0]' ORDER BY `id_prod_sal` ASC");
$to = 0;
while($inf = mysqli_fetch_row($infor)){
$html.='
            <div class="inf">
                <div class="ii">'.$inf[1].'</div>
                <div id="de" class="ii">'.$inf[2].'-'.$inf[3].'</div>
                <div class="ii">'.$inf[4].'</div>
            </div>';
$to = $to + $inf[4];
}

$html.='
        </div>';


$html.='
            <div class="inf1">
                <div id="de1" class="ii"></div>
                <div id="totit" class="ii">TOTAL</div>
                <div id="toti" class="ii">$'.$to.'</div>
            </div>';



$html.='
        <div class="infsal">';



$html.='
            <div class="o">
               <div class="supe">Autorizo:</div>
                <div class="infe">'.$n[6].'</div>
            </div>
            <div id="dere" class="o">
               <div class="supe">Entrego:</div>
                <div class="infe">'.$n[5].'</div>
            </div>';



$html.='
        </div>
    </div>
    <div class="lineacorte"></div>';

}

$html.='
    </div>
</body>
</html>';

echo $html;
?>