<?php

// Create by Thiago Henrique Felix

 class pessoa {
     
    private $cpf;
    private $rg;
    private $bairro;
    private $cidade;
    private $estado;
    private $rua;
    private $cep;
    private $primeironome;
    private $sobrenome;
    private $nascimento;
    private $senha;
          
     /**
      * Método responsavel pela criação do objeto pessoa
      * @param type $cpf 
      * @param type $rg
      * @param type $bairro
      * @param type $cidade
      * @param type $estado
      * @param type $rua
      * @param type $cep
      * @param type $primeironome
      * @param type $sobrenome
      * @param type $nascimento
      * @param type $senha
      */
     function __construct($cpf,$rg,$bairro,$cidade,$estado,$rua,$cep,$primeironome,$sobrenome,$nascimento,$senha) 
     {
       
         $this->cpf = $cpf;
         $this->rg = $rg;
         $this->bairro = $bairro;
         $this->cidade = $cidade;
         $this->estado = $estado;
         $this->rua = $rua;
         $this->cep = $cep;
         $this->primeironome = $primeironome;
         $this->sobrenome = $sobrenome;
         $this->nascimento = $nascimento;
         $this->senha = $senha;
         
     }//Construtor parametrizado 
     
     /**
      * Metodo responsavel pela destruição do objeto pessoa
      * @return string Mensagem 
      */
     function __destruct(){
         
         return "Classe destruida";
         
     }//destruct
     
     
 }//Pessoa




