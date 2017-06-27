<?php
	
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para cadastro de dados na tabela pessoa.
	*/	 

	session_start();

	include_once("conecta.php");

	$connect = conecta();

	#Dados  dos formulário de cadastro de dados pessoais.
	 $_SESSION['nome'] = $_POST['nome'];
	 $_SESSION['email'] = $_POST['email'];
	 $_SESSION['cpf'] = $_POST['cpf'];
	 $_SESSION['data']= $_POST['data'];	 	 
	 $_SESSION['cep'] = $_POST['cep'];
	 $_SESSION['bairro'] = $_POST['bairro'];
	 $_SESSION['rua'] = $_POST['rua'];
	 $_SESSION['numero'] = $_POST['numero'];
	 $_SESSION['cidade'] = addslashes($_POST['cidade']);
	 $_SESSION['estado'] = $_POST['estado'];
	 $_SESSION['sexo'] = $_POST['sexo'];
	 $_SESSION['rg'] = $_POST['rg'];
	 $_SESSION['tel'] = $_POST['tel'];
	 $_SESSION['cel'] = $_POST['cel'];	
		 

	#Código para verificar o valor do radiobutton relacionado ao sexo da pessoa.
	 if($_SESSION['sexo'] == 'masculino'){
	 	$_SESSION['sexo'] = 1;
	 }else{
	 	$_SESSION['sexo'] = 0;
	 }

	$result = mysqli_query($connect, "select cpf from pessoa where cpf = '".$_SESSION['cpf']."'");
	$result2 = mysqli_query($connect, "select email from pessoa where email = '".$_SESSION['email']."'");	

	if(mysqli_num_rows($result2) >= 1){
		header("Location:../dist/pagina_erro.php"); 
	}elseif(mysqli_num_rows($result) >= 1){	 
	 	header("Location:../dist/pagina_erro.php"); 
	}else{
		header("Location:../dist/cad_cliente.php?cpf=".$_SESSION['cpf']."&sexo=".$_SESSION['sexo']);
	}


?>

