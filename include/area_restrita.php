<?php 

	// ====================================
	//    Verificação de página restrita
	// ====================================


	// Verificando se existe a $_SESSION para carregar a página
	if (!(isset($_SESSION['email']) && $_SESSION['email']==true)) {
		header('Location: faca_login.php');			
	}

?>