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

    
    /**
     * Destroi o objeto atual
     * @return type
     */
    function __destruct() {
        return parent::__destruct();
    }
    
    
}//Class

//Class

