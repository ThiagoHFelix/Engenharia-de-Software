<?php

// Created by Thiago Henrique Felix


class administrador extends pessoa {

    private $rad;
    private $cpf;
    private $status;

    /**
     * Construtor padrão 
     * @param type $rad
     * @param type $status
     * @param type $cpf
     * @param type $rg
     * @param type $bairro
     * @param type $cidade
     * @param type $estado
     * @param type $rua
     * @param type $primeironome
     * @param type $sobrenome
     * @param type $nascimento
     * @param type $senha
     * @param type $cep
     */
    function __construct($rad, $status, $cpf, $rg, $bairro, $cidade, $estado, $rua, $primeironome, $sobrenome, $nascimento, $senha, $cep) {
        $this->rad = $rad;
        $this->cpf = $cpf;
        $this->status = $status;
        parent::__construct($cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha);
    }

//Construtor

    /**
     * Destroi o atual objeto 
     * @return string
     */
    function __destruct() {
        return parent::__destruct();
    }//Destruct


}

//Class

