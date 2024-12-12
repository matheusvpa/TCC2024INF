<?php

include_once('conect_adm.php');
if(isset($_POST['update'])){

    $id = $user_data['id'];
    $nome = $user_data['nome'];
    $cpf = $user_data['cpf'];
    $email = $user_data['email'];
    $senha = $user_data['senha'];

    $sqlInsert = "UPDATE loging SET nome='$nome',cpf='$cpf',email='$email',senha='$senha' WHERE id='$id'";
    
    $result = $conex->query($sqlInsert);

}

?>