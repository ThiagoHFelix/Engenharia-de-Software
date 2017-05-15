<?php
	/*
		Autor: Paulo Gabriel Ronchini
		Data: 08/05/2017

		Código para fazer logout do usuário.
	*/	

	session_start();
	#Destrói a sessão.
	session_destroy();
	header("Location:../dist/index.html");

?>