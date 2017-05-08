<?php

// Create by Thiago Henrique Felix
// Class responsavel pela genrencia de dados com a base de dados
class model{
 
    /**
     * Construtor padrão
     */
    function __construct() {
        
    }//Construct
  
    
    /**
     * Inicia uma conexão com o banco de dados
     */
   private function conectaBanco(){
    
        return mysqli_connect("localhost/banco/","root","FELIXlix_9809","my_db");
        
    }//conectaBanco

    
    /**
     * Busca os dados de login no banco de dados
     */
   public function validaLoginBanco($id, $senha){
     
     
       $con = conectaBanco();
       
       if (mysqli_connect_errno())
       {
            
           return "Falha ao conctar com o banco de dados";
       
             
       }//IF
       
       
       $sql = " select P.CPF,P.Senha from Administrador A, Pessoa P where P.CPF = A.cpf  ";
       
       $query =  mysqli_query($con, $sql);
       
       while ($resultado = mysql_fetch_assoc($query)) {
           
         if($id == $resultado['CPF'] && $senha == $resultado['Senha'] )  
         {
             return "Usuário verdadeiro";
             mysqli_close($con);
             
         }//IF
         
         
       }//While
       
       return "Nada foi encontrado";
       
       mysqli_close($con);
       
       
    }//validaLogin


}//class model


