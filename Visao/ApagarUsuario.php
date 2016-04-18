<?php 
    session_start();
    if (!isset($_SESSION["login"]) && !isset($_SESSION["senha"])) {
    header("Location:../Visao/login.php");
    exit;
}
    include '../Pesistencia/UsuarioDAO.php';
    $id = mysqli_real_escape_string($con,$_GET['id']);
    UsuarioDAO::ExcluirUsuario($id, $con);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysqlI_affected_rows($con) != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=listagemUsuarios.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário apagado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=listagemUsuarios.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi apagado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>