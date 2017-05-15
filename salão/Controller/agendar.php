<?php
	session_start();

	$cpf = $_POST['cpf'];
	$data = $_POST['data'];
	$proc = $_POST['proc'];
	$hora = $_POST['hora'];

	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
	echo $cpf;
	$result = mysqli_query($connect, "select ID from cliente where cpf = '".$cpf."';");

	
	if(mysqli_num_rows($result)==0 || mysqli_num_rows($result)>1){
		#$_SESSION["resposta"] = "false";
		#header("Location:../dist/cad_diagnosticos.php");	
		echo "CPF não encontrado";				
	}else{
		$id = mysqli_fetch_assoc($result);
		$i = 0;
		$result = mysqli_query($connect, "insert into consulta (ID_Cliente, Data, Status, servico, hora) values(".$id['ID'].", '".$data."', 'a', '".$proc."', '".$hora."')")or die(mysqli_error($connect));	
		#$_SESSION["resposta"] = "true";
		header("Location:../dist/agendamento.php");

	}
	
 	mysqli_close($connect);
?>
