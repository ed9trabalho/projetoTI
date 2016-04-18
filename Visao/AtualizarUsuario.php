<?php 
    
    session_start();
    if (!isset($_SESSION["login"]) && !isset($_SESSION["senha"])) {
        header("Location:../Visao/login.php");
        exit;
    }
    include '../Pesistencia/UsuarioDAO.php';
    include_once("../Pesistencia/conexao.php");
   
    
   if(!isset($_POST['nome']) && !isset($_POST['email']) &&  !isset($_POST['cpf'])){
        header("location:editarUsuario.php");
    }
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $secretaria = $_POST['secretaria'];
    $cpf = $_POST['cpf'];
    $secretario = $_POST['secretario'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    
   
    UsuarioDAO::atualizarUsuario($nome, $secretaria, $cpf, $secretario, $telefone, $email, $id, $con);
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
	<?php
		if (mysqli_affected_rows($con) != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=listagemUsuarios.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário Atualizado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=listagemUsuarios.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi Atualizado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>
