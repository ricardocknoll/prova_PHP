<?php
class Tarefa 
{    
    private $id;
    private $titulo;
    private $descricao;
    private $prioridade;
    
    function __construct($titulo, $descricao, $prioridade) 
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->prioridade = $prioridade;
    }
    
    function getId() 
    {
        return $this->id;
    }

    function getTitulo() 
    {
        return $this->titulo;
    }

    function getDescricao() 
    {
        return $this->descricao;
    }

    function getPrioridade() 
    {
        return $this->prioridade;
    }

    function setId($id) 
    {
        $this->id = $id;
    }

    function setTitulo($titulo) 
    {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) 
    {
        $this->descricao = $descricao;
    }

    function setPrioridade($prioridade) 
    {
        $this->prioridade = $prioridade;
    }    
}

