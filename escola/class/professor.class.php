<?php

//Created by Thiago Henrique Felix 


class professor extends pessoa {

    public $rp;

   
    /**
     * Construtor padrão
     * @param type $rp
     * @param type $status
     * @param type $cpf
     */
    function __construct($rp,$foto, $rpf, $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, $telefone, $email, $status) {
        
        $this->rp = $rp;
       
        parent::__construct($foto, $rpf, $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, $telefone, $email, $status);
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

