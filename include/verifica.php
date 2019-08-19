<?php
include_once('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
header('Location: ../login.php');
}

//  Verificar se as informações necessárias foram preenchidas
$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

$query = "SELECT id, email, senha FROM usuario WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
$_SESSION['email'] = $email;
header('Location: ../index.php');
} else {
$_SESSION['nao_autenticado'] = true;
header('Location: ../login.php');
}

?>