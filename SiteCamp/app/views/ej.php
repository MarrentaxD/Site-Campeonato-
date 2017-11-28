<?php

    foreach ($dados as $d) {

        
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jogos</title>
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
	        padding:20px 10px 300px 10px;
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

                <center><h2><font face="Verdana">Modifique seus Jogos</font></h2></center>

                <div align="center">
    <table border="1" width="70%" bgcolor="#000000">
    <tr><td bgcolor="#33B86"><h4><strong><center><font face="Garamond" color="#fff">"Selecione os jogos que irão acontecer,<br>
    logo após insira o saldo de gols de cada time.<br>
    O numero na tabela corresponde ao numero dos jogos! </font></center></strong></h4></td></tr>
    </table>
    </div>
<br>

            <center><h2><font face="Verdana">Selecione e modifique os Jogos</font></h2></center>

                <div align="center">
                <form method="post" action="/cg">
                          <label for="palavra">Selecione seus jogos: </label>
                         <select name="id" id="">
                            <?php foreach($dados as $d) { ?>
                            <option value="<?=$d['id']?>"> <?=$d['id']?> </option>
                            <?php } ?>
                            </select>
<br><br>
                <a href="cadastro"><button type="submit" class="uk-button"><strong>VER</strong></button></a>

                </form>
        </div>
    </div>
</body>
</html>