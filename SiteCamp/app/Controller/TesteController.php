<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{

    public function imprimir()
    {
       $dado = $_POST['dado'];
       $resultado = $dado % 2 == 0 ? 'Par' : 'Impar';

       require './app/views/imprime.php';
    }

    public function salvar()
    {
        //receber os dados
        $dados['nome'] = $_POST['nome'];
        $dados['patrocinador'] = $_POST['patrocinador'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('times', $dados);

        //devolver uma pagina com mensagem de ok
        // require './app/views/foi.php';

        //redirecionar para a rota /cadastro
        header('Location: /cadastro');
        
        
    }


    public function salvarj()
    {
        $dados['time1'] = $_POST['time1'];
        $dados['time2'] = $_POST['time2'];
        $dados['estadio'] = $_POST['estadio'];
        $dados['data'] = $_POST['data'];

        //conexao com banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('jogos', $dados);
        
        header('Location: /cj');
    }

    public function ej()
    {
        $q = new QueryBuilder();

        $dados = $q->select('jogos');


        require './app/views/ej.php';
    }

    public function cg()
    {
        session_start();
        $_SESSION['id'] = $_POST['id'];   
        $q = new QueryBuilder();

         $dados = $q->selectwhere('jogos', $_SESSION['id']);
         
         $_SESSION['time1'] = $dados['time1'];
         $_SESSION['time2'] = $dados['time2'];
         
         require './app/views/cg.php';

    }

    public function salvarg()
    {
        //iniciando sessão 
        session_start();

        //criando variaveis
        $dados1 = [];
        $dados2 = [];

        //criando conexão com banco
        $q = new QueryBuilder();

        //configurando dados time 1
        $dados1['jogos_id'] = $_SESSION['id'];
        $dados1['times_id'] = $_SESSION['time1'];
        $dados1['gols'] = $_POST['time1'];

        //configurar dados do time 2
        $dados2['jogos_id'] = $_SESSION['id'];
        $dados2['times_id'] = $_SESSION['time2'];
        $dados2['gols'] = $_POST['time2'];

        //enviar dados pro banco
        $q->insert('tabela', $dados1);
        $q->insert('tabela', $dados2);

        //devolve a pagina home
        header('location: /tabela');

    }

    public function tabela()
    {
        //criando conexão com banco
        $q = new QueryBuilder();

        //buscando os dados
        $dados = $q->selectinner();

        //retornando a pagina tabela
        require './app/views/tabela.php';

    }

    public function consultar()
    {
        //buscando o id do time consultado
        $id = $_GET['id'];

        //criando conexão com o banco
         $q = new QueryBuilder();

         //selecionando dados
         $dados = $q->selectinner2($id);

        

         //devolvendo a pagina 
         require './app/views/consultar.php';

        

         
    }
    public function cj()
    {
        $q = new QueryBuilder();
        $dados = $q->select('times');
        require './app/views/cj.php';
    }
}