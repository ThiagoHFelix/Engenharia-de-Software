
<?php

//Create by Thiago Henrique Felix
//Class responsavel pelo controle da gerencia de dados

include_once 'model.class.php';
include_once '../log/logger.php';
include_once 'administrador.class.php';
include_once 'aluno.class.php';


class control {

    private $classModel = null;

    function __construct() {
       $this->classModel = new model();
    }

    /**
     * Valida os dados do login
     * @param string $id
     * @param string $senha
     * @return string
     */
    public function validaLogin($id, $senha) {


        if ((strcmp(trim($id), "") == 0) || (strcmp(trim($senha), "") == 0)) {
            return false;
        }//IF

        return $this->classModel->validaLoginBanco($id, $senha);
    }//validaLogin



    /**
     * Busca no banco de dados o administrador
     * @param type $cpf CPF do administrador
     * @return \Administrador Se encontrado retorna um objeto administrador, caso contrario retorna null
     */
    public function getAdm($cpf) {

        return $this->classModel->getAdm($cpf);
    }//getAdm



    /**
     * Busca no banco de dados o Aluno
     * @param type $cpf CPF do aluno
     * @return type Se encontrado retorna um objeto aluno, caso contrario retorna null
     */
    public function getAluno($cpf) {

        return $this->classModel->getAluno($cpf);
    }//getAluno



    /**
     * Busca no banco de dados o professor
     * @param type $cpf CPF do professor
     * @return type Se encontrado retorna um objeto professor, caso contrario retorna null
     */
    public function getProf($cpf) {

        return $this->classModel->getProfe($cpf);
        
    }//getProf


     /**
     * Registra um administrador no banco de dados
     * @param administrador $adm Um objeto da classe administrador
     * @return boolean true se realizar a operação com sucesso, caso contrário false
     */
    public function cadAdm(administrador $adm) {

        return $this->classModel->cadAdm($adm);
        
    }//cadAdm
    
    
    public function cadAluno(aluno $aluno){
        
        return $this->classModel->cadAluno($aluno);
        
    }//cadAluno
    
    public function cadProf(professor $prof){
        
        return $this->classModel->cadProfessor($prof);
        
    }//cadProf

    /**
     * Busca todos os administradores cadastrados no banco de dados
     * @return type Retorna código HTML. 
     */
    public function getAllAdm() {

        return $this->classModel->getAllAdm();
    }//getAllAdm
    
    /**
     * Busca todos os Alunos cadastrados no banco de dados
     * @return type Retorna código HTML. 
     */
    public function getAllAluno() {

        return $this->classModel->getAllAluno();
   
    }//getAllAluno
    
    /**
     * Busca todos os professores cadastrados no banco de dados
     * @return type Retorna código HTML. 
     */
    public function getAllProf() {

        return $this->classModel->getAllProf();

    }//getAllProf

    /**
     * Desativa uma pessoa
     * @param type $cpf
     * @return type
     */
    public function rmPessoa($cpf){
        
        return $this->classModel->rmPessoa($cpf);
        
    }//rmPessoa
    
    
    
    /**
     * Gera uma nova key unica para o banco de dados
     * 1 - RPF -> Registro Pessoa Fisica
     * 2 - RAD -> Registro Administrador
     * 3 - RA  -> Registro Aluno
     * 4 - RP  -> Registro Professor
     * 5 - RC  -> Registro Curso
     * 6 - RM  -> Registro Matéria
     * @param int $type Tipo de key
     * @return int key
     * @throws UnexpectedValueException Lançada de um valor diferente de 1-6 for passado
     */
    public function makeaNewKey(int $type) {
       return $this->classModel->makeaNewKey($type);
    }//makeaNewKey
    
}//Class



