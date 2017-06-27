<?php
   

include_once("../conexao.php");
   
/* @var $nome type */
   $nome = $_POST['at_nome'];
   $rg = $_POST['at_rg'];
   $cpf = $_POST['at_cpf'];
   $senha = $_POST['at_senha'];
   $cep = $_POST['cep'];
   $bairro = $_POST['at_bairro'];
   $rua = $_POST['at_rua'];
   $cidade = $_POST['at_cidade'];
   $estado = $_POST['at_estado'];
   $senha = $_POST['at_senha'];
   $sexo = $_POST['at_sexo'];
   $patologias = $_POST['at_patologias'];
   $gestante = $_POST['at_gestante'];
   $cardiaco = $_POST['at_cardiaco'];
   $hipertenso = $_POST['at_hipertenso'];
   

  
 $update  = mysqli_query($conectar, "UPDATE pessoa as pe, cliente as cli set pe.nome='$nome', pe.rg='$rg', pe.rua='$rua', pe.cep='$cep', pe.bairro='$bairro', pe.sexo='$sexo', cli.senha='$senha', cli.patologias='$patologias', cli.gestante='$gestante', cli.cardiaco='$cardiaco', cli.hipertenso='$hipertenso'  where pe.cpf='$cpf'");
   
header("Location: ../pagina_usuario.php");