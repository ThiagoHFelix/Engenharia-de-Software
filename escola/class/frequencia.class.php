<?php

// Created by Thiago Henrique Felix


class frequencia
{
    
    
    private $ra;
    private $rm;
    private $data;
    private $presenca;
    
    /**
     * Construtor padrão
     * @param type $ra
     * @param type $rm
     * @param type $data
     * @param type $presenca
     */
    function __construct($ra, $rm, $data, $presenca) {
        $this->ra = $ra;
        $this->rm = $rm;
        $this->data = $data;
        $this->presenca = $presenca;
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

    function getPresenca() {
        return $this->presenca;
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

    function setPresenca($presenca) {
        $this->presenca = $presenca;
    }

          /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
}//Class
