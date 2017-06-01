<?php

// Created by Thiago Henrique Felix
// Arquivo responsável pela desativação das entidades

include_once '../class/control.class.php';

session_start();

echo 'removendo...';

$cpf = filter_input(INPUT_GET,cpf);
$entidade = filter_input(INPUT_GET,entidade);

$control = new control();

$return = $control->rmPessoa($cpf);


if($return){
    
 if(strcmp($entidade,"Adm")==0)   
    header("location:listAdm.php?id=".$_SESSION['id']."&aviso=<strong>Administrador desativado!</strong> Administrador foi desativado com sucesso.");
 if(strcmp($entidade,"Aluno")==0)
      header("location:listAllAluno.php?id=".$_SESSION['id']."&aviso=<strong>Aluno desativado!</strong> Aluno foi desativado com sucesso.");    
 if(strcmp($entidade,"Prof")==0)
       header("location:listAllProf.php?id=".$_SESSION['id']."&aviso=<strong>Professor desativado!</strong> Professor foi desativado com sucesso.");
 
}//if
else{
    
   if(strcmp($entidade,"Adm")==0)
     header("location:listAdm.php?id=".$_SESSION['id']."&aviso=<strong>Erro ao desativar!</strong> Ocorreu um erro ao tentar desativar o administrador.");
   if(strcmp($entidade,"Aluno")==0)
      header("location:listAllAluno.php?id=".$_SESSION['id']."&aviso=<strong>Erro ao desativar!</strong> Ocorreu um erro ao tentar desativar o aluno.");
   if(strcmp($entidade,"Prof")==0)
       header("location:listAllProf.php?id=".$_SESSION['id']."&aviso=<strong>Erro ao desativar!</strong> Ocorreu um erro ao tentar desativar o professor.");
   
}//else




