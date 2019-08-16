<?php

	require_once('conexao.php');

	//	Verifica se há algum campo vazio
	if (!empty($_POST) AND (!empty($_POST['loginEmail'])) OR (!empty($_POST['loginSenha']))) {
		Location('index.html');
	} else {
		die('Verifique seus dados e tente novamente.');
	}

	//	Tenta conectar com o banco de dados
	$usuario = mysql_real_escape_string($_POST['loginEmail']);
	$senha = mysql_real_escape_string($_POST['loginSenha']);

	//	Validação dos dados digitados
	$sql = "SELECT 'nome', 'senha', 'nivel' FROM 'usuarios' WHERE ('usuario' = ''. $usuario.'') AND ('senha' = ''. $senha .'') AND ('ativo' = 1) LIMIT 1";
	$query = mysqli_query($sql);

	if (mysql_num_rows($query) !=1) {
		die('Login inválido!');
	} else {
		//	Salva os dados na variável resultado
		$resultado = mysql_fetch_assoc($query);

		//	Salva os dados da sessão
		$_SESSION['UsuarioID'] = $resultado['id']; 
		$_SESSION['UsuarioEmail'] = $resultado['email']; 
		$_SESSION['UsuarioNivel'] = $resultado['nivel']; 
		header("Location: restrito.php");
		
	}

?>