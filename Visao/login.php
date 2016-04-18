
<title>Login</title>
<?php
session_start();
include 'cabecalho.php';
?>
<body>
    <div class="container">		
        <form class="form-signin" method="POST" action="../Controle/ControleFuncionario.php">
            <h2 class="form-signin-heading text-center">Área para Funcionário Cadastrado</h2>
            <label for="inputEmail" class="sr-only">Usuário</label>

            <input type="text" name="login" class="form-control" placeholder="Digitar o login" required autofocus><br />

            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >

            <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        </form>
        <p class="text-center text-danger" >
            <?php
            if (isset($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset($_SESSION['erro']);
            };
            ?>
        </p>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
<nav> 
    <ul  class = "pager" style="text-align: left"> 
        <li> <a href="../index.php">voltar</a></li> 
    </ul> 
</nav>

<footer>
    <?php include'rodape.php'; ?>
</footer>
