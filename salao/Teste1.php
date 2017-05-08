<?php

session_start();

$_SESSION["Teste1"] = "Teste";
$_SESSION["Teste2"] = "Teste2";
$_SESSION["Teste3"] = "Teste3";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
<?php
	echo "<a href='Teste.php'>Chamar</a>";
	print_r($_SESSION);
?>
</body>
</html>