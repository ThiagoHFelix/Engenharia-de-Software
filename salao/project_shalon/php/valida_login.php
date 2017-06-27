<?php

session_start();

include_once('../conexao.php');

$user_cpf = $_POST['usercpf'];
$user_senha = $_POST['usersenha'];

$sql = "SELECT pe.nome, pe.email, cl.senha FROM pessoa as pe, cliente as cl WHERE pe.cpf=cl.cpf AND pe.email='".$user_cpf."' AND cl.senha='".$user_senha."' LIMIT 1";
    
echo $sql;
$result = mysqli_query($conectar, $sql);

$pesquisa = mysqli_fetch_assoc($result);


if(empty($pesquisa)){
    header("Location: ../pagina_erro.php");
}else{    
    
    $_SESSION['usuario_cpf'] = $pesquisa['cpf'] ;      
    $_SESSION['usuario_nome'] = $pesquisa['nome'];    
    
    header("Location: ../pagina_usuario.php");
}

