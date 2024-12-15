<?php

    include_once('conect_adm.php');
    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE loging SET nome='$nome', cpf='$cpf', email='$email', senha='$senha' WHERE id='$id'";
        
        $result = $conex->query($sqlUpdate);

    }

    header('Location: sistema.php');


?>