<html>
<head> 
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
</head>
<body> 
	<p align="center"><big><big><strong>
		Cadastramento - Etapa 3 de 3</strong></big></big>
	</p> 
	<form method="POST" action="cadastra.php">
            
            <input type="hidden" name="nome" value= "<?php echo $_POST['nome'];?>">
                
 	    <input type="hidden" name="email" value= "<?php echo $_POST['email'];?>">
                
 	    <input type="hidden" name="datanascimento" value= "<?php echo $_POST['datanascimento'];?>"> 
                
 	    <input type="hidden" name="sexo" value= "<?php echo $_POST['sexo']; ?>"> 
                
 	    <input type="hidden" name="profissao" value= "<?php echo $_POST['profissao'];?>"> 
                
	    <input type="hidden" name="telefone" value= "<?php echo $_POST['telefone'];?>"> 
            <?php $telefone = $_POST['telefone']; if(empty($telefone) OR strlen($telefone)<9)
	    {echo "Verifique se o campo do telefone esta preenchido, ou se esta preenchido corretamente: (xxxx-xxxx). <br>"; $erro=TRUE;}?>

            <input type="hidden" name="endereco" value= "<?php echo $_POST['endereco'];?>">
             <?php $endereco = $_POST['endereco']; if(empty($endereco))
           {echo "Verifique se o campo endereço esta preenchido corretamente. <br>"; $erro=TRUE;} ?>
            
           <input type="hidden" name="cidade" value= "<?php echo $_POST['cidade']; ?>">
            <?php $cidade = $_POST['cidade']; if(empty($cidade))
            {echo "Verifique se o campo cidade esta preenchido corretamente. <br>"; $erro=TRUE;}?>
           
           <input type="hidden" name="estado" value= "<?php echo $_POST['estado'];?>">
            <?php $estado = $_POST['estado']; if(strlen($estado)!=2 OR empty($estado))
            {echo "Verifique se o campo estado esta preenchido corretamente. <br>"; $erro=TRUE;}?>
                
	   <input type="hidden" name="cep" value= "<?php echo $_POST['cep'];?>">
            <?php $cep = $_POST['cep']; if(strlen($cep)<8 OR empty($cep))
           {echo " Verifique se o campo CEP esta preenchido corretamente. <br>"; $erro=TRUE;}?>      
			
			
 		<div align="center"><center>
			<p>Username: <input type="text" name="username" size="10"></p> 
 		</center></div>

		<div align="center"><center>
			<p>Senha: <input type="password" name="senha" size="10"></p> 
		</center></div>
			
		<div align="center"><center>
			<p>Confirme sua Senha: <input type="password" name="confirma_senha" size="10"></p> 
 		</center></div>

		<div align="center"><center>
			<p><input type="submit" value="Finalizar Cadastro" name="fim"></p> 
 		</center></div> 
	</form> 
</body> 
</html>