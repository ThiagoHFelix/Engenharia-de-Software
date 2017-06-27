<?php

	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para o cadastro de procedimento.

	*/
	session_start();
	#Conexão com o banco de dados.
	
	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	
	
	#Dados vindos do formulário de cadastro de procedimentos.
	$cpf   = $_POST['cpf'];
	$marca = $_POST['marca'];
	$ox    = $_POST['ox'];
	$res   = $_POST['res'];
	$nproc = $_POST['nproc'];
	$tipo  = $_POST['tipo'];
	$pont  = $_POST['pont'];	
	
	#Comando em sql para verificar se o cpf informado é válido.
	$result = mysqli_query($connect, "select ID from cliente where cpf = '".$cpf."';")or die(mysqli_error($connect));

	/*Neste if, se o cpf for inválido é adicionado a variável $_SESSION["resposta"] = "false" e o usuário é redirecionado 
	para o formulário de cadastro de procedimento, caso contrário é feito a inserção dos dados do procedimento na tabela 
	procedimento e o usuário é redirecionado para o mesmo formulário.*/
	if(mysqli_num_rows($result)==0 || mysqli_num_rows($result)>1){
		$_SESSION["resposta"] = "false";
		header("Location:../dist/cad_procedimento.php");					
	}else{
		$id = mysqli_fetch_assoc($result);		
			$result = mysqli_query($connect, "insert into procedimento (ID_Cliente, Marca, Tipo_OX, Resultado, Nome_pro, Pontuacao, Tipo, data) values( ".$id["ID"]." , '".$marca."', '".$ox."', '".$res."', '".$nproc."', '".$pont."', '".$tipo."', '20".date("y/m/d")."');")or die(mysqli_error($connect));
		
		$_SESSION["resposta"] = "true";
		header("Location:../dist/cad_procedimento.php");
	}
	
	mysqli_close($connect);
?>