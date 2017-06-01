<?php

// Create by Thiago Henrique Fellix 

class aluno extends pessoa
{
    
    public $ra;
    public $qualificacoes;
    
    function __construct($foto,$ra, $qualificacoes,$rpf, $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, $telefone, $email, $status) {
      
        parent::__construct($foto,$rpf, $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, $telefone, $email, $status);
     
        $this->ra = $ra;
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
