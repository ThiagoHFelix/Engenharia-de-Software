<?php 

function conecta(){
	$conect = mysqli_connect('localhost','root','', 'projeto shalon');
	return $conect;
}

function buscar_dados_cliente($id){
	 
	 $result = mysqli_query (conecta(), "select p.Nome, p.CPF ,p.data_nasc, p.RG, p.email, p.Rua, p.CEP, p.Bairro, p.Cidade, p.Estado, p.sexo, c.Patologias, c.Tratamento, c.Gestante, c.Cardiaco, c.Hipertenso, c.lactante, c.Alergia, c.obs from pessoa p, cliente c where p.cpf = '".$id."' and p.cpf = c.cpf");	 
	 return $result;
}

if(isset($_POST['cpf']) || isset($_POST['observacao_field'])){
	salvar_comentario($_POST['observacao_field'], $_POST['cpf']);
}

function salvar_comentario($obs, $cpf){
	
	$result = mysqli_query (conecta(), "update cliente set Obs = '".$obs."' where cpf = '".$cpf."'");
	return $result;
}

function buscar_tel($cpf){
	
	$resulttel = mysqli_query (conecta(), "select Telefone from Telefone where cpf = '".$cpf."'");
	$string_tel = "";
	while ($telefones = mysqli_fetch_assoc($resulttel)) {
		$string_tel = $string_tel.$telefones['Telefone']."/";
	}
	echo "<tr><td>Contato</td><td>".$string_tel."</td></tr>";
}
?>