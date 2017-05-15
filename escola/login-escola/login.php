<?php

// Created by Thiago Henrique Felix

include_once "../class/system/control.php";

$id = filter_input(INPUT_POST, id);
$senha = filter_input(INPUT_POST, senha);

$controle = new control();

echo "carregando...";

//Verifico se os dados constam no banco de dados
$result = $controle->validaLogin($id, $senha);

if ($result) {
    //Dados corretos, inicio a session
    $num = rand(1000000, 10000000000000);
    session_start();

    //XXX busco os dados de pessoa e registro na session
    $infoPessoa = $controle->getDadosPessoa($id, $senha);
        
    //XXX Verifico se a busca foi bem sucedida 
    if ($infoPessoa != false) {

       $_SESSION = $infoPessoa;
       // var_dump($_SESSION);
        
    }//IF
       
    $_SESSION['id'] = $num;
    //Busco o tipo de entidade da pessoa logada. EX: Administador, Aluno ou Professor
    $_SESSION['entidade'] = $controle->getEntidadeTipo($id);
    
   if(strcmp($_SESSION['entidade'],"Administrador")==0){
         header("location: ../administrador/index.php?id=$num");
     }//if
    elseif(strcmp($_SESSION['entidade'],"Aluno")==0){
        header("location:../aluno/index.php?id=$num");
    }//elseif
    elseif(strcmp($_SESSION['entidade'],"Professor")==0){
        header("location:../professor/index.php?id=$num");
    }//elseif
     
}//if
else {
    
    //XXX Erro 150 = Dados invalidos
    header("location: index.php?id=150");
    
}//else


    
