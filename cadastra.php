<html>
<head>

	<meta charset="UTF-8">
</head>

 <form method="POST"> 
     <?php $username = $_POST['username']; if(empty($username))
      {echo " Verifique se o campo Username esta preenchido corretamente.<br/>";}?>
          
    <?php $senha = $_POST['senha']; if (empty($senha)) 
     {echo " Verifique se o campo Senha esta preenchido.<br/>";}?>
                    
     

<?php	
            echo $_POST['nome'];
            echo "<br>";
            echo $_POST['email'];
            echo "<br>";
            echo $_POST['datanascimento'];
            echo "<br>";
            echo $_POST['sexo'];
            echo "<br>";
            echo $_POST['profissao'];
            echo "<br>";
            echo $_POST['telefone'];
            echo "<br>";
            echo $_POST['endereco'];
            echo "<br>";
            echo $_POST['cidade'];
            echo "<br>";
            echo $_POST['estado'];
            echo "<br>";
            echo $_POST['cep'];
            echo "<br>";
            echo $_POST['username'];
     ?>
 
        </br> </br> <?php include 'cadastro.php';?>
        
    </form>		
</html>