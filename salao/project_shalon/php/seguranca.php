<?php


if($_SESSION['usuario_cpf'] == "" || $_SESSION['usuario_nome'] == ""){
    
    unset($_SESSION['usuario_cpf'], $_SESSION['usuario_nome']);
    
     header("Location: ../pagina_login.php");
}

