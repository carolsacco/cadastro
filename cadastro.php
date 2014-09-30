<head>

	<meta charset="UTF-8">
</head>


<?php
	
        
	
	$id = $_POST['nome']; // Suponha que id foi gerado aleatoriamente. Poderia ser um número
        
	echo "Voce está cadastrado. Chame os seus amigos e ganhe pontos.";
	echo "Para isso, é só passar o link abaixo:";
	echo "http://localhost:8081/cadastro/index.php?id=".$id;
?>

</html>