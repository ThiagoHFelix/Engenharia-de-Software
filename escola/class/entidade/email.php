<?php

//Create by Thiago Henrique Felix

class email {
    
    private $cpf;
    private $email;
    
    /**
     * Construtor padrão
     * @param type $cpf Deve ser o mesmo da class pessoa
     * @param type $email
     */
    function __construct($cpf, $email) {
        $this->cpf = $cpf;
        $this->email = $email;
    }//Construct

    
    /**
     * Destroi o objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
    
}//Class 