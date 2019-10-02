<?php
error_reporting(0);
require_once('conexao.php');

// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($con, $db);

// cria a instrução SQL que vai selecionar os dados



$query = ("SELECT TIMEDIFF(now(), data_vagas), vagas.* FROM vagas ORDER BY data_vagas DESC LIMIT 5");

$result_vagas = mysqli_query($con, $query);
$num_vagas = mysqli_num_rows($result_vagas);


?>