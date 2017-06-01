<?php

	function gerenciar_agenda($status, $id){
		$connect = mysqli_connect('localhost','root','', 'projeto shalon');
		$result = mysqli_query($connect, "update consulta set status = '".$status."' where ID = ".$id."")or die("Erro na inserção!");

	}

?>