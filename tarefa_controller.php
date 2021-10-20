<?php
    require "tarefa.model.php";
    require "tarefa.service.php";
    require "conexao.php";
    
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    $id = isset($_GET['id']) ? $_GET['id'] : $id;
    
   if( $acao == 'inserir') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('titulo', $_POST['titulo']);
        $tarefa->__set('dataSolicitado', $_POST['dataSolicitado']);
        $tarefa->__set('dataPrazo', $_POST['dataPrazo']);
        $tarefa->__set('cliente', $_POST['cliente']);
        $tarefa->__set('prioridade', $_POST['prioridade']);
        $tarefa->__set('solicitante', $_POST['solicitante']);
        $tarefa->__set('demanda', $_POST['demanda']);
        $tarefa->__set('dataEntrega', $_POST['dataEntrega']);
        $tarefa->__set('status', $_POST['status']);
        $tarefa->__set('feedback', $_POST['feedback']);
        
        $conexao = new Conexao();
        
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();
   } else if ($acao == 'recuperar') {
       
        $tarefa = new Tarefa();
        $conexao = new Conexao();
        
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
   } else if ($acao == 'alterar') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('titulo', $_POST['titulo']);
        $tarefa->__set('dataSolicitado', $_POST['dataSolicitado']);
        $tarefa->__set('dataPrazo', $_POST['dataPrazo']);
        $tarefa->__set('cliente', $_POST['cliente']);
        $tarefa->__set('prioridade', $_POST['prioridade']);
        $tarefa->__set('solicitante', $_POST['solicitante']);
        $tarefa->__set('demanda', $_POST['demanda']);
        $tarefa->__set('dataEntrega', $_POST['dataEntrega']);
        $tarefa->__set('status', $_POST['status']);
        $tarefa->__set('feedback', $_POST['feedback']);
                
       $conexao = new Conexao();
       
       $tarefaService = new TarefaService($conexao, $tarefa);
       
       $tarefaService->alterar();
   }
?>