<?php

	// Eliminar a exibição de avisos

//error_reporting(0);

	// Conexão com o banco de dados

require_once('conexao.php');

if (!$con) {
	die("ERRO: Não foi possível conectar no banco de dados -> " . mysqli_connect_error());
}

// Recuperar ID do Curriculo

if (isset($_GET['id'])) {
	$id_curriculo = $_GET['id'];
}

// Buscar informações dos Curriculos

if (isset($id_curriculo)) {
	$sql = "SELECT * FROM curriculos WHERE id = $id_curriculo";
	$queryCurriculo = mysqli_query($con, $sql);
	$resultadoCurriculo = mysqli_fetch_array($queryCurriculo);

	
	// Verificar se o Curriculo existe

	if (is_null($resultadoCurriculo)) {
		die("Curriculo não encontrado.");
	}
}

// Verificando botão de SALVAR

if (isset($_POST['btnSalvar'])) {

	// Recebimento dos campos

	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];

	// Identificando se é UPDATE ou INSERT

	if (!isset($id_curriculo)){
		$sql = "INSERT INTO curriculos VALUES (DEFAULT, '1', '$cidade', '$estado', '$endereco', '$telefone', '$email' )";
	}

	if(mysqli_query($con, $sql)) {
		header('Location: curriculos.php');
	}
}
?>
