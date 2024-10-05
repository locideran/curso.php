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

	$texto = "texto dentro de uma variável";
	
	echo $total = mb_strlen(trim($texto));
	echo "<hr>";
	echo $resume = mb_substr($texto,1,20);

	//var_dump($texto);
	
	//echo saudacao();
	//echo resumirTexto($texto, 50);

	?>
</body>
</html>