<?php

// Create by Thiago Henrique Felix

  abstract class pessoa {
    
    public $rpf; 
    public $cpf;
    public $rg;
    public $bairro;
    public $cidade;
    public $estado;
    public $rua;
    public $cep;
    public $primeironome;
    public $sobrenome;
    public $nascimento;
    public $senha;
    public $telefone;
    public $email; 
    public $foto;
    public $status;
    
   
    function __construct($foto, $rpf, $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, $telefone, $email, $status) {
       
        $this->foto = $foto;
        $this->rpf = $rpf;
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
        $this->telefone = $telefone;
        $this->email = $email;
        $this->status = $status;
    }


     /**
      * Metodo responsavel pela destruição do objeto pessoa
      * @return string Mensagem 
      */
     function __destruct(){
         
         return "Classe destruida";
         
     }//destruct
     
     
 }//Pessoa




