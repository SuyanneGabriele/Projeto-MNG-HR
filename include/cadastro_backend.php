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



	/**
	 * Classe criada para fazer upload de arquivos
	 */
	class Uploader
	{

		// Diretório que será salvo o arquivo
		CONST DIRETORIO = "uploads/";

		// Nome do input
		public $name_input;

		// Precisa do nome do input para iniciar a classe
		public function __construct($nome_input) {
			$this->name_input = $nome_input;
		}

		/**
		 * Faz o upload de qualquer coisa que esteja no $_FILES
		 */
		public function upload() {

			// Estrutura de repetição para inserir tudo que estiver em $_FILES
			for ($contador = 0; $contador < count($_FILES[$this->name_input]["name"]); $contador++) {

				// Gerando novo nome do arquivo
				$nome = $this->gera_nome();
				
				/**
				 * Obtendo informações dos arquivos
				 */
				// Retorna o nome do arquivo
				$nome_original = basename($_FILES[$this->name_input]["name"][$contador]);

				// Retorna a extensão do arquivo
				$tipo_arquivo = pathinfo($nome_original, PATHINFO_EXTENSION);

				// Nome completo do arquivo
				$nome_novo = self::DIRETORIO . $nome .'.'. $tipo_arquivo;

				/**
				 * Validações dos arquivos
				 */
				// Verifica o tamanho máximo permitido
				($_FILES[$this->name_input]);
				if ($_FILES[$this->name_input]["size"][$contador] > 25000000)
					$erro = true;

				// Verificando os formatos dos arquivo
				if($tipo_arquivo != "jpg" && $tipo_arquivo != "png" && $tipo_arquivo != "jpeg")
					$erro = true;

				// Se não existir erro, upa no banco de dados e move para a pasta
				if (!isset($erro)) {

					// Move para a pasta
					if (move_uploaded_file($_FILES[$this->name_input]["tmp_name"][$contador], $nome_novo)) {
						$retorno[] = [
							'imagem_nr' => $contador + 1,
							'status' => true,
							'dados' => [
								'nome_original' => basename($_FILES[$this->name_input]["name"][$contador]),
								'nome_novo' => $nome . '.' . $tipo_arquivo,
								'caminho_arquivo' => $nome_novo
							]
						];
					} else {	
						$retorno[] = [
							'imagem_nr' => $contador + 1,
							'status' => false,
							'dados' => false
						];
					}

				}
			}

			return $retorno;
		}

		/**
		 * Gera nomes unicos para os uploades
		 */
		public function gera_nome() {
			$erro = true;

			while ($erro === true) {
				// Gerando nome para o novo upload
				$novo_nome = rand(100000000,999999999);

				// Verifica se já existe algum arquivo com esse nome no diretório
				if (file_exists($novo_nome))
					$erro = true;
				else
					$erro = false;
			}

			return $novo_nome;
		}

	}

	?>