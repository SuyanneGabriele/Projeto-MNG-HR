<?php
error_reporting(0);
require_once('conexao.php');
 
// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($con, $db);

// cria a instrução SQL que vai selecionar os dados

$query = ("SELECT id, nome_vaga FROM vagas ORDER BY id DESC LIMIT 1");

$query2 = ("SELECT id, nome_vaga FROM vagas ORDER BY id DESC LIMIT 1,1");

$query3 = ("SELECT id, nome_vaga FROM vagas ORDER BY id DESC LIMIT 2,2");

$query4 = ("SELECT id, nome_vaga FROM vagas ORDER BY id DESC LIMIT 3,3");

// executa a query
$dados = mysqli_query($con, $query);
$dados2 = mysqli_query($con, $query2);
$dados3 = mysqli_query($con, $query3);
$dados4 = mysqli_query($con, $query4);

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
$linha2 = mysqli_fetch_assoc($dados2);
$linha3 = mysqli_fetch_assoc($dados3);
$linha4 = mysqli_fetch_assoc($dados4);

// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
$total2 = mysqli_num_rows($dados2);
$total3 = mysqli_num_rows($dados3);
$total4 = mysqli_num_rows($dados4);
?>
 
