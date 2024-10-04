<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Criando primeiro arquivo</title>
</head>
<body>	
	<?php 
	
	require_once 'sistema/configuracao.php';
	include_once 'funcoes.php';

	$texto = '<p>texto dentro de uma variável</p>';
	$string = 'texto';
	$int = 10;
	$float = 9.8;
	$bool = true;
	$nulo = null;

	//var_dump($texto);
	
	echo saudacao();
	echo resumirTexto($texto, 50);

	?>
</body>
</html>