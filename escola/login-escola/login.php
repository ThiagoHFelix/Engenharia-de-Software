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
    $num = rand(1000000,10000000000000);
    session_start();
    $_SESSION['id'] = $num;
    header("location: ../administrador/index.php?id=$num");
}//if
else{
header("location: index.php?id=404");
}//else



