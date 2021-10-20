<?php

class Tarefa {
    private $id;
    private $titulo;
    private $dataSolicitado;
    private $dataPrazo;
    private $cliente;
    private $prioridade;
    private $solicitante;
    private $demanda;
    private $dataEntrega;
    private $status;
    private $feedback;
    
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}
?>