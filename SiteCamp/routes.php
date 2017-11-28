<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {


    case '/cadastro':
        
        require './app/views/cadastro.php';
        break;
    
    case '/salvar':
           
        $testeController->salvar();
        break;
    
    case '/salvarj':
        $testeController->salvarj();
        break;    


    case '/consultar':
            
        $testeController->consultar();
        break;

    
    case '/teste':
            
        require './app/views/teste.php';
        break;

    case '/cj':
            
        $testeController->cj();
        break;

    case '/home':
            
        require './app/views/home.php';
        break;

    case '/tabela':
            
        $testeController->tabela();
        break;

    case '/ej':

        $testeController->ej();
        break;

    case '/cg':
        $testeController->cg();
        break;

    case '/salvarg':
        $testeController->salvarg();
        break;

    case '/consultar':
        $testeController->consultar();
        break;

    default:
        die('Essa rota não é valida');
        break;
}
