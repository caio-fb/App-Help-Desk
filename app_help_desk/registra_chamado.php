<?php 
	session_start();

	// estamos trabalhando na montagem do texto
	$titulo = str_replace("#", "-", $_POST["titulo"]);
	$categoria = str_replace("#", "-", $_POST["categoria"]);
	$descricao = str_replace("#", "-", $_POST["descricao"]);

	// implode("#", $_POST);

	$texto = $_SESSION["id"]. "#". $titulo. "#". $categoria. "#". $descricao. PHP_EOL;
	echo $texto;

	// abrindo o arquivo
	$arquivo = fopen("app_help_desk/arquivo.hd", "a");
	// escrevendo no arquivo
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	// redirecionar
	header("Location: abrir_chamado.php");
?>