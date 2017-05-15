<?php

	/*
		Autor: Paulo Gabriel Ronchini
		Data:08/05/2017
		Código para a atualização de um diagnóstico.
	*/
	session_start();
	#Dados provindos do forma de atualização de diagnóstico(atualizar_diagostico.php).
	$tex = $_POST['tex'];
	$for = $_POST['for'];
	$fi  = $_POST['fi' ];
	$cut = $_POST['cu' ];
	$emo = $_POST['emo'];
	$cat = $_POST['caf'];
	$fun = $_POST['fun'];
	$cor = $_POST['cor'];
	$id =  $_POST['id' ];

	#Verifica o valor do checkbox que indica se o cliente tem queda de cabelo.
	if(empty($_POST['que'])){
		$que = 0;		
	}else{
		$que = 1;		
	}
	#Código para se conectar ao banco de dados.
	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	#Código para inserção no banco.
    $result = mysqli_query($connect, "UPDATE diagnostico 
				    				  SET TEXTURA = '".$tex."',
					    			      Forma = '".$for."',
					    				  Fibra = '".$fi."',
					    				  Cuticula = '".$cut."',
					    				  Queda = ".$que.",
					    				  Emocional = '".$emo."',
					    				  CatacterFisi = '".$cat."',
					    				  Funcionario = '".$fun."',
					    				  Cor = '".$cor."'
					    				  WHERE ID = ".$id);

	#Fecha a conexão com o banco.
	mysqli_close($connect);

	#Comando para redirecionr o usuário para a tela de visualização de dados do diagnóstico atualizado.
	header("Location:../dist/view_diag.php?apagar=".$id."");

?>