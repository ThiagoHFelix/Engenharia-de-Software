<?php
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para deletar um registro da tabela procedimento.
	*/
	session_start();
	include_once("conecta.php");
	$connect = conecta();

	//$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	$result = mysqli_query($connect, "delete from procedimento where ID = ".$_GET['apagar']."");
	//echo "alert('O procedimento foi deletado!')";
	header("Location:../dist/adm.php"); 
	mysqli_close($connect);
?>