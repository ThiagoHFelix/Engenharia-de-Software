
<?php


//Create by Thiago Henrique Felix
//Class responsavel pelo controle da gerencia de dados

include_once "model.php";

class control {
    
    
    
    
    /**
     * Construtor padrão
     */
    function __construct() {
        
    }//Construct
    
    
      /**
     * Valida os dados do login
     * @param string $id
     * @param string $senha
     * @return string
     */
     public function validaLogin(string $id, string $senha) {
         
         

        if (trim($id) == "" || trim($senha) == "") {

            return false;
            
        }//IF
  
       $classModel = new model();
       
        return $classModel->validaLoginBanco($id, $senha);
       
       
    }//validaLogin
    
    
    
    
    
    
}//Class

