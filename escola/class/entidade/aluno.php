<?php

// Create by Thiago Henrique Fellix 

class aluno extends pessoa
{
    
    private $ra;
    private $cpf;
    private $status;
    private $qualificacoes;
    
    
    /**
     * Construtor padrão
     * @param type $ra
     * @param type $cpf
     * @param type $status
     * @param type $qualificacoes
     */
    function __construct( $qualificacoes,$cpf, $status, $ra, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha ) {
        
        $this->ra = $ra;
        $this->cpf = $cpf;
        $this->status = $status;
        $this->qualificacoes = $qualificacoes;
    
        parent::__construct($cpf, $qualificacoes, $status, $ra, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha);
        
    }//Construct
    function getRa() {
        return $this->ra;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getStatus() {
        return $this->status;
    }

    function getQualificacoes() {
        return $this->qualificacoes;
    }

    function setRa($ra) {
        $this->ra = $ra;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setQualificacoes($qualificacoes) {
        $this->qualificacoes = $qualificacoes;
    }

        
    /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {

        return parent::__destruct();
    
    }//Destruct
    
    
    
}//Aluno
