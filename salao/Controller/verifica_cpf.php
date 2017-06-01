<?php
	
	function verifica_cpf($cpf){
		$connect = mysqli_connect('localhost','root','', 'projeto shalon');
		$result = mysqli_query($connect, "select ID from cliente where cpf = '".$cpf."';");
		if(mysqli_num_rows($result)==0 || mysqli_num_rows($result)>1){			
			return "false";				
		}else{
			return "true";
		}
		
		mysqli_close($connect);
	}

?>