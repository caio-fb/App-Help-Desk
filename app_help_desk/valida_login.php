<?php 
	session_start();
	// variável que identifica se a autenticação foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = Array(1 => "administrativo", 2 => "usuario");

	// usuários do sistema
	$usuario_app = Array(
		Array("id" => 1, "email" => "adm@teste.com.br", "senha" => "1234", "perfil_id" => 1),
		Array("id" => 2, "email" => "user@teste.com.br", "senha" => "1234", "perfil_id" => 1),
		Array("id" => 3, "email" => "jose@teste.com.br", "senha" => "1234", "perfil_id" => 2),
		Array("id" => 4, "email" => "maria@teste.com.br", "senha" => "1234", "perfil_id" => 2));

	foreach($usuario_app as $user) {
		if ($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]) {
			$usuario_autenticado = true;
			$usuario_id = $user["id"];
			$usuario_perfil_id = $user["perfil_id"];
		}
	}

	if ($usuario_autenticado) {
		echo "Usuário autenticado";
		$_SESSION["autenticado"] = "SIM";
		$_SESSION["id"] = $usuario_id;
		$_SESSION["perfil_id"] = $usuario_perfil_id;
		header("Location: home.php");
	} 
	else {
		$_SESSION["autenticado"] = "NÃO";
		header("Location: index.php?login=erro");
	}
?>