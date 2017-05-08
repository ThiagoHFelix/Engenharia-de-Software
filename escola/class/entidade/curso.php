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

    
    /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
}//Class

