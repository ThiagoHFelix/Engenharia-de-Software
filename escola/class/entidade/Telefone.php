<?php

//Create by Thiago Henrique Felix


class telefone {
    
    
    private $cpf;
    private $telefone;
    
    /**
     * COnstrutor padrão
     * @param type $cpf
     * @param type $telefone
     */
    function __construct($cpf, $telefone) {
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }//Construct
    
    function getCpf() {
        return $this->cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

        
    /**
     * Destrutor do objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct

    
    
    
    
    
    
}// Class

