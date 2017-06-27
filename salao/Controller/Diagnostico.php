<?php
	
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para cadastro de diagnóstico.
	*/

	session_start();

	function conecta(){
		$connect = mysqli_connect('localhost','root','', 'projeto shalon');
		return $connect;
	}
	
	$cpf = $_POST['cpf'];
	$tex = $_POST['tex'];
	$for = $_POST['for'];
	$fi  = $_POST['fi'];
	$cut = $_POST['cu'];
	$emo = $_POST['emo'];
	$cat = $_POST['caf'];
	$fun = $_POST['fun'];
	$cor = $_POST['cor'];

	#verifica o checkbox do formlário, que informa se o cliente tem queda de cabelo. 
	if(empty($_POST['que'])){
		$que = 0;		
	}else{
		$que = 1;		
	}

	#Faz a busca do Id do cliente através do cpf.
	$result = mysqli_query(conecta(), "select ID from cliente where cpf = '".$cpf."';");

	#Verifica se foi encontrado algum Id, caso seja encontrado faz a inserção dos dados na tabela dianóstico.
	if(mysqli_num_rows($result)==0 || mysqli_num_rows($result)>1){
		$_SESSION["resposta_diag"] = "false";
		header("Location:../dist/cad_diagnosticos.php");					
	}else{
		$id = mysqli_fetch_assoc($result);		
		$result = mysqli_query(conecta(), "insert into diagnostico (ID_Cliente, Textura, Forma, Fibra, Cuticula, Queda, Emocional, CatacterFisi, Funcionario, Cor, Data) values( ".$id["ID"]." , '".$tex."', '".$for."', '".$fi."', '".$cut."', ".$que.", '".$emo."', '".$cat."', '".$fun."', '".$cor."', '"."20".date("y/m/d")."')")or die("Erro!") ;
							
		
		$_SESSION["resposta_diag"] = "true";
		header("Location:../dist/cad_diagnosticos.php");
	}
	
	mysqli_close(conecta());
?>