<?php

	// Eliminar a exibição de avisos

//error_reporting(0);

	// Conexão com o banco de dados

require_once('conexao.php');


	// Recuperar ID do aluno
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

	// Buscar informações do perfil
if (isset($id)) {
	$sql = "SELECT * FROM cadastro_perfil WHERE id = $id";
	$queryPerfil = mysqli_query($con, $sql);
	$resultadoPerfil = mysqli_fetch_array($queryPerfil);

		// Verificar se o aluno existe
	if (is_null($resultadoPerfil)) {
		die("Perfil não encontrado.");
	}
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
	$data_profissao = $_POST['data_profissao'];
	$cargo = $_POST['cargo'];
	$sobre_cargo = $_POST['sobre_cargo'];
	$ensino_superior = $_POST['ensino_superior'];
	$data_ensino_superior = $_POST['data_ensino_superior'];
	$sobre_ensino_superior = $_POST['sobre_ensino_superior'];
	$ensino_medio = $_POST['ensino_medio'];
	$data_ensino_medio = $_POST['data_ensino_medio'];
	$sobre_ensino_medio = $_POST['sobre_ensino_medio'];
	$ensino_fundamental = $_POST['ensino_fundamental'];
	$data_ensino_fundamental = $_POST['data_ensino_fundamental'];
	$sobre_ensino_fundamental = $_POST['sobre_ensino_fundamental'];

		// INSERT
	if {
		$sql = "INSERT INTO alunos 
		VALUES (
		DEFAULT, 
		'$nome',
		'$sobre',
		'$idade',
		'$email',
		'$telefone',
		'$endereco',
		'$cidade',
		'$estado',
		'$idiomas',
		'$profissao',
		'$data_profissao',
		'$cargo',
		'$sobre_cargo',
		'$ensino_superior',
		'$data_ensino_superior',
		'$sobre_ensino_superior',
		'$ensino_medio',
		'$data_ensino_medio',
		'$sobre_ensino_medio',
		'$ensino_fundamental',
		'$data_ensino_fundamental',
		'$sobre_ensino_fundamental'
	)";
}

		// Executando o SQL
if (mysqli_query($con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Perfil salvo com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

			// Criar o histórico de edição
	$historico = unserialize($_COOKIE['historico_alteracoes']);

	if (isset($id)) {
				// Cria o histórico de edição de aluno
		$historico[] = [
			'tipo' => 'warning',
			'mensagem' => "Você alterou o aluno de ID <strong>$id_aluno</strong> para o nome <strong>$nome</strong> às <strong>".date('d/m/Y H:i:s')."</strong>"
		];

				// Deletar os registros de cursos por aluno
		$sqlDeleteCursosAluno = "DELETE FROM aluno_cursos WHERE fk_aluno = $id_aluno";

		if (mysqli_query($con, $sqlDeleteCursosAluno)) {
					// Inserir registros de cursos por aluno
			foreach ($cursos as $idcurso) {
				$sqlInsertCursoAluno = "INSERT INTO aluno_cursos VALUES (DEFAULT, $id_aluno, $idcurso)";
				mysqli_query($con, $sqlInsertCursoAluno);
			}
		}
	} else {
				// Cria o histórico de novo aluno
		$historico[] = [
			'tipo' => 'success',
			'mensagem' => "Você criou um novo aluno com o nome <strong>$nome</strong> às <strong>".date('d/m/Y H:i:s')."</strong>"
		];

				// ID do último aluno inserido no banco
		$ultima_id = mysqli_insert_id($con);

				// Inserir registros de cursos por aluno
		foreach ($cursos as $idcurso) {
			$sqlInsertCursoAluno = "INSERT INTO aluno_cursos VALUES (DEFAULT, $ultima_id, $idcurso)";
			mysqli_query($con, $sqlInsertCursoAluno);
		}
	}

	$historico = serialize($historico);

	setcookie('historico_alteracoes', $historico, time() + 120 * (24 * 3600));

	header('Location: listagem.php');
} else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao salvar.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Location: listagem.php');
}
}

	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {
	$sql = "DELETE FROM alunos WHERE id = $id_aluno";

	if (mysqli_query($con, $sql)) {
		$alerta['tipo'] = "success";
		$alerta['mensagem'] = "Aluno excluido com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

			// Criar o histórico de exclusão
		$historico = unserialize($_COOKIE['historico_alteracoes']);

		$historico[] = [
			'tipo' => 'danger',
			'mensagem' => "Você deletou o aluno com ID <strong>$id_aluno</strong> às <strong>".date('d/m/Y H:i:s')."</strong>"
		];

		$historico = serialize($historico);

		setcookie('historico_alteracoes', $historico, time() + 120 * (24 * 3600));

			// Deletar os registros de cursos por aluno
		$sqlDeleteCursosAluno = "DELETE FROM aluno_cursos WHERE fk_aluno = $id_aluno";
		mysqli_query($con, $sqlDeleteCursosAluno);

		header('Location: listagem.php');
	} else {
		$alerta['tipo'] = "danger";
		$alerta['mensagem'] = "Erro ao excluir.";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Location: listagem.php');
	}
}

if ($_SESSION['id_usuario'] == $id_aluno) {
	$disabled = "";
} else {
	$disabled = "disabled";
}