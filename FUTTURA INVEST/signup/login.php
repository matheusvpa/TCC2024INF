<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once("conect.php");
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        //print_r('cpf: ' . $cpf);
        //print_r('<br>');
       // print_r('Senha: ' . $senha);

        //verifica se existe algum cpf e senha na tabela
        $sql = "SELECT * FROM tabela WHERE cpf = '$cpf' and senha = '$senha'";

        $result = $conexao->query($sql);
        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: signin.php');
        }
        else
        {
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            header('Location: indexdashboard.php');
        }
    }
    else
        //Não acessa
        header("Location: signin.php");
?>