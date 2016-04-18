<?php
 session_start();

include '../Pesistencia/FuncionarioDAO.php';
?>
<?php
if(!isset($_POST['login']) && !isset($_POST['senha'])){
    header("location:../Visao/login.php");
    exit;
}

$login = mysqli_real_escape_string($con,$_POST["login"]);
$senha =  mysqli_real_escape_string($con,$_POST["senha"]);



if (FuncionarioDAO::validarLogin($login, $senha,$con)) {
    $_SESSION["login"] = $login;
    $_SESSION["senha"] = $senha;
    

    header("Location: ../Visao/listagemUsuarios.php");
} else {
    $_SESSION['erro']="Usuário ou senha invalido";
    header("location:../Visao/login.php");
}
?>