<?php 

	// ====================================
	//    Verificação de página restrita
	// ====================================

	// Inicia a $_SESSION
	session_start();

	// Verificando se existe a $_SESSION para carregar a página
	if (!(isset($_SESSION['email']) && $_SESSION['email']==true)) {
		header('Location: login.php');			
	}

?>