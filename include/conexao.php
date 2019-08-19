<?php

	//	Conexão BD
	CONST HOST = "127.0.0.1";
	CONST USER = "root";
	CONST PASS = "";
	CONST DB = "tcc";

	$con = mysqli_connect(HOST, USER, PASS, DB);
	if (!$con) 
		die("Erro ao se conectar com o banco de dados!");

	session_start();

?>