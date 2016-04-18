<?php 
    session_start();
    if (!isset($_SESSION["login"]) && !isset($_SESSION["senha"])) {
        header("Location:../Visao/login.php");
        exit;
    }
    include 'cabecalho.php';
?>
<!-- Inicio navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#">Monte Alegre</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">            
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                     aria-expanded="false">Funcionário <?= $_SESSION['login']?></a>
		  <ul class="dropdown-menu">
			<li><a href="listar_usuario.php">Listar</a></li>
			<li><a href="cad_usuario.php">Cadastrar</a></li>                
		  </ul>
		</li>
                <li><a href="logout.php">Sair</a></li>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</nav>
