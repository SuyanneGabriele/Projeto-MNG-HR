<?php
error_reporting(0);
require_once('conexao.php');
 
// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($con, $db);

// cria a instrução SQL que vai selecionar os dados

$query = ("SELECT id, nome_vaga FROM vagas ORDER BY id DESC LIMIT 1");

// executa a query
$dados = mysqli_query($con, $query) or die(mysqli_error());

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);

// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>
 
