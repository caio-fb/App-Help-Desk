<?php 
	session_start();
	// remover indíces de array de sessão
	// unset()
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	// remove o array de sessão inteiro
	// session_destroy()
	session_destroy();
	header("Location: index.php");
?>