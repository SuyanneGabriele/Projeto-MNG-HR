<?php

	// Eliminar a exibição de avisos

error_reporting(0);

	// Conexão com o banco de dados



require_once('conexao.php');


	// Recuperar ID do perfil
if (isset($_GET['id'])) {
	$id_perfil = $_GET['id'];
}

	// Buscar informações do perfil
if (isset($id_perfil)) {
	$sql = "SELECT * FROM cadastro_perfil WHERE id = $id_perfil";
	$queryPerfil = mysqli_query($con, $sql);
	$resultadoPerfil = mysqli_fetch_array($queryPerfil);

	// Verificar se o perfil existe
	if (is_null($resultadoPerfil)) {
		die("Perfil não encontrado.");
	}
}

$email = $_SESSION['email'];


$sql_perfil = "SELECT * FROM usuario WHERE email = '$email'";
$result_perfil = mysqli_query($con, $sql_perfil);
$info_perfil = $result_perfil->fetch_assoc();
$idU = $info_perfil['id'];



	// Verificando ação de SALVAR
if (isset($_POST['btnSalvar'])) {


	// Recebimento dos campos
	$nome = $_POST['nome'];
	$sobre = $_POST['sobre'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$idiomas = $_POST['idiomas'];
	
	$profissao = $_POST['profissao'];
	$sobre_profissao = $_POST['sobre_profissao'];
	$data_profissao = $_POST['data_profissao'];
	$cargo = $_POST['cargo'];
	
	$nome_faculdade = $_POST['nome_faculdade'];
	$curso = $_POST['curso'];
	$data_escolaridade = $_POST['data_escolaridade'];
	$nome_medio = $_POST['nome_medio'];
	$data_escolaridade_medio = $_POST['data_escolaridade_medio'];	
	$nome_fundamental =  $_POST['nome_fundamental'];
	$data_escolaridade_fundamental = $_POST['data_escolaridade_fundamental'];
	
	if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "Campo nome é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_nome'] = $_POST['nome'];
	}

	if(empty($_POST['sobre'])){
		$_SESSION['vazio_sobre'] = "Campo sobre é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_sobre'] = $_POST['sobre'];
	}	

	if(empty($_POST['idade'])){
		$_SESSION['vazio_idade'] = "Campo idade é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_idade'] = $_POST['idade'];
	}

	if(empty($_POST['email'])){
		$_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_email'] = $_POST['email'];
	}

	if(empty($_POST['telefone'])){
		$_SESSION['vazio_telefone'] = "Campo telefone é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_telefone'] = $_POST['telefone'];
	}

	if(empty($_POST['endereco'])){
		$_SESSION['vazio_endereco'] = "Campo endereço é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_endereco'] = $_POST['endereco'];
	}

	if(empty($_POST['cidade'])){
		$_SESSION['vazio_cidade'] = "Campo cidade é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_cidade'] = $_POST['cidade'];
	}

	if(empty($_POST['estado'])){
		$_SESSION['vazio_estado'] = "Campo estado é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_estado'] = $_POST['estado'];
	}	

	if(empty($_POST['idiomas'])){
		$_SESSION['vazio_idiomas'] = "Campo idiomas é obrigatório";
		$insert="nananinanao";
	}else{
		$_SESSION['value_idiomas'] = $_POST['idiomas'];
	}

	if (($insert!="nananinanao") && !isset($id_perfil)) {
		$sql = "INSERT INTO cadastro_perfil 
		VALUES (
		DEFAULT,
		'$idU', 
		'$nome',
		'$sobre',
		'$idade',
		'$email',
		'$telefone',
		'$endereco',
		'$cidade',
		'$estado',
		'$idiomas'
	)";
}

foreach ($nome_faculdade as $k => $v) {
	$sql2 = "INSERT INTO escolaridade
	VALUES (
	DEFAULT, 
	'$idU',
	'$nome_faculdade[$k]',
	'$curso[$k]',
	'$data_escolaridade[$k]',
	'Ensino Superior'
	)";

mysqli_query($con, $sql2);

}


foreach ($profissao as $k => $v) {

	$sql3 = "INSERT INTO exp_profissional
	VALUES (
	DEFAULT, 
	'$idU',
	'$profissao[$k]',
	'$sobre_profissao[$k]',
	'$data_profissao[$k]',
	'$cargo[$k]'
)";

mysqli_query($con, $sql3);

}

	$sql4 = "INSERT INTO escolaridade2
	VALUES (
	DEFAULT,
	'$nome_medio',
	'$data_escolaridade_medio',
	'Ensino Médio',
	'$nome_fundamental',
	'$data_escolaridade_fundamental',
	'Ensino Fundamental'
)";
	
mysqli_query($con, $sql4);

if($sql == TRUE){
	echo "Usuário OK";      
}else{
	echo "Erro, Informações Básicas necessárias".$sql."<br>".$con->error;
	$con->close();
}
}

mysqli_query($con, $sql);

// Executando o SQL
