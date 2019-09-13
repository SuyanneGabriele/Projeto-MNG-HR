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
$query5 = ("SELECT id, infoEmpresa FROM vagas ORDER BY id DESC LIMIT 1");
$query6 = ("SELECT id, infoEmpresa FROM vagas ORDER BY id DESC LIMIT 1,1");
$query7 = ("SELECT id, infoEmpresa FROM vagas ORDER BY id DESC LIMIT 2,2");
$query8 = ("SELECT id, infoEmpresa FROM vagas ORDER BY id DESC LIMIT 3,3");
$query9 = ("SELECT id, TIMEDIFF(now(), data_vagas) FROM vagas ORDER BY id DESC LIMIT 1");
$query10 = ("SELECT id, TIMEDIFF(now(), data_vagas) FROM vagas ORDER BY id DESC LIMIT 1,1");
$query11 = ("SELECT id, TIMEDIFF(now(), data_vagas) FROM vagas ORDER BY id DESC LIMIT 2,2");
$query12 = ("SELECT id, TIMEDIFF(now(), data_vagas) FROM vagas ORDER BY id DESC LIMIT 3,3");

// executa a query
$dados = mysqli_query($con, $query);
$dados2 = mysqli_query($con, $query2);
$dados3 = mysqli_query($con, $query3);
$dados4 = mysqli_query($con, $query4);
$dados5 = mysqli_query($con, $query5);
$dados6 = mysqli_query($con, $query6);
$dados7 = mysqli_query($con, $query7);
$dados8 = mysqli_query($con, $query8);
$dados9 = mysqli_query($con, $query9);
$dados10 = mysqli_query($con, $query10);
$dados11 = mysqli_query($con, $query11);
$dados12 = mysqli_query($con, $query12);

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
$linha2 = mysqli_fetch_assoc($dados2);
$linha3 = mysqli_fetch_assoc($dados3);
$linha4 = mysqli_fetch_assoc($dados4);
$linha5 = mysqli_fetch_assoc($dados5);
$linha6 = mysqli_fetch_assoc($dados6);
$linha7 = mysqli_fetch_assoc($dados7);
$linha8 = mysqli_fetch_assoc($dados8);
$linha9 = mysqli_fetch_assoc($dados9);
$linha10 = mysqli_fetch_assoc($dados10);
$linha11 = mysqli_fetch_assoc($dados11);
$linha12 = mysqli_fetch_assoc($dados12);

// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
$total2 = mysqli_num_rows($dados2);
$total3 = mysqli_num_rows($dados3);
$total4 = mysqli_num_rows($dados4);
$total5 = mysqli_num_rows($dados5);
$total6 = mysqli_num_rows($dados6);
$total7 = mysqli_num_rows($dados7);
$total8 = mysqli_num_rows($dados8);
$total9 = mysqli_num_rows($dados9);
$total10 = mysqli_num_rows($dados10);
$total11 = mysqli_num_rows($dados11);
$total12 = mysqli_num_rows($dados12);
?>

