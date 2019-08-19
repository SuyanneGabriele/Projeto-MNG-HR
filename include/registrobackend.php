<?php

session_start();

include_once('conexao.php');

$nome = mysqli_real_escape_string($con, trim($_POST['nome']));
$email = mysqli_real_escape_string($con, trim($_POST['email']));
$senha = mysqli_real_escape_string($con, trim(md5($_POST['senha'])));

$sql = "SELECT COUNT(*) AS total FROM usuarios WHERE nome = '$nome'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
$_SESSION['email_existe'] = true;
header('Location: ../registro.php');
exit;
}

$sql = "INSERT INTO `usuarios` (`ID`, `nome`, `email`, `senha`, `nivel`, `status`) VALUES (NULL, '$nome', '$email', '$senha', '1', '1');";

if ($con->query($sql) === true) {
$_SESSION['status_cadastro'] = true;
}

$con->close();
header('Location: ../registro.php');
exit();
?>