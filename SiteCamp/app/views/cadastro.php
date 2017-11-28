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
	            padding:20px 10px 70px 10px;
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
                <center><h2><font face="Verdana">Inserir Times</font></h2></center>

                <div align="center">
    <table border="1" width="50%" bgcolor="#000000">
    <tr><td bgcolor="#33B86"><h4><strong><center><font face="Garamond" color="#fff">"Agora, insira o nome e o patrocinador do time, um<br>
    de cada vez, e clique em <"GUARDAR">.<br>

    Quando estiver tudo pronto, clique em
    <br><"FINALIZAR">."</font></center></strong></h4></td></tr>
    </table>
    </div>
<br><br>
                <form method="post" action="/salvar">

                    <div class="form-group">
                        <label for="nome">Time:</label><br>
                        <input class="uk-textarea" type="text" name="nome" id="nome" value="" size="30" maxlength="30" placeholder="Nome do Time">
                    </div>
<br>
                    <div class="form-group">
                        <label for="patrocinador">Patrocinador:</label><br>
                        <input class="uk-textarea" type="text" name="patrocinador" value="" size="30" maxlength="30" placeholder="Nome do Patrocinador">
                    </div>
<br><br>
                    <button class="uk-button" type=""><strong>Guardar</strong></button>

                    <a href="cj"><button type="button" class="uk-button"><strong>Finalizar</strong></button></a>

                    </form>
<br><br>
                    

            </div>
        </div>
    </div>
    </div>

</body>

</html>