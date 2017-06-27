<?php
	
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para cadastro de dados na tabela pessoa.
	*/	 

	session_start();

	function conecta(){
		$connect = mysqli_connect('localhost','root','', 'projeto shalon');
		return $connect;
	}

	#Dados  dos formulário de cadastro de dados pessoais.
	 $_SESSION['nome'] = $_POST['nome'];
	 $_SESSION['email'] = $_POST['email'];
	 $_SESSION['cpf'] = $_POST['cpf'];
	 $_SESSION['data']= $_POST['data'];	 	 
	 $_SESSION['cep'] = $_POST['cep'];
	 $_SESSION['bairro'] = $_POST['bairro'];
	 $_SESSION['rua'] = $_POST['rua'];
	 $_SESSION['numero'] = $_POST['numero'];
	 $_SESSION['cidade'] = $_POST['cidade'];
	 $_SESSION['estado'] = $_POST['estado'];
	 $_SESSION['sexo'] = $_POST['sexo'];
	 $_SESSION['rg']= $_POST['rg'];
	 $_SESSION['tel'] = $_POST['tel'];
	 $_SESSION['cel'] = $_POST['cel'];	
		 

	#Código para verificar o valor do radiobutton relacionado ao sexo da pessoa.
	 if($_SESSION['sexo'] == 'masculino'){
	 	$_SESSION['sexo'] = 1;
	 }else{
	 	$_SESSION['sexo'] = 0;
	 }

	$result = mysqli_query(conecta(), "insert into pessoa (cpf, nome, data_nasc, rg, email, rua, cep, bairro, cidade, estado, sexo, numero) values('". $_SESSION['cpf']."', '". $_SESSION['nome']."', '". $_SESSION['data']."', '". $_SESSION['rg']."', '". $_SESSION['email']."', '". $_SESSION['rua']."', '". $_SESSION['cep']."', '". $_SESSION['bairro']."', '". $_SESSION['cidade']."', '". $_SESSION['estado']."', ". $_SESSION['sexo'].", ". $_SESSION['numero'].")")or die(mysqli_error(conecta()));
	
	echo "Error description: " . mysqli_error(conecta()); 			

	if(isset($_SESSION['tel'])){	 	
	 	$result = mysqli_query(conecta(), "insert into telefone values('".$_SESSION['cpf']."', '".$_SESSION['tel']."')")or die(mysqli_error(conecta()));
	}
	
	if (isset($_SESSION['cel'])) {
	 	$result = mysqli_query(conecta(), "insert into telefone values('".$_SESSION['cpf']."', '".$_SESSION['cel']."')")or die(mysqli_error(conecta()));
	}

	$result = mysqli_query(conecta(), "insert into administrador (cpf, senha) values('".$_SESSION['cpf']."', '".$_POST['senha']."')")or die(mysqli_error(conecta()));
	 
	 

?>