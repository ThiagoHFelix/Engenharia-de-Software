
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
        
        if ( (strcmp(trim($id),"")==0) || (strcmp(trim($senha),"") == 0) ) {

            return false;
            
        }//IF
  
        $classModel = new model();       
        return $classModel->validaLoginBanco($id, $senha);
       
       
    }//validaLogin
    
   /**
     * Busca informações de uma pessoa no banco de dados
     * @param type $id
     * @param type $senha
     * @return type Retorna false, se não for possivel acessar o banco de dados, uma string
     * quando usuário não encontrado, ou, se encontrar, retorna um array com as infromações
     */
    public function getDadosPessoa($id,$senha){
        
        $classModel = new model();
        return $classModel->buscaPessoa($id, $senha);
        
    }//getDadosPessoa
    
    
     /**
     * Verifica qual entidade é a pessoa, Administrador, Aluno ou Professor
     * @param type $id CPF da pessoa
     * @return string Retorna uma string do tipo da pessoa
     */
    public function getEntidadeTipo($id){
        
        
          $classModel = new model();
          return $classModel->getPessoaTipo($id);
        
    }//getEntidadeTipo
    
    
}//Class

