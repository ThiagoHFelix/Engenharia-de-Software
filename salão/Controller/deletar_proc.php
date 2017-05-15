<?php
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para deletar um registro da tabela procedimento.
	*/
	session_start();
	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	$result = mysqli_query($connect, "delete from procedimento where ID = ".$_GET['apagar']."");
	header("Location:../dist/listar_procedimentos.php"); 
	mysqli_close($connect);
?>