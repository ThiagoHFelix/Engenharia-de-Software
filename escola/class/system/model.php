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
     * Busca os dados de login no banco de dados
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
             // procura na tabela do aluno 
            $sql = " select P.CPF,P.Senha from Aluno A, Pessoa P where P.CPF = A.cpf  ";

            $query = mysqli_query($con, $sql);
              
            while ($resultado = mysqli_fetch_array($query)) {

               
                if ($id == $resultado['CPF'] && $senha == $resultado['Senha']) {
                    
                    
                    mysqli_close($con);
                    
                    return true;
                    
                }//IF
                
                
            }//While
//=============================================================================================
            // procura na tabela do professor 
            $sql = " select P.CPF,P.Senha from Professor PR, Pessoa P where P.CPF = PR.cpf  ";

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

}//Class




