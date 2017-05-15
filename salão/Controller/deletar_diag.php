<?php
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para deletar um registro da tabela diagnóstico.
	*/	
	session_start();
	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	$result = mysqli_query($connect, "delete from diagnostico where ID = ".$_GET['apagar']."");
	header("Location:../dist/atualizar_diagnosticos.php"); 
	mysqli_close($connect);
?>