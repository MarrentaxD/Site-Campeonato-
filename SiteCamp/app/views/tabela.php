<?php 
    $posicao = 1;
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

                <center><h2><font face="Verdana">Campeonato Concluído!</font></h2></center>

                <div align="center">
    <table border="1" width="70%" bgcolor="#000000">
    <tr><td bgcolor="#33B86"><h4><strong><center><font face="Garamond" color="#fff">"Pronto, agora seu campeonato está concluído!<br>
    Você pode ver as opções do seu time ao clicar no<br>
    nome dele na tabela abaixo.</font></center></strong></h4></td></tr>
    </table>
    </div>
<br><br><br><br>

                <div align="center">

                 <table class="uk-table uk-table-hover" border="1" width="70%" bgcolor="#000000">
        <thead>
        
            <tr bgcolor="#0080FF">
                <th><font color="#fff">posição</th>
                <th><font color="#fff">Time</font></th>
                <th><font color="#fff">Gols</font></th>           
            </tr>
        </thead>
        <?php foreach($dados as $d){ ?>
        <tbody>
            <tr bgcolor="#0080FF">
                <td><font color="#fff"><?=$posicao?>°</font></td>
                <td><a href="consultar?id=<?= $d['id'] ?>"><font color="#fff"><?=$d['time']?></font></a></td>
                <td><font color="#fff"><?=$d['gols']?></font></td>
            </tr>
        </tbody>
        <?php 
        $posicao++;
        } ?>
    </table>
        </div>
    </div>

</body>
</html>