<?php

// Create by Thiago Henrique Felix
// Class responsavel pela genrencia de dados com a base de dados
class model {

    /**
     * Construtor padrão
     */
    function __construct() {
        
    }//construct

    /**
     * verifica os dados de login no banco de dados
     */
    public function validaLoginBanco($id, $senha) {

        try {
            
            
            $con = mysqli_connect("localhost", "root", "FELIXlix_9809", "SistemaEcolarShalon");
            
            if (mysqli_connect_errno()) {

               //"Erro ao fazer a conexão com o banco de dados ". mysqli_connect_error();
                
                return false;
                
            }//IF


   //=============================================================================================         
            //  procura na tabela do administrador 
            $sql = " select P.CPF,P.Senha from Administrador A, Pessoa P where P.CPF = A.cpf  ";

            $query = mysqli_query($con, $sql);
              
            while ($resultado = mysqli_fetch_array($query)) {

               
                if ($id == $resultado['CPF'] && $senha == $resultado['Senha']) {
                    
                    
                    mysqli_close($con);
                    
                    return true;
                    
                }//IF
                
                
            }//While
   //=============================================================================================              
               
            
            mysqli_close($con);
            
            return false;
            
            
        }//try 
        
        catch (SQLException $ex) {
            
            return "Erro: ".$ex->getMessage();
            
        }//catch
        
    }//validaLoginBanco
    
    /**
     * Cadastra uma pessoa no banco de dados
     * @param Pessoa $pessoa Utiliza os dados contidos na classe para o cadastro
     * @return boolean True se o cadastro for realizado com sucesso caso contrario false
     */
    public function cadastraPessoa(Pessoa $pessoa){
        
        
       try{
           
            $con = mysqli_connect("localhost", "root", "FELIXlix_9809", "SistemaEcolarShalon");
            
            if (mysqli_connect_errno()) {

                //FIXIT criar um log
               //"Erro ao fazer a conexão com o banco de dados ". mysqli_connect_error();
                
                return false;
                
            }//IF
           
             //SQL para inserir na tabela pessoa
             $sqlPessoa = "insert into pessoa values ()";
             
             //SQL para inserir na tebela email
             $sqlEmail = "insert into";
             
             //SQL para inserir na tabela telefone
             $sqlTelefone = "insert into";
             
             $query = mysqli_query($con, $sqlPessoa);
           
       }//try
       catch(Exception $ex){
           
           
           
       }//catch
        
        
        
        
    }//cadastraPessoa
    
    
    

}//Class




