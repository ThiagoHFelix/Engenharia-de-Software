<?php

// Created by Thiago Henrique Felix

class aviso 
{
    
    private $ra;
    private $rad;
    private $aviso;
    private $data;
    
    /**
     * Construtor padrão
     * @param type $ra
     * @param type $rad
     * @param type $aviso
     * @param type $data
     */
    function __construct($ra, $rad, $aviso, $data) {
        $this->ra = $ra;
        $this->rad = $rad;
        $this->aviso = $aviso;
        $this->data = $data;
    }//Construct

      /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
}//Class

