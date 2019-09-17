<?php

	// Eliminar a exibição de avisos

//error_reporting(0);

	// Conexão com o banco de dados
error_reporting(0);
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
	$ensino_superior = $_POST['ensino_superior'];
	$nome_medio = $_POST['nome_medio'];
	$data_escolaridade_medio = $_POST['data_escolaridade_medio'];
	$nome_fundamental = $_POST['nome_fundamental'];
	$data_escolaridade_fundamental = $_POST['data_escolaridade_fundamental'];
	

	// INSERT
	if(!isset($id_perfil)){

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


	$sql2 = "INSERT INTO escolaridade
	VALUES (
	DEFAULT, 
	'$idU',
	'$nome_faculdade',
	'$curso',
	'$data_escolaridade',
	'Ensino Superior',
	'$nome_medio',
	'$data_escolaridade_medio',
	'Ensino Médio',
	'$nome_fundamental',
	'$data_escolaridade_fundamental',
	'Ensino Fundamental'
)"; 

$sql3 = "INSERT INTO exp_profissional
VALUES (
DEFAULT, 
'$idU',
'$profissao',
'$sobre_profissao',
'$data_profissao',
'$cargo'
)";

}
}

// Executando o SQL
mysqli_query($con, $sql);
mysqli_query($con, $sql2);
mysqli_query($con, $sql3);