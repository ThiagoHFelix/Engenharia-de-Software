<?php
	session_start();

	$cpf = $_POST['cpf'];
	$data = $_POST['data'];
	$proc = $_POST['proc'];
	$hora = $_POST['hora'];

	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	$result = mysqli_query($connect, "select ID from cliente where cpf = '".$cpf."';");

	if(mysqli_num_rows($result)==0 || mysqli_num_rows($result)>1){
		#$_SESSION["resposta"] = "false";
		#header("Location:../dist/cad_diagnosticos.php");	
		header("Location:../dist/page_error_agenda.php");				
	}else{
		$id = mysqli_fetch_assoc($result);
		$i = 0;
		$result = mysqli_query($connect, "insert into consulta (ID_Cliente, Data, Status, servico, hora) values(".$id['ID'].", '".$data."', 'a', '".$proc."', '".$hora."')")or die(mysqli_error($connect));	
		#$_SESSION["resposta"] = "true";
		echo "<script>alert('Horário agendado!');</script>";
		echo "<script>window.location.href = '../dist/agendamento.php';</script>";
		//header("Location:../dist/agendamento.php");
	}
	
 	mysqli_close($connect);
?>
