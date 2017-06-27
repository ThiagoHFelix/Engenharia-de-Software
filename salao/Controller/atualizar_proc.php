<?php
/*		
	Autor: Paulo Gabriel Ronchini
	Data:08/05/2017
		Código para atualização de uma cadastro de procedimento, abaixo se encontra os dados
	atualizados para serem inseridos no banco, em seguida o comando mysqli_connect se conecta ao
	banco, mysqli_query roda o comando de inserção no banco de dados e header redireciona para a página 
	view_proc.php para visualizar os dados do registro atualizado.
*/
	session_start();
	$marca = $_POST['marca'];
	$tipo_ox = $_POST['tipo_ox'];
	$nome_pro = $_POST['nome_pro'];
	$pont = $_POST['pont'];
	$tipo = $_POST['tipo'];
	$res = $_POST['res'];
	$id =  $_POST['id' ];
	
	$connect = mysqli_connect('localhost','root','', 'projeto shalon');
    $result = mysqli_query($connect, "UPDATE procedimento 
				    				  SET Marca = '".$marca."',
				    				  	  Tipo_OX = '".$tipo_ox."',
				    				  	  Nome_pro = '".$nome_pro."',
				    				  	  Pontuacao = '".$pont."',
				    				  	  Tipo = '".$tipo."',
				    				  	  Resultado = '".$res."'
					    				  WHERE ID = ".$id)or die("Houve um erro na atualização");
   		 

	#Fecha a conexão com o banco.	
	mysqli_close($connect);
	
	if(mysqli_num_rows($result) == 0 || mysqli_num_rows($result)>1){
		header("Location:../dist/view_proc.php?apagar=".$id);
	}else{		
		header("Location:../dist/view_proc.php?apagar=".$id);	
	}

?>