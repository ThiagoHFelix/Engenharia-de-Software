<?php

// Created by Thiago Henrique Felix


class matricula 
{
    
    
    private $ra;
    private $rc;
    private $data;
    private $status;
    
    
    /**
     * Construtor padrão
     * @param type $ra
     * @param type $rc
     * @param type $data
     * @param type $status
     */
    function __construct($ra, $rc, $data, $status) {
        $this->ra = $ra;
        $this->rc = $rc;
        $this->data = $data;
        $this->status = $status;
    }//Construct

    
    /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
}//Class