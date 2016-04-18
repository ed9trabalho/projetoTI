<?php
include './menu_admin.php';
include '../Pesistencia/UsuarioDAO.php';
//echo '22';
if (!isset($_GET['id'])) {
    header("location:listagemUsuarios.php");
}
$id = $_GET['id'];
//Executa consulta
$UsuarioDAO = new UsuarioDAO();
$array = $UsuarioDAO->visualizarUsuario($id, $con);
?>
<div class="container theme-showcase" role="main">      
    <div class="page-header">
        <h2>Visualização do dados do Usuário</h2>
    </div>

    <div class="row">
        <div class="pull-right">
            <a href='listagemUsuarios.php?id=<?= $array['cod'] ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>

            <a href='editarUsuario.php?id=<?= $array['cod'] ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>

            <a href='ApagarUsuario.php?id=<?= $array['cod'] ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
        </div>
    </div>


    <div class="table-responsive">          
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome:</th>
                    <th>Secretaria de Lotação:</th>
                    <th>CPF</th>
                    <th>Secretario Responsável:</th>
                    <th>Telefone Pessoal:</th>
                    <th>E-mail:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $array['cod']?></td>
                    <td><?= $array['nome']?></td>
                    <td><?= $array['secretaria']?></td>
                    <td><?= $array['cpf']?></td>
                    <td><?= $array['secretario']?></td>
                    <td><?= $array['telefone']?></td>
                    <td><?= $array['email']?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<nav> 
    <ul  class = "pager" style="text-align: left"> 
        <li> <a href="listagemUsuarios.php">voltar</a></li> 
    </ul> 
</nav>