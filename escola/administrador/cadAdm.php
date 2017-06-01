<?php

// Created Thiago Henrique Felix
// Arquivo responsavel 

echo 'Carregando...';

session_start();

//Includes
include_once '../class/administrador.class.php';
include_once './../class/control.class.php';


$foto = filter_input(INPUT_GET, foto);
$primeiroNome = filter_input(INPUT_GET, primeiroNome);
$sobrenome = filter_input(INPUT_GET, sobrenome);
$email = filter_input(INPUT_GET, email);
$cpf = filter_input(INPUT_GET, cpf);
$rg = filter_input(INPUT_GET, rg);
$cep = filter_input(INPUT_GET, cep);
$rua = filter_input(INPUT_GET, rua);
$bairro = filter_input(INPUT_GET, bairro);
$cidade = filter_input(INPUT_GET, cidade);
$estado = filter_input(INPUT_GET, estado);
$telefone = filter_input(INPUT_GET, telefone);
$senha = filter_input(INPUT_GET, senha);
$confsenha = filter_input(INPUT_GET, confsenha);
$status = filter_input(INPUT_GET, status);
$ano = filter_input(INPUT_GET, ano);
$mes = filter_input(INPUT_GET, mes);
$dia = filter_input(INPUT_GET, dia);






//Valor correspondente ao mês

if (strcmp($mes, "Janeiro") == 0) {
    $numMes = 1;
}//IF
elseif (strcmp($mes, "Fevereiro") == 0) {
    $numMes = 2;
}//elseif
elseif (strcmp($mes, "Março") == 0) {
    $numMes = 3;
}//elseif
elseif (strcmp($mes, "Abril") == 0) {
    $numMes = 4;
}//elseif
elseif (strcmp($mes, "Maio") == 0) {
    $numMes = 5;
}//elseif
elseif (strcmp($mes, "Junho") == 0) {
    $numMes = 6;
}//elseif
elseif (strcmp($mes, "Julho") == 0) {
    $numMes = 7;
}//elseif
elseif (strcmp($mes, "Agosto") == 0) {
    $numMes = 8;
}//elseif
elseif (strcmp($mes, "Setembro") == 0) {
    $numMes = 9;
}//elseif
elseif (strcmp($mes, "Outubro") == 0) {
    $numMes = 10;
}//elseif
elseif (strcmp($mes, "Novembro") == 0) {
    $numMes = 11;
}//elseif
elseif (strcmp($mes, "Dezembro") == 0) {
    $numMes = 12;
}//elseif

$data = $ano . "/" . $numMes . "/" . $dia;



//Verificação dos dados
//Obrigatórios
if (strcmp($primeiroNome, "") == 0 || strcmp($senha, "") == 0 || strcmp($confsenha, "") == 0 || strcmp($cpf, "") == 0) {

    header("location:./CadastroAdministrador.php?id=" . $_SESSION['id'] . "&aviso=Preencha todos os campos obrigatórios&primeiro_nome=" . $primeiroNome . "&sobrenome=" . $sobrenome . "&email=" . $email . "&cpf=" . $cpf . "&rg=" . $rg . "&cep=" . $cep . "&rua=" . $rua . "&bairro=" . $bairro . "&cidade=" . $cidade . "&estado=" . $estado . "&telefone=" . $telefone . "&senha=" . $senha . "&confsenha=" . $confsenha);

}//IF
elseif(strlen($cpf)<14 || ($telefone!="" && strlen($telefone)<14) || ($cep!="" && strlen($cep)<9) ){
    
    header("location:./CadastroAdministrador.php?id=" . $_SESSION['id'] . "&aviso=<strong>Opa, um erro ocorreu,</strong> verifique se há atributos incompletos&primeiro_nome=" . $primeiroNome . "&sobrenome=" . $sobrenome . "&email=" . $email . "&cpf=" . $cpf . "&rg=" . $rg . "&cep=" . $cep . "&rua=" . $rua . "&bairro=" . $bairro . "&cidade=" . $cidade . "&estado=" . $estado . "&telefone=" . $telefone . "&senha=" . $senha . "&confsenha=" . $confsenha);    
    
}//ELSEIF
elseif (!strcmp($senha, $confsenha) == 0) {

    header("location:./CadastroAdministrador.php?id=" . $_SESSION['id'] . "&aviso=Confirmação de senha incorreta&primeiro_nome=" . $primeiroNome . "&sobrenome=" . $sobrenome . "&email=" . $email . "&cpf=" . $cpf . "&rg=" . $rg . "&cep=" . $cep . "&rua=" . $rua . "&bairro=" . $bairro . "&cidade=" . $cidade . "&estado=" . $estado . "&telefone=" . $telefone . "&senha=" . $senha . "&confsenha=" . $confsenha);
}//ELSEIF
else {

    //Verificação da data
    if (!checkdate($numMes, $dia, $ano))
        header("location:./CadastroAdministrador.php?id=" . $_SESSION['id'] . "&aviso=Data Inválida&primeiro_nome=" . $primeiroNome . "&sobrenome=" . $sobrenome . "&email=" . $email . "&cpf=" . $cpf . "&rg=" . $rg . "&cep=" . $cep . "&rua=" . $rua . "&bairro=" . $bairro . "&cidade=" . $cidade . "&estado=" . $estado . "&telefone=" . $telefone . "&senha=" . $senha . "&confsenha=" . $confsenha);


    if (strcmp($status, "Ativo") == 0)
        $status = 1;
    else
        $status = 0;
    $controle = new control();
    //Telefone não informado
    $novoAdm = new administrador($foto, $controle->makeaNewKey(2), $controle->makeaNewKey(1), $cpf, $rg, $bairro, $cidade, $estado, $rua, $cep, $primeiroNome, $sobrenome, $data, $senha, $telefone, $email, $status);
    $result = $controle->cadAdm($novoAdm);
    if ($result) {
        
        header("location:./CadastroAdministrador.php?id=" . $_SESSION['id'] . "&aviso=Cadastro realizado com sucesso");
    }//ELSE
    else {

        header("location:./CadastroAdministrador.php?id=" . $_SESSION['id'] . "&aviso=Desculpe, não foi possível realizar o cadastro&primeiro_nome=" . $primeiroNome . "&sobrenome=" . $sobrenome . "&email=" . $email . "&cpf=" . $cpf . "&rg=" . $rg . "&cep=" . $cep . "&rua=" . $rua . "&bairro=" . $bairro . "&cidade=" . $cidade . "&estado=" . $estado . "&telefone=" . $telefone . "&senha=" . $senha . "&confsenha=" . $confsenha);
    }//ELSE
}//ELSE
       