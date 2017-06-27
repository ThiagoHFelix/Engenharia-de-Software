<?php
	session_start();
	include_once("conecta.php");
	$connect = conecta();
	$cpf = $_POST['id'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$csenha = $_POST['csenha'];

	$ver_email = mysqli_query($connect, "select email from pessoa where email = '".$email."'")or die(mysqli_error($connect));
	$_SESSION['updateadm'] = 0;

	if(mysqli_num_rows($ver_email) >= 1){			
		header("Location:../dist/page_error_adm.php"); 
	}else{
		$result = mysqli_query($connect, "update Pessoa set email = '".$email."' where cpf = '".$cpf."'")or die(mysqli_error($connect));
		$_SESSION['updateadm'] = 1;
	}
	
	if(!empty($senha) && !empty($csenha)){
		$result2 = mysqli_query($connect, "update Administrador set senha = '".$senha."' where cpf = '".$cpf."'")or die(mysqli_error($connect));		
		
		$_SESSION['updateadm'] = 1;
	}

	mysqli_close($connect);
	
	header("Location:../dist/adm.php");

?>