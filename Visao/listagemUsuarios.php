
﻿<?php
include './menu_admin.php';
include '../Pesistencia/UsuarioDAO.php';
?>
<head>
    <title>Lista</title>
    <script src="../javascript/jquery-1.12.1.min.js"></script>
    <script src = "../javascript/filtrando.js"></script>

</head>
<body>
    <div class="container theme-showcase" role="main">   
        <form action="listagemUsuarios.php" method="POST" class="col-md-12">
            <div class="input-group h4">
                <select class="selectpicker" id="categ">
                    <option>Busca pelo nome</option>
                    <option>Busca pela quantidade</option>
                    <option>Busca pelo id</option>
                    <option>Busca pelos últimos ids</option>
                </select>

            </div>
        </form>
     
        <hr>

        <form action="listagemUsuarios.php" method="get" id="form1" class="col-md-12">
            <div class="input-group h4">

                <input name="busca1" class="form-control" id="search" type="text" placeholder="Busca quantidade ou nome">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Busca pelo nome
                    </button>
                </span>

            </div>
        </form>
        <?php
        $var = false;
        $nome = trim($_GET['busca1']);
        if (!empty($nome)) {
            $nome = $_GET['busca1'];
        }
        if (!isset($nome) && empty($nome)) {
            $resultado = UsuarioDAO::listaUsuarios($con);
        } elseif (is_string($nome)) {
            if (UsuarioDAO::buscaNomeUsuario($nome, $con)) {
                $sql = "SELECT * FROM usuarios WHERE nome = '$nome';";
                $resultado = mysqli_query($con, $sql);
            } else {
                global $var;
                $var = true;
                $resultado = UsuarioDAO::listaUsuarios($con);
            }
        }
        ?>
        <form action="listagemUsuarios.php" method="GET" id="form2" class="col-md-12">
            <div class="input-group h4">

                <input name="busca2" class="form-control" id="search" type="text" placeholder="Busca quantidade ou nome">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Busca pela quantidade
                    </button>
                </span>

            </div>
        </form>
        <?php
        $var2 = false;
        $quant = trim($_GET['busca2']);


        if (is_numeric($quant) && $quant > 0) {
            if (UsuarioDAO::buscaquantidade($quant, $con)) {
                $sql = "SELECT * FROM usuarios ORDER BY nome LIMIT $quant";
                $resultado = mysqli_query($con, $sql);
            } else {
                global $var2;
                $var2 = true;
                $resultado = UsuarioDAO::listaUsuarios($con);
            }
        }
        ?>
        <form action="listagemUsuarios.php" method="GET" id="form3" class="col-md-12">
            <div class="input-group h4">

                <input name="busca3" class="form-control" id="search" type="text" placeholder="Busca quantidade ou nome">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Busca pelo id
                    </button>
                </span>

            </div>
        </form>
        <?php
        $var3 = false;
        $id = trim($_GET['busca3']);

        if (!isset($id) && empty($id)) {
            $resultado = UsuarioDAO::listaUsuarios($con);
        } elseif (is_numeric($id) && $id > 0) {
            if (UsuarioDAO::buscaId($id, $con)) {
                $sql = "SELECT * FROM usuarios WHERE cod_usuario = $id";
                $resultado = mysqli_query($con, $sql);
            } else {
                global $var3;
                $var3 = TRUE;
                $resultado = UsuarioDAO::listaUsuarios($con);
            }
        }
        ?>

        <form action="listagemUsuarios.php" method="GET" id="form4" class="col-md-12">
            <div class="input-group h4">

                <input name="busca4" class="form-control" id="search" type="text" placeholder="Busca quantidade ou nome">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Busca pelo últimos ids
                    </button>
                </span>

            </div>
        </form>
        <?php
         $var4 = false;
        $ids = trim($_GET['busca4']);

        if (!isset($ids) && empty($ids)) {
            $resultado = UsuarioDAO::listaUsuarios($con);
        } elseif (is_numeric($ids) && $ids > 0) {
            if (UsuarioDAO::buscaUltmosIds($ids, $con)) {
                $sql = "SELECT * FROM usuarios ORDER BY cod_usuario DESC LIMIT $ids";
                $resultado = mysqli_query($con, $sql);
            } else {
                global $var4;
                $var4 = TRUE;
                $resultado = UsuarioDAO::listaUsuarios($con);
            }
        }
        
        if (($var) && !empty($nome)) {
            echo "<p style='color:red'>Usuário não existe</p>";
            unset($var);
        }
        if ($var2) {
            echo "<p style='color:red'>Quantidade não existe</p>";
            unset($var2);
        }
        if ($var3) {
            echo "<p style='color:red'>Id não existe</p>";
            unset($var3);
        }
         if ($var4) {
            echo "<p style='color:red'>Quantidade de Ids não existe</p>";
            unset($var4);
        }
        ?>


        <div class="page-header">
            <h1>Lista de Cadastros</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table" border="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($linhas = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $linhas['cod_usuario'] . "</td>";
                            echo "<td>" . $linhas['nome'] . "</td>";
                            echo "<td>" . $linhas['cpf'] . "</td>";
                            echo "<td>" . $linhas['email'] . "</td>";
                            ?>
                        <td> 
                            <a href='VisualizarUsuario.php?id=<?= $linhas['cod_usuario'] ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>

                            <a href='editarUsuario.php?id=<?= $linhas['cod_usuario'] ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>

                            <a href='ApagarUsuario.php?id=<?php echo $linhas['cod_usuario']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>

                            <?php
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav> 
        <ul class = "pager" style="text-align: left"> 
            <li> <a href="login.php">voltar</a></li> 
        </ul> 
    </nav>

