<html>
<head> 
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
</head>
<body> 
	<p align="center"><big><big>
		<strong>Cadastramento - Etapa 1 de 3</strong></big></big>
	</p> 
	
	<form method="POST" action="etapa2.php"> 
 		<div align="center">
			<center> 
				<p>Nome: <input type="text" name="nome" size="20" value="<?php echo $_POST['nome']?>"></p>
                                <?php $nome = $_POST['nome']; if(empty($nome)){echo "Verifique se o campo nome esta preenchido.<br>"; $erro=TRUE;}?>
			</center>
		</div>
		<div align="center">
			<center> 
				<p>E-mail: <input type="text" name="email" size="20" value="<?php echo $_POST ['email'] ?>"></p>
                                <?php $email = $_POST['email']; if(empty($email) OR !strstr($email,'@')){echo "Verifique se o campo e-mail esta preenchido ou se esta preenchido de modo correto. <br>"; $erro=TRUE;} ?>
                        </center>
		</div>
		<div align="center">
			<center> 
				<p>Data de nascimento: <input type="text" name="datanascimento" size="20"></p> 
 			</center>
		</div>
		<div align="center">
			<center> 
				<p> 
					Sexo: 
					<input type="radio" value="masculino" checked name="sexo">Masculino&nbsp;&nbsp; 
					<input type="radio" name="sexo" value="feminino">Feminino
				</p> 
 			</center>
		</div>
		<div align="center">
			<center> 
				<p>
					Profissão: <input type="text" name="profissao" size="20">
				</p> 
 			</center>
		</div>
		<div align="center">
			<center>
				<p>	
					<input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir">
				</p> 
 			</center>
		</div> 
	</form> 
</body> 
</html> 
