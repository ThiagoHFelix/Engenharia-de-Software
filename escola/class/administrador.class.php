<?php

// Created by Thiago Henrique Felix
include_once '../log/logger.php';
include_once 'pessoa.class.php';

class administrador extends pessoa {

    public $rad;
  
    function __construct($foto,$rad,$rpf, $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, $telefone, $email, $status) {
        
        parent::__construct($foto,$rpf, $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, $telefone, $email, $status);
        $this->rad = $rad;
        
    }//function

        
     /**
     * Destroi o atual objeto 
     * @return string
     */
    function __destruct() {
        return parent::__destruct();
    }//Destruct


}//Class



