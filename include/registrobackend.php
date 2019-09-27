	<?php

// session_start();

include_once('conexao.php');

$nome = mysqli_real_escape_string($con, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($con, trim($_POST['sobrenome']));
$email = mysqli_real_escape_string($con, trim($_POST['email']));
$senha = mysqli_real_escape_string($con, trim(md5($_POST['senha'])));

$sql = "SELECT COUNT(*) AS total FROM usuario WHERE nome = '$nome' AND sobrenome = '$sobrenome'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT COUNT(*) AS total2 FROM usuario WHERE email = '$email'";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($result2);

if ($row2['total2'] == 1) {
$_SESSION['email_existe'] = true;
header('Location: ../registro.php');
exit;
}

$sql = "INSERT INTO `usuario` (`ID`, `nome`, `sobrenome`, `email`, `senha`, `nivel`) VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha', '0');";

if ($con->query($sql) === true) {
$_SESSION['status_cadastro'] = true;


$id_usuario_criado = mysqli_insert_id($con);

$sql_perfil = "INSERT INTO cadastro_perfil (`id`, `fk_perfil`, `nome`, `sobre`, `idade`, `email`, `telefone`, `endereco`, `cidade`, `estado`, `idiomas`, `nome_foto`) VALUES (DEFAULT, '$id_usuario_criado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
$result_perfil = mysqli_query($con, $sql_perfil);


}

$con->close();
header('Location: ../registro.php');
exit();
?>