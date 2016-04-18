<?php

include '../Pesistencia/conexao.php';
include '../Modelo/Usuario.class.php';
?>
<?php

class UsuarioDAO {

    public function inserirUsuario(Usuario $usuario, mysqli $con) {
        $sql = "insert into usuarios(nome,secretaria,cpf,secretario,
               telefone,email) values (?,?,?,?,?,?)";
        $nome = $usuario->getNome();
        $secretaria = $usuario->getSecretaria();
        $cpf = $usuario->getCpf();
        $secretario = $usuario->getSecretario();
        $telefone = $usuario->getTelefone();
        $email = $usuario->getEmail();
        $stm = $con->prepare($sql);
        $stm->bind_param("ssssss", $nome, $secretaria, $cpf, $secretario, $telefone, $email);
        $stm->execute();
    }

    public static function atualizarUsuario($nome, $secretaria, $cpf, $secretario, $telefone, $email, $id, mysqli $con) {
        $sql = "update usuarios set nome = ?,secretaria = ?,cpf = ?,secretario = ?,telefone = ?,email = ? where cod_usuario = ?";
        $stm = $con->prepare($sql);
        $stm->bind_param("ssssssi", $nome, $secretaria, $cpf, $secretario, $telefone, $email, $id);
        $stm->execute();
    }

    public static function EditarUsuario($id, mysqli $con) {
        $sql = $con->prepare("select cod_usuario,nome,secretaria,cpf,secretario,"
                . "telefone,email from usuarios where cod_usuario=?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $sql->bind_result($cod_usuario,$nome, $secretaria, $cpf, $secretario, $telefone, $email);
        $sql->fetch();
        $array = array("cod"=>$cod_usuario,"nome"=>$nome,"secretaria"=> $secretaria,"cpf"=>$cpf,
            "secretario"=>$secretario, "telefone"=>$telefone, "email"=>$email);
        return $array;
    }

    public function visualizarUsuario($id, $con) {
        $sql = $con->prepare("select cod_usuario,nome,secretaria,cpf,secretario,"
                . "telefone,email from usuarios where cod_usuario=?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $sql->bind_result($cod_usuario,$nome, $secretaria, $cpf, $secretario, $telefone, $email);
        $sql->fetch();
        $array = array("cod"=>$cod_usuario,"nome"=>$nome,"secretaria"=> $secretaria,"cpf"=>$cpf,
            "secretario"=>$secretario, "telefone"=>$telefone, "email"=>$email);
        return $array;
    }

    public static function ExcluirUsuario($id, mysqli $con) {
        $sql = "DELETE FROM usuarios WHERE cod_usuario =?";
        $stm = $con->prepare($sql);
        $stm->bind_param('i', $id);
        $stm->execute();
    }

       public static function listaUsuarios(mysqli $con) {
        $sql = "SELECT * FROM usuarios ORDER BY cod_usuario LIMIT 10";
        $resultado = mysqli_query($con, $sql);
        return $resultado;
    }

    public static function buscaNomeUsuario($nome, mysqli $con) {
         $sql = "SELECT nome FROM usuarios WHERE nome = '$nome'";
        $stm = mysqli_query($con, $sql);
        $row = $stm->num_rows;

        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function buscaquantidade($quant, mysqli $con) {
        $sql = "SELECT * FROM usuarios ORDER BY nome LIMIT $quant";
        $resultado = mysqli_query($con, $sql);
        $res = $resultado->num_rows;
        if ($res > 0) {
            return true;
        } else {
            return false;
        }

    }
    


    public static function buscaId($id, mysqli $con) {
        $sql = "SELECT * FROM usuarios WHERE cod_usuario = $id";
        $stm = mysqli_query($con, $sql);
        $row = mysqli_num_rows($stm);
        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }
     public static function buscaUltmosIds($id, mysqli $con) {
        $sql = "SELECT * FROM usuarios ORDER BY cod_usuario DESC LIMIT $id";
        $stm = mysqli_query($con, $sql);
        $row = mysqli_num_rows($stm);
        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>
