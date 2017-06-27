<?php

	include_once("conecta.php");

	function recupera_senha($email){
		$result = mysqli_query(conecta(), "Select d.senha from administrador d, pessoa p where p.email = '".$email."' and p.cpf = d.cpf");

		$num_rows = mysqli_num_rows($result);
		echo "<script>alert(".$num_rows.");</script>";

		if($num_rows == 1){

			while($Row_email = mysqli_fetch_array($result)){
				$rowsenha = $Row_email['senha'];
			}
			
			//enviar um email para variavel email juntamente com a variável senha;
			$mensage ="Você solicitou a recuperação de senhha confira seu dados.";
			$mensage .="E-mail= " . $rowemail;
			$mensage .="Senha:" . $rowsenha;
			mail($rowemail, "Salão Shalon, recuperação de senha", $mensage);


		}else{
			echo "<script>alert('Este e-mail não foi encontrado, tente novamente!');</script>";
		}
	}

?>