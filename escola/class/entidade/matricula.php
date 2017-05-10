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

    function getRa() {
        return $this->ra;
    }

    function getRc() {
        return $this->rc;
    }

    function getData() {
        return $this->data;
    }

    function getStatus() {
        return $this->status;
    }

    function setRa($ra) {
        $this->ra = $ra;
    }

    function setRc($rc) {
        $this->rc = $rc;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setStatus($status) {
        $this->status = $status;
    }

     /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
}//Class