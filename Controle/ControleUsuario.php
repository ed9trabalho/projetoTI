 <title>Cadastrando</title>
<?php 
    
    include '../Pesistencia/UsuarioDAO.php';
    include '../Visao/cabecalho.php';   
    
    $nome = trim($_POST['nome']);
    $secretaria = trim($_POST['secretaria']);
    $cpf = trim($_POST['cpf']);
    $secretario = trim($_POST['secretario']);
    $telefone = trim($_POST['telefone']);
    $email = trim($_POST['email']);
    if(empty($_POST['nome']) || empty($_POST["secretaria"]) ||
    empty($_POST['cpf']) || empty($_POST['secretario']) || 
    empty($_POST['telefone']) || empty($_POST['email'])){
        header("location:../Visao/CadastroUsuario.php");
    } 
    
    $usuario = new Usuario();
    $usuario->setNome($nome);
    $usuario->setSecretaria($secretaria);
    $usuario->setCpf($cpf);
    $usuario->setSecretario($secretario);
    $usuario->setTelefone($telefone);
    $usuario->setEmail($email);
    
    $UsuarioDAO = new UsuarioDAO();
    $UsuarioDAO->inserirUsuario($usuario,$con);
    
    header("location:../Visao/CadastroUsuario.php")
     
     
?>
 
 <a href="../CadastroUsuario.php">Voltar a página anterior</a>
<?php include '../Visao/rodape.php'; ?>
