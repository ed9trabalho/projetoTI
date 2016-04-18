<?php
    include 'conexao.php';
    include '../Modelo/Funcionario.class.php';


class FuncionarioDAO {
    public static function validarLogin($login,$senha, mysqli $con){
       
        $sql = "SELECT email,senha FROM funcionario WHERE email= ? AND senha= ?";
        $stm = $con->prepare($sql) or dir(mysql_error());
        $stm->bind_param("ss", $login, $senha);
        $stm->execute();   
        $stm->bind_result($login,$senha);
        $stm->store_result();
        $row = $stm->num_rows;
        
        if($row > 0){
            return true;
            
        }else{
            return false;
        }     
    }
   
      
    
}
