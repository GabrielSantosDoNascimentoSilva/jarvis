<?php

//CRUD
class TarefaService {
    
    private $conexao;
    private $tarefa;
    
    public function __construct(Conexao $conexao, Tarefa $tarefa) {
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }
    
    public function inserir() { //create
        $query = 'insert into tarefas(titulo, dataSolicitado, dataPrazo, cliente, prioridade, solicitante, demanda, dataEntrega, status, feedback) ';
        $query .= 'values (:titulo, :dataSolicitado, :dataPrazo, :cliente, :prioridade, :solicitante, :demanda, :dataEntrega, :status, :feedback)';
        $stmt = $this->conexao->prepare($query);
        // $stmt->bindValue(':id', $this->tarefa->__get('id'));
        $stmt->bindValue(':titulo', $this->tarefa->__get('titulo'));
        $stmt->bindValue(':dataSolicitado', $this->tarefa->__get('dataSolicitado'));
        $stmt->bindValue(':dataPrazo', $this->tarefa->__get('dataPrazo'));
        $stmt->bindValue(':cliente', $this->tarefa->__get('cliente'));
        $stmt->bindValue(':prioridade', $this->tarefa->__get('prioridade'));
        $stmt->bindValue(':solicitante', $this->tarefa->__get('solicitante'));
        $stmt->bindValue(':demanda', $this->tarefa->__get('demanda'));
        $stmt->bindValue(':dataEntrega', $this->tarefa->__get('dataEntrega'));
        $stmt->bindValue(':status', $this->tarefa->__get('status'));
        $stmt->bindValue(':feedback', $this->tarefa->__get('feedback'));
        $stmt->execute();
        header('location:listarTarefas.php');
    }
    public function recuperar() { //read
        $query = 'select * from tarefas';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    /*public function obterCamposId($id, $campo) { //read
        $query = 'select ' . $campo . ' from tarefas where id = ' . $id;
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }*/
    public function alterar() {
        $query = 'update tarefas set titulo = :titulo, dataSolicitado = :dataSolicitado, dataPrazo = :dataPrazo, cliente = :cliente, prioridade = :prioridade, solicitante = :solicitante, demanda = :demanda, dataEntrega = :dataEntrega, status = :status, feedback = :feedback ';
        $query .= 'where id = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $this->tarefa->__get('id'));
        $stmt->bindValue(':titulo', $this->tarefa->__get('titulo'));
        $stmt->bindValue(':dataSolicitado', $this->tarefa->__get('dataSolicitado'));
        $stmt->bindValue(':dataPrazo', $this->tarefa->__get('dataPrazo'));
        $stmt->bindValue(':cliente', $this->tarefa->__get('cliente'));
        $stmt->bindValue(':prioridade', $this->tarefa->__get('prioridade'));
        $stmt->bindValue(':solicitante', $this->tarefa->__get('solicitante'));
        $stmt->bindValue(':demanda', $this->tarefa->__get('demanda'));
        $stmt->bindValue(':dataEntrega', $this->tarefa->__get('dataEntrega'));
        $stmt->bindValue(':status', $this->tarefa->__get('status'));
        $stmt->bindValue(':feedback', $this->tarefa->__get('feedback'));
        echo $stmt->execute();
        // header('location:listarTarefas.php');
    }
    public function remover() { //delete
        
    }
}