<?php

// Created by Thiago Henrique Felix 


class avaliado
{
    
    private $ra;
    private $rm;
    private $data;
    private $nota;
    private $tipo;
    
    
    /**
     * Construtor padrão
     * @param type $ra
     * @param type $rm
     * @param type $data
     * @param type $nota
     * @param type $tipo
     */
    function __construct($ra, $rm, $data, $nota, $tipo) {
        $this->ra = $ra;
        $this->rm = $rm;
        $this->data = $data;
        $this->nota = $nota;
        $this->tipo = $tipo;
    }//Construct
    function getRa() {
        return $this->ra;
    }

    function getRm() {
        return $this->rm;
    }

    function getData() {
        return $this->data;
    }

    function getNota() {
        return $this->nota;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setRa($ra) {
        $this->ra = $ra;
    }

    function setRm($rm) {
        $this->rm = $rm;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

          /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
    
}//Class
