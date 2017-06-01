<?php

// Created by Thiago Henrique Felix
// Class responsavel pela gerencia de dados com a base de dados

include_once '../log/logger.php';
include_once 'administrador.class.php';
include_once 'aluno.class.php';
include_once 'professor.class.php';

class model {

    /**
     * Construtor padrão
     */
    function __construct() {
        
    }

    /**
     * Verifica os dados de login no banco de dados
     * @param type $id CPF do usuário
     * @param type $senha SENHA do usuário
     * @return boolean true se existir registro desta pessoa no banco de dados e false se não existir
     */
    public function validaLoginBanco($id, $senha) {


        try {

            $con = $this->conecta();

            $sql = "select cpf,senha from Pessoa where status=1";

            $query = mysqli_query($con, $sql);


            while ($resultado = mysqli_fetch_array($query)) {

                if ((strcmp((string) $id, $resultado['cpf']) == 0) && (strcmp((string) $senha, $resultado['senha']) == 0)) {

                    mysqli_close($con);
                    return true;
                }//IF
            }//While


            mysqli_close($con);
            return false;
        }//try 
        catch (Exception $ex) {

            Logger("Exeption lançada Message: " . $ex->getMessage() . " <br/> Stack Trace: " . $ex->getTraceAsString());
            mysqli_close($con);
            return false;
        }//catch
    }

//validaLoginBanco

    /**
     * Faz conexão com o banco de dados.
     * @return type null se conexão falhar, e object da conexão caso conecte.
     */
    private function conecta() {

        try {

            $con = mysqli_connect("localhost", "root", "FELIXlix_9809", "BancoEscolaBeta");

            if (mysqli_connect_errno() == 0) {

                return $con;
            }//if
            else {
                Logger("Erro ao conectar com o banco de dados MESSAGE: " . mysqli_connect_error());
                return null;
            }//else
        }//try
        catch (SQLException $ex) {

            Logger("Erro ao tentar se conectar ao banco de dados, Exception gerada EXCEPTION: " . $ex->getMessage());
            return null;
        }//catch
    }

//conecta

    /**
     * Registra uma pessoa no banco de dados
     * @pessoa pessoa Pessoa a ser cadastrada
     */
    private function cadPessoa(pessoa $pessoa) {

        try {

            $con = $this->conecta();

            if ($con == null) {
                return false;
            }//IF

            $sql = "insert into Pessoa values(" . $pessoa->rpf . ",'" . $pessoa->primeironome . "','" . $pessoa->sobrenome . "','" . $pessoa->nascimento . "','" . $pessoa->cpf . "','" . $pessoa->rg . "','" . $pessoa->senha . "'," . $pessoa->status . ",'" . $pessoa->estado . "','" . $pessoa->rua . "','" . $pessoa->cep . "','" . $pessoa->bairro . "','" . $pessoa->cidade . "','" . $pessoa->foto . "')";
            Logger($sql); // Apenas para testes
            $resultado = mysqli_query($con, $sql);

            if (!$resultado) {
                Logger("Erro gerado no registro de uma Pessoa: " . mysqli_error($con));
                mysqli_close($con);
                return false;
            }//if

            $sql = "insert into email values (" . $pessoa->rpf . ",'" . $pessoa->email . "' )";

            $resultado = mysqli_query($con, $sql);

            if (!$resultado) {
                Logger("Erro ao cadastrar Email de: " . $pessoa->primeironome . " \t Error:" . mysqli_error($con));
                mysqli_close($con);
                return false;
            }//if


            $sql = "insert into Telefone values (" . $pessoa->rpf . ",'residencia','" . $pessoa->telefone . "' )";

            $resultado = mysqli_query($con, $sql);

            if (!$resultado) {
                Logger($sql);
                Logger("Erro ao cadastrar Telefone de: " . $pessoa->primeironome . " \t Error:" . mysqli_error($con));
                mysqli_close($con);
                return false;
            }//if

            mysqli_close($con);
            return $resultado;
        }//try
        catch (Exception $ex) {


            Logger("Exeption lançada - cadPessoa. Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysqli_close($con);
            return false;
        }//catch
    }

//cadPessoa

    /**
     * Registra um administrador no banco de dados
     * @param administrador $adm Um objeto da classe administrador
     * @return boolean true se realizar a operação com sucesso, caso contrário false
     */
    public function cadAdm(administrador $adm) {

        try {

            $con = $this->conecta();

            if ($con == null) {
                return false;
            }//IF

            if ($this->cadPessoa($adm)) {
                Logger("Sucesso ao cadastrar pessoa");
            }//IF
            else {
                Logger("Erro ao cadastrar pessoa");
                return false;
            }//ELSE

            $sql = "insert into Administrador values (" . $adm->rad . "," . $adm->rpf . ") ";
            Logger($sql); // teste

            $resultado = mysqli_query($con, $sql);

            mysqli_close($con);

            return $resultado;
        }//try
        catch (Exception $ex) {

            mysqli_close($con);
            Logger("Exeption lançada - cadAdm. Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            return false;
        }//catch
    }

//cadAdm

    /**
     * Registra um aluno no banco de dados
     * @param aluno $aluno Um objeto da classe aluno
     * @return boolean true se realizar a operação com sucesso, caso contrário false
     */
    public function cadAluno(aluno $aluno) {

        try {

            $con = $this->conecta();

            if ($con == null) {
                return false;
            }//IF

            if (!$this->cadPessoa($aluno)) 
                    return false;

            $sql = "insert into Aluno values(" . $aluno->ra . "," . $aluno->rpf . ",'" . $aluno->qualificacoes . "')";

            $resultado = mysqli_query($con, $sql);

            mysqli_close($con);

            return $resultado;
        }//try
        catch (Exception $ex) {

            mysqli_close($con);
            Logger("Exeption lançada - cadAluno. Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            return false;
        }//catch
    }

//cadAluno

    /**
     * Registra um professor no banco de dados
     * @param professor $prof Um objeto da classe professor
     * @return boolean true se realizar a operação com sucesso, caso contrário false
     */
    public function cadProfessor(professor $prof) {

        try {

            $con = $this->conecta();

            if ($con == null) {
                return false;
            }//IF

            if (!$this->cadPessoa($prof))
                    return false;

            $sql = "insert into Professor values(" . $prof->rp . "," . $prof->rpf . ")";

            $resultado = mysqli_query($con, $sql);

            mysqli_close($con);

            return $resultado;
        }//try
        catch (Exception $ex) {

            mysqli_close($con);
            Logger("Exeption lançada - cadProf. Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            return false;
        }//catch
    }

//cadProfessor

    /**
     * Busca aluno no banco de dados a partir de seu CPF
     * @param int $cpf CPF do aluno
     * @return \aluno Retorna um objeto aluno se encontrado, caso contrario retorna null
     */
    public function getAluno($cpf) {

        try {

            $con = $this->conecta();

            if ($con == null) {


                return null;
            }//IF


            $sql = "select foto,ra,qualificacoes,Aluno.rpf,primeiro_nome,sobrenome,nascimento,cpf,rg,senha,status,estado,rua,cep,bairro,cidade from Aluno, Pessoa  where Pessoa.RPF = Aluno.RPF and Pessoa.status = 1";


            $query = mysqli_query($con, $sql);


            while ($resultado = mysqli_fetch_array($query)) {


                if ($resultado['cpf'] == $cpf) {

                    $aluno = new aluno($resultado['foto'], $resultado['ra'], $resultado['qualificacoes'], $resultado['rpf'], $resultado['cpf'], $resultado['rg'], $resultado['bairro'], $resultado['cidade'], $resultado['estado'], $resultado['rua'], $resultado['cep'], $resultado['primeiro_nome'], $resultado['sobrenome'], $resultado['nascimento'], $resultado['senha'], null, null, $resultado['status']);
                    mysqli_close($con);
                    return $aluno;
                }//if
            }//while


            mysqli_close($con);
            return null;
        }//try
        catch (Exception $ex) {


            Logger("Exeption lançada - getAluno. Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());

            mysql_close($con);
            return null;
        }//catch
    }

//getAluno

    /**
     * BUsca professor no banco de dados a partir de seu CPF
     * @param int $cpf CPF do professor 
     * @return \professor Retorna um objeto professor se encontrado, caso contrario retorna null
     */
    public function getProfe($cpf) {

        try {

            $con = $this->conecta();


            if ($con == null) {

                return null;
            }//IF

            $sql = "select foto,Professor.rp,Professor.rpf,primeiro_nome,sobrenome,nascimento,cpf,rg,senha,status,estado,rua,cep,bairro,cidade from Professor, Pessoa  where Pessoa.RPF = Professor.RPF and Pessoa.status = 1";

            $query = mysqli_query($con, $sql);

            while ($resultado = mysqli_fetch_array($query)) {

                if ($resultado['cpf'] == $cpf) {

                    $prof = new professor($resultado['foto'], $resultado['rp'], $resultado['status'], $resultado['cpf'], $resultado['rg'], $resultado['bairro'], $resultado['cidade'], $resultado['estado'], $resultado['rua'], $resultado['cep'], $resultado['primeiro_nome'], $resultado['sobrenome'], $resultado['nascimento'], $resultado['senha']);
                    mysqli_close($con);
                    return $prof;
                }//if
            }//while


            mysqli_close($con);
            return null;
        }//try
        catch (Exception $ex) {

            Logger("Exeption lançada - getProf. Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysql_close($con);
            return null;
        }//catch
    }

//getProf

    /**
     * Busca um administrador no banco de dados a partir de seu CPF
     * @param  $cpf Cpf do administrador
     * @return \administrador Retorna um objeto administrador se encontrado, caso contrario retorna null.
     */
    public function getAdm($cpf) {

        try {


            $con = $this->conecta();


            if ($con == null) {

                return null;
            }//IF

            $email = null;
            $telefone = null;

            $sql = "select Telefone.numero from Telefone,Pessoa where Telefone.rpf = Pessoa.rpf and Pessoa.cpf = '" .$cpf."'";

            $query = mysqli_query($con, $sql);

            $resultado = mysqli_fetch_array($query);

            if ($resultado == null) {
                Logger("Não foi possivel encontrar o Telefone do CPF: " . $cpf . " \t Error :" . mysqli_error($con));
            }//if        
            else {
                $telefone = $resultado['numero'];
            }//else        
            //===========================================================================================================          
            $sql = "select email from email,Pessoa where email.rpf = Pessoa.rpf and Pessoa.cpf = '" . $cpf."'";

            $query = mysqli_query($con, $sql);

            $resultado = mysqli_fetch_array($query);

            if ($resultado == null) {
                Logger("Não foi possivel encontrar o Email do CPF: " . $cpf . " \t Error :" . mysqli_error($con));
            }//if        
            else {
                $email = $resultado['email'];
            }//else        
            //==============================================================================================

            $sql = "select foto,rad,Administrador.rpf,primeiro_nome,sobrenome,nascimento,cpf,rg,senha,status,estado,rua,cep,bairro,cidade from Administrador, Pessoa  where Pessoa.RPF = Administrador.RPF and Pessoa.status = 1";

            $query = mysqli_query($con, $sql);

            while ($resultado = mysqli_fetch_array($query)) {

                if ($resultado['cpf'] == $cpf) {

                    $adm = new administrador($resultado['foto'], $resultado['rad'], $resultado['rpf'], $resultado['cpf'], $resultado['rg'], $resultado['bairro'], $resultado['cidade'], $resultado['estado'], $resultado['rua'], $resultado['cep'], $resultado['primeiro_nome'], $resultado['sobrenome'], $resultado['nascimento'], $resultado['senha'], $telefone, $email, $resultado['status']);
                    mysqli_close($con);
                    return $adm;
                }//if
            }//while


            mysqli_close($con);
            return null;
        }//try
        catch (Exception $ex) {

            Logger("Exeption lançada. - getAdm Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysql_close($con);
            return null;
        }//catch
    }

//getAdm

    /**
     * Busca todos os registros dos Administradores no banco de dados
     * @return string Retorna uma string com o código HTML
     */
    public function getAllAdm() {


        try {


            $con = $this->conecta();


            if ($con == null) {

                return null;
            }//IF


            $sql = "select rad,Administrador.rpf,primeiro_nome,sobrenome,nascimento,cpf,rg,senha,status,estado,rua,cep,bairro,cidade from Administrador, Pessoa  where Pessoa.RPF = Administrador.RPF and Pessoa.status = 1";


            $query = mysqli_query($con, $sql);

            while ($resultado = mysqli_fetch_array($query)) {

                $mais_informacoes = "infoAdm.php?cpf=" . $resultado['cpf'];
                $alter = "alterAdm.php?cpf=" . $resultado['cpf'];
                $rm = "rmPessoa.php?&cpf=" . $resultado['cpf']."&entidade=Adm";
                $html = $html . "
                 
       <div class=\"panel panel-default\" style=\"width:900px; margin-top:5px; margin-bottom:5px;\" >
                 <div class=\"panel-body\">
                 
                  <div id=\"name\" style=\"width:200px; margin-right: 50px;float:left; \" > Nome: " . $resultado['primeiro_nome'] . " " . $resultado['sobrenome'] . " </div>
                  <div id=\"cpf\" style=\" width:200px;float:left; \" > CPF: " . $resultado['cpf'] . " </div>
                  <div id=\"mais\" style=\"width:150px; float: left; margin-right: 1px; position:static \"> <a href=" . $mais_informacoes . " >Mais Informações </a> </div>
                  <div id=\"alter\" style=\"width:100px; float: left; margin-right: 1px; position:static \"> <a href=$alter > Alterar </a> </div>
                  <div id=\"remove\" style=\"width:100px; float: left; margin-right: 1px; position:static \"> <a href=" . $rm . " > Desativar </a> </div>
                  
                </div> 
        </div>        
                 ";
            }//while


            mysqli_close($con);
            return $html;
        }//try
        catch (Exception $ex) {

            Logger("Exeption lançada. - getAllAdm Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysql_close($con);
            return null;
        }//catch
    }

//getAllAdm
    /**
     * Busca todos os registros dos Alunos no banco de dados
     * @return string Retorna uma string com o código HTML
     */
    public function getAllAluno() {


        try {


            $con = $this->conecta();


            if ($con == null) {

                return null;
            }//IF



            $sql = "select foto,ra,Aluno.rpf,Aluno.Qualificacoes,primeiro_nome,sobrenome,nascimento,cpf,rg,senha,status,estado,rua,cep,bairro,cidade from Aluno, Pessoa  where Aluno.RPF = Pessoa.RPF and Pessoa.status = 1";


            $query = mysqli_query($con, $sql);

            while ($resultado = mysqli_fetch_array($query)) {

                // $adm = new administrador($resultado['rad'], $resultado['rpf'], $resultado['cpf'], $$resultado['rg'], $resultado['bairro'], $resultado['cidade'], $resultado['estado'], $resultado['rua'], $resultado['cep'], $resultado['primeiro_nome'], $resultado['sobrenome'], $resultado['nascimento'], $resultado['senha'], null, null, $resultado['status']);
                // $mais_informacoes = "infoAluno.php?id=\$id&foto=".$resultado['foto']."&primeiro_nome=".$resultado['primeiro_nome']."&sobrenome=".$resultado['sobrenome']."&nascimento=".$resultado['nascimento']."&cpf=".$resultado['cpf']."&rg=".$resultado['rg']."&senha=".$resultado['senha']."&status=".$resultado['status']."&estado=".$resultado['estado']."&rua=".$resultado['rua']."&cep=".$resultado['cep']."&bairro=".$resultado['bairro']."&cidade=".$resultado['cidade'];   
                $mais_informacoes = "infoAluno.php?cpf=" . $resultado['cpf'];
                $alter = "alterAluno.php?cpf=" . $resultado['cpf'];
                $rm = "rmPessoa.php?&cpf=" . $resultado['cpf']."&entidade=Aluno";
                $html = $html . "
                 
       <div class=\"panel panel-default\" style=\"width:900px; margin-top:5px; margin-bottom:5px;\" >
                 <div class=\"panel-body\">
                 
                  <div id=\"name\" style=\"width:200px; margin-right: 50px;float:left; \" > Nome: " . $resultado['primeiro_nome'] . " " . $resultado['sobrenome'] . " </div>
                  <div id=\"cpf\" style=\" width:200px;float:left; \" > CPF: " . $resultado['cpf'] . " </div>
                  <div id=\"mais\" style=\"width:150px; float: left; margin-right: 1px; position:static \"> <a href=" . $mais_informacoes . " >Mais Informações </a> </div>
                  <div id=\"alter\" style=\"width:100px; float: left; margin-right: 1px; position:static \"> <a href=$alter > Alterar </a> </div>
                  <div id=\"remove\" style=\"width:100px; float: left; margin-right: 1px; position:static \"> <a href=" . $rm . " > Desativar </a> </div>
                  
                </div> 
        </div>        
                 ";
            }//while


            mysqli_close($con);
            return $html;
        }//try
        catch (Exception $ex) {

            Logger("Exeption lançada. - getAllAluno Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysql_close($con);
            return null;
        }//catch  
    }

//getAllAluno

    /**
     * Busca todos os registros dos Alunos no banco de dados
     * @return string Retorna uma string com o código HTML
     */
    public function getAllProf() {



        try {


            $con = $this->conecta();


            if ($con == null) {

                return null;
            }//IF



            $sql = "select Professor.RP,Professor.rpf,primeiro_nome,sobrenome,nascimento,cpf,rg,senha,status,estado,rua,cep,bairro,cidade from Professor, Pessoa  where Professor.RPF = Pessoa.RPF and Pessoa.status = 1";


            $query = mysqli_query($con, $sql);

            while ($resultado = mysqli_fetch_array($query)) {

                $mais_informacoes = "infoProf.php?cpf=" . $resultado['cpf'];
                $alter = "alterProf.php?cpf=" . $resultado['cpf'];
                $rm = "rmPessoa.php?&cpf=" . $resultado['cpf']."&entidade=Prof";
                $html = $html . "
                 
       <div class=\"panel panel-default\" style=\"width:900px; margin-top:5px; margin-bottom:5px;\" >
                 <div class=\"panel-body\">
                 
                  <div id=\"name\" style=\"width:200px; margin-right: 50px;float:left; \" > Nome: " . $resultado['primeiro_nome'] . " " . $resultado['sobrenome'] . " </div>
                  <div id=\"cpf\" style=\" width:200px;float:left; \" > CPF: " . $resultado['cpf'] . " </div>
                  <div id=\"mais\" style=\"width:150px; float: left; margin-right: 1px; position:static \"> <a href=" . $mais_informacoes . " >Mais Informações </a> </div>
                  <div id=\"alter\" style=\"width:100px; float: left; margin-right: 1px; position:static \"> <a href=$alter > Alterar </a> </div>
                  <div id=\"remove\" style=\"width:100px; float: left; margin-right: 1px; position:static \"> <a href=" . $rm . " > Desativar </a> </div>
                  
                </div> 
        </div>        
                 ";
            }//while


            mysqli_close($con);
            return $html;
        }//try
        catch (Exception $ex) {

            Logger("Exeption lançada. - getAllProf Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysql_close($con);
            return null;
        }//catch  
    }

//getAllProf

    public function cadAviso(string $aviso, $ra) {



        try {

            $con = $this->conecta();

            if ($con == null) {
                return false;
            }//IF

            $this->cadPessoa($adm);

            $sql = "    ";


            $resultado = mysqli_query($con, $sql);

            mysqli_close($con);

            return $resultado;
        }//try
        catch (Exception $ex) {

            mysqli_close($con);
            Logger("Exeption lançada - cadAviso. Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            return false;
        }//catch
    }

//cadAviso

    /**
     * Remove a pessoa baseado no CPF informado
     * @param type $cpf CPF da Pessoa 
     * @return boolean True se a pessoa for achado e false se não for
     */
    public function rmPessoa($cpf) {


        try {


            $con = $this->conecta();


            if ($con == null) {

                return false;
            }//IF



            $sql = "update Pessoa set status = 0 where Pessoa.cpf = '".$cpf."'";

            $return = mysqli_query($con, $sql);

            mysqli_close($con);
            return $return;
        }//try
        catch (Exception $ex) {

            Logger("Exeption lançada. - rmPessoa Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysql_close($con);
            return false;
        }//catch
    }

//rmAdm

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



        try {


            $con = $this->conecta();


            if ($con == null) {

                return false;
            }//IF

            switch ($type) {

                case 1: $sql = "select max(rpf)'result' from Pessoa";

                    break;
                case 2: $sql = "select max(rad) 'result' from Administrador";

                    break;
                case 3: $sql = "select max(ra)'result' from Aluno";

                    break;
                case 4: $sql = "select max(rp) 'result' from Professor";

                    break;
                case 5: $sql = "select max(rc) 'result' from Curso";

                    break;
                case 6: $sql = "select max(rm) 'result' from Materia";

                    break;

                default: throw new UnexpectedValueException("Unexpected Value");
            }//switch



            $query = mysqli_query($con, $sql);
            mysqli_close($con);
            $resultado = mysqli_fetch_array($query);
            return ++$resultado['result'];
        }//try
        catch (Exception $ex) {

            Logger("Exeption lançada. - MakeaNewKey Message: " . $ex->getMessage() . " Strack Trace: " . $ex->getTraceAsString());
            mysql_close($con);
            return 1;
        }//catch
    }

//makeNewKey
}

//Class






