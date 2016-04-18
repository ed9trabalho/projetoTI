<?php

include './menu_admin.php';
include '../Pesistencia/UsuarioDAO.php';
if(!isset($_GET['id'])){
    header("location:listagemUsuarios.php");
}

$id = mysqli_real_escape_string($con,$_GET['id']);
$resultado = UsuarioDAO::EditarUsuario($id, $con);
?>
<div class="container theme-showcase" role="main">      
    <div class="page-header">
        <h1>Editar Usuário</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="AtualizarUsuario.php">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nome Completo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="<?= $resultado['nome'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Secretaria de Lotação:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="secretaria" placeholder="secretaria de lotação" value="<?= $resultado['secretaria'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">CPF:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cpf" placeholder="cfp" value="<?= $resultado['cpf'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nome do Secretário Responsável:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="secretario" placeholder="Nome do Secretário" value="<?= $resultado['secretario'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telefone Pessoal:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefone" placeholder="Telefone" value="<?= $resultado['telefone'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">E-mail:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?= $resultado['email'] ?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $resultado['cod'] ?>">
                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">atualizar</button>
                        <a href='ApagarUsuario.php?id=<?php echo $resultado['cod']; ?>'>
                            <button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
<nav> 
    <ul  class = "pager" style="text-align: left"> 
        <li> <a href="listagemUsuarios.php">voltar</a></li> 
    </ul> 
</nav>