<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Página de cadastro</title>
    <link rel="shortcut icon" href="public/imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="public/imagens/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link href="public/UI Kits/uikit.css" rel="stylesheet" type="text/css"/>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/uikit.min.js"></script>
    <script src="public/js/uikit-icons.min.js"></script>
 
    <style>
        .uk-grid {
            margin: 0 auto;
            width: 70%;
        }

        .uk-grid h1 {
            width: 70%;
        }

        .uk-container {
	        width:900px;
	        background-color:white;
	        margin:-5px auto 0px auto;
	        box-shadow:0px 0px 20px black;
	        padding:20px 10px 200px 10px;
        }
    </style>


</head>

<body>
<div class="uk-container">
    <body bgcolor="#33B86">
    <div class="uk-grid">
        <a href="home"><img src="public/imagens/Oficial.png" width="150" height="150"/></a>
        <center><h1><font face="Helvetica">Emira Championship</font></h1></center>
    </div>
        <hr>

                <center><h2><font face="Verdana">Resultado dos Jogos</font></h2></center>

                <div align="center">
    <table border="1" width="70%" bgcolor="#000000">
    <tr><td bgcolor="#33B86"><h4><strong><center><font face="Garamond" color="#fff">Agora vamos inserir os gols de cada time,<br>
    O gols Time 1  é o que foi colocado na esquerda<br>
     O gols Time 2  é o que foi colocado na direita.</font></center></strong></h4></td></tr>
    </table>
    </div>
<br>
                <div align="center">
                <form method="post" action="/salvarg">

                 <table class="uk-table" border="1" width="70%" bgcolor="#000000">
                

                    <tr><td bgcolor="#33B86"><strong><div class="form-group" align="center">
                    <label for="time1"><font color="#fff">Gols time 1:</font></label>
                       <input class="form-control" type="text" name="time1" id="time1" value="">
                        <br><br>
                    <div class="form-group" align="center">
                        <label for="time2"><font color="#fff">Gols time 2:</font></label>
                        <input class="form-control" type="text" name="time2" id="time2" value="">
                    </div></strong></td></tr>                                          
                </table>
<br><br>
                    <button class="uk-button" type="submit"><strong>Guardar</strong></button>

                    <a href="tabela"><button type="button" class="uk-button"><strong>Finalizar</strong></button></a>
                </form>
        </div>
    </div>
</body>
</html>