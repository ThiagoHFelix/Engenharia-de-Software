<?php

	function conecta(){
			$connect = mysqli_connect('localhost','root','', 'projeto shalon');
			return $connect;
	}

?>