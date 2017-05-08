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

    
      /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
}//Class
