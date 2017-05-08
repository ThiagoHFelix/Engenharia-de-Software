<?php
	
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para cadastro de dados na tabela pessoa.
	*/	

	session_start();

	function conecta(){
		$connect = mysqli_connect('localhost','root','', 'projeto shalon');
		return $connect;
	}

	#Dados dos formulário de cadastro de dados pessoais.
	 $nome = $_POST['nome'];
	 $email = $_POST['email'];
	 $cpf = $_POST['cpf'];
	 $data = $_POST['data'];	 	 
	 $cep = $_POST['cep'];
	 $bairro = $_POST['bairro'];
	 $rua = $_POST['rua'];
	 $numero = $_POST['numero'];
	 $cidade = $_POST['cidade'];
	 $estado = $_POST['estado'];
	 $sexo = $_POST['sexo'];
	 $rg = $_POST['rg'];

	#Código para verificar o valor do radiobutton relacionado ao sexo da pessoa.
	 if($sexo == 'masculino'){
	 	$sexo = 1;
	 }else{
	 	$sexo = 0;
	 }
	#Código para inserção dos dados na tabela pessoa.
	 $result = mysqli_query(conecta(), "insert into pessoa values('".$cpf."', '".$nome."', '".$data."', '".$rg."', '".$email."', '".$rua."', '".$cep."', '".$bairro."', '".$cidade."', '".$estado."', ".$sexo.", null)")or die("Erro!");
	 header("Location:../dist/cad_cliente.php?cpf=".$cpf);

	 mysqli_close(conecta());

?>