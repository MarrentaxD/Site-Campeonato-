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
<div class="uk-container uk-houver">
    <body bgcolor="#33B86">
    <div class="uk-grid">
        <a href="home"><img src="public/imagens/Oficial.png" width="150" height="150"/></a>
        <center><h1><font face="Helvetica">Emira Championship</font></h1></center>
    </div>
        <hr>
         <center><h2><font face="Verdana">Jogos</font></h2></center>
<br>
                <?php foreach($dados as $d){ ?>        
                 <div align="center">
    <table border="1" width="70%" bgcolor="#000000">
        <tr><td bgcolor="#33B86"><h4><strong><center><font face="Garamond" color="#fff"><br>
<div align="left">
    &nbsp&nbsp&nbsp&nbsp&nbsp
    <?=$d['data']?>
    <br>
    </div>
    <strong>
    <?=$d['time1']?>
    <?=$d['g1']?>
    X
    <?=$d['g2']?>
    <?=$d['time2']?>
    <br>
<div align="right">
     <?=$d['estadio']?>
     &nbsp&nbsp&nbsp&nbsp&nbsp
</div>
</font></center></strong></h4></td></tr>
</table>
    </div>
<br>
                                          
                <?php } ?>
        </div>
    </div>

</body>
</html>