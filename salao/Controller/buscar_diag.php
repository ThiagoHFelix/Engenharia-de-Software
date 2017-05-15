<?php
session_start();
	
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017
			Código para buscar um registro na tabela Diagnóstico no banco de dados.
			O comando mysqli_connect faz a conexão com o banco de dados, em seguida o comando mysqli_query faz a busca 
		pelos diagnósticos cadastrados no banco relacionados com cpf informado pelo usuário, em seguida o comando if verifica 
		se existem registros relacionados ao cpf, e redireciona o usuário para a tela onde são listado os registros. 
	*/
	
	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	$cpf = $_POST['cpf'];
	#Comando para seleção dos registros da tabela diagnóstico. 
	$result = mysqli_query($connect, "SELECT p.Nome, d.Funcionario from pessoa p, cliente c, diagnostico d where '".$cpf."' = p.Nome and p.CPF = c.CPF and c.ID = d.ID_Cliente")or die("Erro!") ;
	#Comando if para verificar se existem registros relacionados ao cpf.
	if(mysqli_num_rows($result) == 0){
		$_SESSION['resultado_busca'] = "Cliente não encontrado";
		header("Location:../dist/atualizar_diagnosticos.php");
	}else{
		$row = mysqli_fetch_array($result, MYSQLI_BOTH);
		$_SESSION['resultado_busca'] = $row;
		header("Location:../dist/atualizar_diagnosticos.php");
	}
	#Fecha a conexão com o banco.
	mysqli_close($connect);
?>