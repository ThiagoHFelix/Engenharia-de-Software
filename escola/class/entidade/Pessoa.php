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
    private $telefone;
    private $email = null; 
    
   
    /**
     * Construtor padrão
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
     * @param telefone $telefone
     */
     function __construct($cpf,$rg,$bairro,$cidade,$estado,$rua,$cep,$primeironome,$sobrenome,$nascimento,$senha, telefone $telefone) 
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
         $this->telefone =$telefone;
         
     }//Construtor padrão 
     
     
     
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

         
    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

        function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getRua() {
        return $this->rua;
    }

    function getCep() {
        return $this->cep;
    }

    function getPrimeironome() {
        return $this->primeironome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getSenha() {
        return $this->senha;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setPrimeironome($primeironome) {
        $this->primeironome = $primeironome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

         
     /**
      * Metodo responsavel pela destruição do objeto pessoa
      * @return string Mensagem 
      */
     function __destruct(){
         
         return "Classe destruida";
         
     }//destruct
     
     
 }//Pessoa




