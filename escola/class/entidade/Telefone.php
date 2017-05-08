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
    
    
    
    /**
     * Destrutor do objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct

    
    
    
    
    
    
}// Class

