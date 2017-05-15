<?php

// Created by Thiago Henrique Felix


class curso
{
    
    
    private $rc;
    private $status;
    private $titulo;
    private $descricao;
    
    /**
     * Construtor padrão
     * @param type $rc
     * @param type $status
     * @param type $titulo
     * @param type $descricao
     */
    function __construct($rc, $status, $titulo, $descricao) {
        $this->rc = $rc;
        $this->status = $status;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }//Function
    function getRc() {
        return $this->rc;
    }

    function getStatus() {
        return $this->status;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setRc($rc) {
        $this->rc = $rc;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

        
    /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
}//Class

