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

      /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
    
}//Class
