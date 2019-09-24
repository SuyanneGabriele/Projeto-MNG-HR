<?php

	// Eliminar a exibição de avisos

error_reporting(0);

	// Conexão com o banco de dados



require_once('conexao.php');
require_once('classes/uploader.class.php');


$email = $_SESSION['email'];


$sql_perfil = "SELECT * FROM usuario WHERE email = '$email'";
$result_perfil = mysqli_query($con, $sql_perfil);
$info_perfil = $result_perfil->fetch_assoc();
$idU = $info_perfil['id'];


	// Buscar informações do perfil
if (isset($idU)) {
	$sql1 = "SELECT * FROM cadastro_perfil, exp_profissional, escolaridade, escolaridade2 WHERE fk_perfil = $idU";

	$queryPerfil1 = mysqli_query($con, $sql1);
	$resultadoPerfil1 = mysqli_fetch_array($queryPerfil1);
}

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
	
	// InstÃĒncia uma classe para o upload
	$upload = new Uploader('arquivos');
	$uploads = $upload->upload();
	$uploads = $uploads[0]['dados']['nome_novo'];

	$nome_foto = $uploads;


	if(empty($_POST['nome'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_nome'] = $_POST['nome'];
	}

	if(empty($_POST['sobre'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_sobre'] = $_POST['sobre'];
	}	

	if(empty($_POST['idade'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_idade'] = $_POST['idade'];
	}

	if(empty($_POST['email'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_email'] = $_POST['email'];
	}

	if(empty($_POST['telefone'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_telefone'] = $_POST['telefone'];
	}

	if(empty($_POST['endereco'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_endereco'] = $_POST['endereco'];
	}

	if(empty($_POST['cidade'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_cidade'] = $_POST['cidade'];
	}

	if(empty($_POST['estado'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_estado'] = $_POST['estado'];
	}	

	if(empty($_POST['idiomas'])){
		$insert="nananinanao";
	}else{
		$_SESSION['value_idiomas'] = $_POST['idiomas'];
	}

	if(empty($_POST['nome_fundamental'])){
		$insert="nananinanao";
	}else{
		$_SESSION['nome_fundamental'] = $_POST['nome_fundamental'];
	}

	if(empty($_POST['data_escolaridade_fundamental'])){
		$insert="nananinanao";
	}else{
		$_SESSION['data_escolaridade_fundamental'] = $_POST['data_escolaridade_fundamental'];
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
		'$idiomas',
		'$nome_foto'
	)";
} else if(($insert!="nananinanao") && isset($id_perfil)){
	$sql = "UPDATE `cadastro_perfil` SET `nome` = '$nome', `idade` = '$idade', `telefone` = '$telefone', `endereco` = '$endereco', `cidade` = '$cidade', `idiomas` = '$idiomas' WHERE `cadastro_perfil`.`id` = '$id_perfil';";

}


if(!isset($id_perfil)){
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
} else{
	foreach ($nome_faculdade as $k => $v) {
		$sql2 = "UPDATE escolaridade WHERE id = '$id_perfil'
		SET (
		nome_faculdade = '$nome_faculdade[$k]',
		curso = '$curso[$k]',
		data_escolaridade = '$data_escolaridade[$k]'
	)";


	mysqli_query($con, $sql2);

}
}

if(!isset($id_perfil)){
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
} else {
	foreach ($profissao as $k => $v) {

		$sql3 = "UPDATE exp_profissional WHERE id = '$id_perfil'
		SET (
		profissao = '$profissao[$k]',
		sobre_profissao = '$sobre_profissao[$k]',
		data_profissao = '$data_profissao[$k]',
		cargo = '$cargo[$k]'
	)";

	mysqli_query($con, $sql3);

}
}

if(!isset($id_perfil)){
	$sql4 = "INSERT INTO escolaridade2
	VALUES (
	DEFAULT,
	'$idU',
	'$nome_medio',
	'$data_escolaridade_medio',
	'Ensino Médio',
	'$nome_fundamental',
	'$data_escolaridade_fundamental',
	'Ensino Fundamental'
)";

} else {

	$sql4 = "UPDATE escolaridade2 WHERE id = '$id_perfil'
	SET (
	nome_medio = '$nome_medio',
	data_escolaridade_medio = '$data_escolaridade_medio',
	nome_fundamental = '$nome_fundamental',
	data_escolaridade_fundamental = '$data_escolaridade_fundamental'
)";

}
mysqli_query($con, $sql4);

if($sql == TRUE){
	echo "Usuário OK";      
}else{
	echo "Erro, Informações Básicas necessárias".$sql."<br>".$con->error;
	$con->close();
}
}

mysqli_query($con, $sql);



?>