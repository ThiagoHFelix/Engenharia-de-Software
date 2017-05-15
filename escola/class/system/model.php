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
            $sql = " select cpf,senha from Pessoa";

            $query = mysqli_query($con, $sql);
              
            while ($resultado = mysqli_fetch_array($query)) {

               
                if ($id == $resultado['cpf'] && $senha == $resultado['senha']) {
                    
                    
                    mysqli_close($con);
                    
                    return true;
                    
                }//IF
                
                
            }//While
   //=============================================================================================              
               
            
            mysqli_close($con);
            
            return false;
            
            
        }//try 
        
        catch (SQLException $ex) {
            
            //return "Erro: ".$ex->getMessage();
            
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
    
   
    /**
     * Busca informações de uma pessoa no banco de dados
     * @param type $id
     * @param type $senha
     * @return type Retorna false, se não for possivel acessar o banco de dados, uma string
     * quando usuário não encontrado, ou, se encontrar, retorna um array com as infromações
     */
    public function buscaPessoa($id,$senha){
        
        try{
            
           $con = mysqli_connect("localhost", "root", "FELIXlix_9809", "SistemaEcolarShalon");
            
            if (mysqli_connect_errno()) {

               //"Erro ao fazer a conexão com o banco de dados ". mysqli_connect_error();
                
                return false;
                
            }//IF
            
            
            $sql = "select rp,cpf,senha,rg,bairro,cidade,estado,rua,cep,primeironome,nascimento,sobrenome from Pessoa, telefone where pessoa.cpf = telefone.cpf";
            
            $query = mysqli_query($con, $sql);
            
            
            while($resultado = mysqli_fetch_array($query)){
                
                if( $resultado['cpf'] == $id && $resultado['senha'] == $senha){
                    
                    $cpf = $resultado['cpf'];
                    $senha = $resultado['senha'];
                    $rg = $resultado['rg'];
                    $bairro = $resultado['bairro'];
                    $cidade = $resultado['cidade'];
                    $estado = $resultado['estado'];
                    $rua = $resultado['rua'];
                    $cep = $resultado['cep'];
                    $primeironome = $resultado['primeironome'];
                    $nascimento = $resultado['nascimento'];
                    $sobrenome = $resultado['sobrenome'];
                    
                    mysqli_close($con);
                    
                    return new pessoa($id, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeironome, $sobrenome, $nascimento, $senha, null);
                    
                }//if
                
                
            }//WHILE
            
            mysqli_close($con);
            return "Usuário não encontrado";
            
        }//try
        catch(SQLException $ex){
            
            //FIXIT registrar em um log
          //  "Erro: ".$ex->
            
        }//catch
        
        
    }//buscaPessoa
    
    /**
     * Verifica qual entidade é a pessoa, Administrador, Aluno ou Professor
     * @param type $id CPF da pessoa
     * @return string Retorna uma string do tipo da pessoa
     */
    public function getPessoaTipo($id){
        
        try{
            
            $con = mysqli_connect("localhost", "root", "FELIXlix_9809", "SistemaEcolarShalon");
            
            if (mysqli_connect_errno()) {

               //"Erro ao fazer a conexão com o banco de dados ". mysqli_connect_error();
                
                return false;
                
            }//IF
            
            
            
            //XXX Teste tabela ADMINISTRADOR =============================================================
            $sql = "select cpf from Administrador" ;
            
            $query = mysqli_query($con,$sql);
            
            while($resultado = mysqli_fetch_array($query)){
                
                if($id == $resultado['cpf']){
                    
                    mysqli_close($con);
                    return "Administrador";
                    
                }//if
                
                
            }//While
            
            
            //XXX Teste tabela Aluno =============================================================
            $sql = "select cpf from Aluno" ;
            
            $query = mysqli_query($con,$sql);
            
            while($resultado = mysqli_fetch_array($query)){
                
                 if(strcmp($id,$resultado['cpf']) == 0){
                    
                    mysqli_close($con);
                    return "Aluno";
                    
                }//if
                
            }//While
            
             //XXX Teste tabela Professor =============================================================
            $sql = "select cpf from Professor";
            
            $query = mysqli_query($con,$sql);
            
            while($resultado = mysqli_fetch_array($query)){
                
                 if(strcmp($id,$resultado['cpf']) == 0){
                    
                    mysqli_close($con);
                    return "Professor";
                    
                }//if
                
            }//While
            
            mysqli_close($con);
            return "Entidade não encontrada";
            
       }//try
       
       catch(SQLException $ex){
           
           
           
       }//catch
        
        
    }//getPessoaTipo
    
    

}//Class




