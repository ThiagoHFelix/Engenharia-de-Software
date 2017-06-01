<?php

// Created by Thiago Henrique Felix
// Arquivo responsavel pela autenticação

include_once "../class/control.class.php";


$cpf = filter_input(INPUT_POST, id);
$senha = filter_input(INPUT_POST, senha);

//Verfica se uma sessão já foi iniciada.
if (isset($_SESSION['id'])) {

    $num = $_SESSION['id'];

    if (strcmp($_SESSION['entidade'], "Administrador") == 0) {
        header("location: ../administrador/index.php?id=$num");
    }//if
    elseif (strcmp($_SESSION['entidade'], "Aluno") == 0) {
        header("location:../aluno/index.php?id=$num");
    }//elseif
    elseif (strcmp($_SESSION['entidade'], "Professor") == 0) {
        header("location:../professor/index.php?id=$num");
    }//elseif
}//if

$controle = new control;

echo "carregando...";

//Verifico se os dados constam no banco de dados
$result = $controle->validaLogin($cpf, $senha);


if ($result) {

    //XXX Dados corretos, inicio a session
    $num = rand(1000000, 10000000000000);
    session_start();

    $infoPessoa = $controle->getAdm($cpf);
    //XXX Verifico se a busca foi bem sucedida 
    if ($infoPessoa != null) {

        $_SESSION['nome'] = $infoPessoa->primeironome;
        $_SESSION['sobrenome'] = $infoPessoa->sobrenome;
        $_SESSION['id'] = $num;
        $_SESSION['entidade'] = "Administrador";
        header("location: ../administrador/index.php?id=$num");
    }//IF
    else {
        $infoPessoa = $controle->getAluno($cpf);

        if ($infoPessoa != null) {
            $_SESSION['nome'] = $infoPessoa->primeironome;
            $_SESSION['sobrenome'] = $infoPessoa->sobrenome;
            $_SESSION['id'] = $num;
            $_SESSION['entidade'] = "Aluno";
            header("location:../aluno/index.php?id=$num");
        }//IF
        else {
            $infoPessoa = $controle->getProf($cpf);

            if ($infoPessoa != null) {

                $_SESSION['nome'] = $infoPessoa->primeironome;
                $_SESSION['sobrenome'] = $infoPessoa->sobrenome;
                $_SESSION['id'] = $num;
                $_SESSION['entidade'] = "Professor";
                header("location:../professor/index.php?id=$num");
            }//IF
        }//else
    }//ELSE

}//if
else {

    //XXX Erro 150 = Dados invalidos
    header("location: index.php?id=150");
    
}//else
   
   