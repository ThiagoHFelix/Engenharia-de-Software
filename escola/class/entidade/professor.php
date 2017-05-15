<?php

//Created by Thiago Henrique Felix 


class professor extends pessoa {

    private $rp;
    private $status;
    private $cpf;
    
    
    
    /**
     * Construtor padrão
     * @param type $rp
     * @param type $status
     * @param type $cpf
     */
    function __construct($rp, $status, $cpf,$rg,$bairro,$cidade,$estado,$rua,$cep,$primeironome,$sobrenome,$nascimento,$senha) {
        
        $this->rp = $rp;
        $this->status = $status;
        $this->cpf = $cpf;
        
        parent::__construct($cpf,$rg,$bairro,$cidade,$estado,$rua,$cep,$primeironome,$sobrenome,$nascimento,$senha);
        
    }//Construct

    function getRp() {
        return $this->rp;
    }

    function getStatus() {
        return $this->status;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setRp($rp) {
        $this->rp = $rp;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

        /**
     * Destroi o objeto atual
     * @return type
     */
    function __destruct() {
        return parent::__destruct();
    }
    
    
}//Class

//Class

