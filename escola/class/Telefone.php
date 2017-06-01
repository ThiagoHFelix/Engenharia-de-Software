<?php

//Created by Thiago Henrique Felix


class telefone {
    
    
    private $cpf;
    private $telefone;
    
    /**
     * Construtor padrão
     * @param type $cpf CPF da pessoa.
     * @param type $telefone Numero de telefone da pessoa.
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
     * @return string Aviso sobre a destruição do objeto.
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct

    
}// Class

