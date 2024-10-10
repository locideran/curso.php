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

	$texto = "<h1>texto</h1> <p>dentro</p> de uma variável";
	
	
	echo resumirTexto($texto, 10, ' ...');

	?>
</body>
</html>